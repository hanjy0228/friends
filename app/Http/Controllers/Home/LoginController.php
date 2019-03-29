<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Model\Login;
class LoginController extends Controller{
    /*
     * 登陆页面
     */
    public function Login(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            unset($data['_token']);
            $request->session()->put('user',$data['user']);
            $res=DB::table('user')->where(['user'=>$data['user'],'pass'=>$data['pass']])->first();
            if(empty($res)){
                echo "<script>alert('登陆失败');location.href='login'</script>";
            }else{
                echo "<script>alert('登陆成功');location.href='.';</script>";
            }
        }
        return view('home.login.login');
    }

    /*
     * 注册
     */
    public function Admin(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            unset($data['_token']);
            unset($data['pass1']);
            $res=DB::table('user')->insert($data);
            if($res){
                echo "<script>alert('注册成功');location.href='login'</script>";
            }else{
                echo "<script>alert('注册失败');location.href='admin'</script>";
            }
        }
        return view('home.login.admin');
    }

    /*
     * 首页
     */
    public function Index(Request $request){
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $user=$request->session()->get('user');
        $sex=DB::table('user')->where('user',$user)->value('sex');
        //推荐
        if($sex==1){
            $data=DB::table('user')->where('sex',2)->get();
        }else{
            $data=DB::table('user')->where('sex',1)->get();
        }
        //成功案例
        $data1=DB::table('story')->get();
        return view('home.index.index',['list'=>$data,'arr'=>$data1]);
    }
    //详情内容
    public function Case_list(Request $request){
        $id=$request->input('id');
        $data=DB::table('story')->where('id',$id)->first();
        //print_r($data->title);die;
        return view('home.case.case_list',['list'=>$data]);
    }
    //搜索
    public function Sou(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            unset($data['_token']);

            $tj1 = "1=1";
            $tj2 = "1=1";
            $tj3 = "1=1";
            $tj4 = "1=1";

            if(!empty($data['sex']))
            {
                $tj1 = "sex = ".$data['sex'];
            }
            if(!empty($data['maraystate']))
            {
                $tj2 = "maraystate = ".$data['maraystate'];
             //   echo $tj2 ; die ;
            }
            if(!empty($data['age']) && !empty($data['age1']))
            {
                $tj3 = "age>= ".$data['age']." and age <=".$data['age1'];
            }
            if(!empty($data['height']) && !empty($data['height1']))
            {
                $tj4 = "height >=". $data['height']." and height <=".$data['height1'];
            }

                $data=DB::select("select * from user where $tj1 and $tj2 and $tj3 and $tj4");

            //成功案例
            $data1=DB::table('story')->get();
            return view('home.index.index',['list'=>$data,'arr'=>$data1]);
        }
    }
    //推荐人信息
    public function Show(Request $request){
        $id=$request->input('id');
        $request->session()->put('id',$id);
        $data=DB::table('user')->where('id',$id)->first();
//        $comm = DB::select("select * from comment inner join user on comment.p_id = user.id") ;
        $comm = DB::select("select * from comment where comment.p_id = $id") ;
//        print_r(user.id);die;
        return view('home.index.show',['data'=>$data,'comm'=>$comm]);
    }
    public function content_sub(Request $request)
    {
        if ($request->isMethod('post')) {
            $id = $request->session()->get('id');
            $user = $request->session()->get('user');
            $content = $request->post('content');
            if (empty($content)) {
                echo "<script>alert('不能为空');location.href='show';</script>";
            }
            $time = date('Y-m-d H:i:s');
            $u_id = DB::table('user')->where('user', $user)->value('id');
            $res = DB::table('comment')->insert(['content' => $content, 'p_id' => $id, 'u_id' => $u_id, 'time' => $time]);
            if ($res) {
                return "发表成功";
            } else {
                return "發表失敗";
            }
        }
    }

    //发私信
    public function Si(Request $request){

        if($request->isMethod('post')){
            $id=$request->session()->get('id');
            $user=$request->session()->get('user');
            $content=$request->input('content');
            if(empty($content)){
                echo "<script>alert('不能为空');location.href='si';</script>";
            }
            $time=date('Y-m-d H:i:s');
            $u_id=DB::table('user')->where('user',$user)->value('id');
            $res=DB::table('self_message')->insert(['content'=>$content,'to_id'=>$id,'get_id'=>$u_id,'time'=>$time]);
            if($res){
                echo "<script>alert('发送成功');location.href='.';</script>";
            }else{
                echo "<script>alert('发送失败');location.href='si';</script>";
            }
        }
        return view('home.index.si');
    }
    //点赞
    public function Zan(Request $request){
//        $id=$request->input('id');
//        $d_time=date('Y-m-d H:i:s');
//        $z_time=date('Y-m-d');
//        $z_time=strtotime($z_time);
//        $zan=DB::table('user')->where('id',$id)->value('zan');
//        $time=DB::table('user')->where('id',$id)->value('z_time');
//        $time=strtotime($time);
//        $zan=$zan+1;
//        if($time<$z_time){
//            $res=DB::table('user')->where('id',$id)->update(['zan'=>$zan]);
//            DB::table('user')->where('id',$id)->update(['z_time'=>$d_time]);
//            return json_encode($zan);
//        }else{
//            return false;
//        }
        if ($request->isMethod('post')) {
            $id=$request->input('id');
            $user = $request->session()->get('user');
            $u_id = DB::table('user')->where('user', $user)->value('id');
            $zan=DB::table('user')->where('id',$id)->value('zan');
            $zan=$zan+1;
            $p_nichen= DB::table('user')->where('user', $user)->value('nichen');
            $zaned=DB::select("select u_id from zan where zan.u_id =$u_id and zan.p_id=$id") ;
            if($zaned){
                echo "<script>alert('您已经点赞过，请勿重复点赞');location.href='.'</script>";
            } else {
                $resZan = DB::table('zan')->insert([ 'p_id' => $id, 'u_id' => $u_id,'p_nichen'=>$p_nichen]);
                $resUser=DB::table('user')->where('id',$id)->update(['zan'=>$zan]);
                if ($resZan&&$resUser) {
                    echo "<script>alert('点赞成功');location.href='.'</script>";
                }
            }

        }
    }


}