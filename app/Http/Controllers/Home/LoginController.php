<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Support\Facades\Storage;
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
//            print_r($res);die();
            if(empty($res)){
                echo "<script>alert('登陆失败');location.href='login'</script>";
            }else{
                echo "<script>alert('登陆成功');location.href='.';</script>";
            }
        }
        return view('home.login.login');
    }
    public function Logout(Request $request){
        $request->session()->flush();
        echo "<script>location.href='login'</script>";
        return view('home.login.logout');
    }
    // 注册
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
    //首页
    public function Index(Request $request){
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $user=$request->session()->get('user');
        $id=DB::table('user')->where('user',$user)->value('id');
        $sex=DB::table('user')->where('user',$user)->value('sex');
        $message_flag=DB::select("select * from self_message where self_message.r_id=$id and self_message.state=0") ;
        $comment_flag=DB::select("select *  from comment where comment.r_id=$id and comment.state=0") ;
        $zan_flag=DB::select("select * from zan where zan.r_id=$id and zan.state=0") ;
        //推荐
        if($sex==1){
            $data=DB::select("select * from user where user.sex=2 and user.intor=(select need from user where user.id=$id)") ;
        }else{
            $data=DB::select("select * from user where user.sex=1 and user.intor=(select need from user where user.id=$id)") ;
        }
        //成功案例
        $data1=DB::table('story')->get();
//        print_r($message_flag);die();
        return view('home.index.index',['list'=>$data,'zan_flag'=>$zan_flag,'arr'=>$data1,'message_flag'=>$message_flag,'comment_flag'=>$comment_flag]);
    }
    //详情内容
    public function Case_list(Request $request){
        $id=$request->input('id');
        $data=DB::table('story')->where('id',$id)->first();
        return view('home.case.case_list',['list'=>$data]);
    }
    //搜索
    public function Sou(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            unset($data['_token']);
            $tj2 = "1=1";
            $tj3 = "1=1";
            $tj4 = "1=1";
            if(!empty($data['maraystate']))
            {
                $tj2 = "maraystate = ".$data['maraystate'];
            }
            if(!empty($data['age']) && !empty($data['age1']))
            {
                $tj3 = "age>= ".$data['age']." and age <=".$data['age1'];
            }
            if(!empty($data['height']) && !empty($data['height1']))
            {
                $tj4 = "height >=". $data['height']." and height <=".$data['height1'];
            }
                $data=DB::select("select * from user where $tj2 and $tj3 and $tj4");
            //成功案例
            $data1=DB::table('story')->get();
            $user=$request->session()->get('user');
            $id=DB::table('user')->where('user',$user)->value('id');
            $message_flag=DB::select("select * from self_message where self_message.r_id=$id and self_message.state=0") ;
            $comment_flag=DB::select("select *  from comment where comment.r_id=$id and comment.state=0") ;
            $zan_flag=DB::select("select * from zan where zan.r_id=$id and zan.state=0") ;
            return view('home.index.index',['list'=>$data,'zan_flag'=>$zan_flag,'arr'=>$data1,'message_flag'=>$message_flag,'comment_flag'=>$comment_flag]);
        }
    }
    //推荐人信息
    public function Show(Request $request){
        $id=$request->input('id');
        $request->session()->put('id',$id);
        $data=DB::table('user')->where('id',$id)->first();
        $comm= DB::select("select * from comment inner join user on (comment.p_id = user.id) and comment.r_id=$id") ;
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
            $time = date('Y-m-d ');
            $u_id = DB::table('user')->where('user', $user)->value('id');
            $res = DB::table('comment')->insert(['state'=>0,'content' => $content, 'r_id' => $id, 'p_id' => $u_id, 'time' => $time]);
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
            $time=date('Y-m-d');
            $u_id=DB::table('user')->where('user',$user)->value('id');
            $res=DB::table('self_message')->insert(['content'=>$content,'r_id'=>$id,'p_id'=>$u_id,'time'=>$time]);
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
        if ($request->isMethod('post')) {
            $id=$request->input('id');
            $user = $request->session()->get('user');
            $p_id = DB::table('user')->where('user', $user)->value('id');
            $zan=DB::table('user')->where('id',$id)->value('zan');
            $zan=$zan+1;
            $time=date('Y-m-d');
            $p_nichen= DB::table('user')->where('user', $user)->value('nichen');
            $resZan = DB::table('zan')->insert([ 'time'=>$time,'p_id' => $p_id, 'r_id' => $id,'state'=>0,'p_nichen'=>$p_nichen]);
            $resUser=DB::table('user')->where('id',$id)->update(['zan'=>$zan]);
            if ($resZan&&$resUser) {
                echo "<script>alert('点赞成功');location.href='.'</script>";
            }
        }
    }

}