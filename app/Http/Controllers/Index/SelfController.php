<?php
namespace App\Http\Controllers\index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SelfController extends Controller
{
    //个人信息修改
    public function self(Request $request)
    {

        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');

        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('user')->where('id', $user->id)->first();
        //var_dump($res);die ;

        return view('index.self', ['data' => $res]);
    }
    public function edit_self(Request $request)
    {

        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');

        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('user')->where('id', $user->id)->first();
        //var_dump($res);die ;

        return view('index.edit_self', ['data' => $res]);
    }
    //修改用户信息
    public function upd_user(Request $request)
    {
        $study = $request->post('study');
        $hu = $request->post('hu');
        $need = $request->post('need');
        $intor = $request->post('intor');
        $maraystate = $request->post('maraystate');
        $height = $request->post('height');
        $profession = $request->post('profession');
        $money = $request->post('money');
        $id = $request->post('id');
        $res = DB::table('user')->where('id', $id)->update(['intor'=>$intor,'need'=>$need,'study' => $study, 'hu' => $hu, 'maraystate' => $maraystate, 'height' => $height, 'profession' => $profession, 'money' => $money]);
        if ($res) {
            echo "<script>alert('修改成功');location.href='/index/self'</script>";
        } else {
            echo "<script>alert('出错了');location.href='/index/self'</script>";
        }
    }
    //个性签名
    public function self_content(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        //获取session
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('user')->where('id', $user->id)->first();
        return view('index.self_content', ['data' => $res]);
    }
    public function self_content_upd(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }

        $produce = $request->post('produce');
        $id = $request->post('id');
        // var_dump($produce.$id);die;
        $res = DB::table('user')->where('id', $id)->update(['produce' => $produce]);
        if ($res) {
            echo "<script>alert('修改成功');location.href='/index/self_content'</script>";
        } else {
            echo "<script>alert('出错了');location.href='/index/self_content'</script>";
        }
    }
    //s收到的私信
    public function self_message(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        //session
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('self_message')->where('r_id', $user->id)->join('user', 'self_message.p_id', '=', 'user.id')->select('self_message.*', 'user.nichen')->get();
        $count = $res->count();
        return view('index.self_message', ['data' => $res,'datas'=>$user,'count' => $count]);
    }
    public function see_message(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->get('id');
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        DB::table('self_message')->where('id', $id)->update(['state' => 1]);
        $res = DB::table('self_message')->where('self_message.id', $id)->join('user', 'self_message.p_id', '=', 'user.id')
            ->select('self_message.*', 'user.nichen')->get();
        return view('index.see_message', ['data' => $res,'datas'=>$user]);

    }
    public function see_zan(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->get('id');
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        DB::table('zan')->where('id', $id)->update(['state' => 1]);
        $res = DB::table('zan')->where('zan.id', $id)->join('user', 'zan.r_id', '=', 'user.id')
            ->select('zan.*', 'user.nichen')->get();
        return view('index.see_zan', ['data' => $res,'datas'=>$user]);

    }
    //已经发送的私信
    public function self_get_message(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('self_message')->where('p_id', $user->id)->join('user', 'self_message.r_id', '=', 'user.id')->select
        ('self_message.*', 'user.nichen')->get();
//        print_r($res);die();
        $count = $res->count();

        return view('index.self_get_message', ['data' => $res, 'count' => $count,'datas'=>$user]);
    }
    public function see_get_message(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->get('id');
        //echo $id ; die ;
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('self_message')->where('self_message.id', $id)->join('user', 'self_message.r_id', '=', 'user.id')
            ->select('self_message.*', 'user.nichen')->get();

        return view('index.see_get_message', ['data' => $res,'datas'=>$user]);

    }
    //日记
    public function self_diary(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        //session
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::select("select * from riji where riji.u_id = $user->id ");
        return view('index.self_diary', ['data' => $res,'datas'=>$user]);
    }
    public function simi(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id=$request->input('id');
        $data=DB::table('riji')->where('id',$id)->first();
        $res = DB::select("select * from user inner join riji on (riji.u_id = user.id) and riji.id=$id");
        return view('index.simi',['list'=>$data,'data'=>$res]);
    }
    //写日记
    public function self_send_diary(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        return view('index.self_send_diary',['datas'=>$user]);
    }
    public function self_diary_del(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->get('id');
        $res = DB::table('riji')->where('id', $id)->delete();
        if (!empty($res)) {
            echo "<script>alert('删除成功');location.href='/index/self_diary'</script>";
        } else {
            echo "<script>alert('删除失败');location.href='/index/self_send_diary'</script>";
        }
    }
    public function self_send_diary_sub(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $data['title'] = $request->post('title');
        $data['state'] = $request->post('state');
        $data['content'] = $request->post('content');
        $data['time'] = date('Y-m-d');
        $res = DB::table('riji')->where('title', $data['title'])->select('id')->get()->toArray();
        if (empty($res)) {
            //session
            $value = $request->session()->get('user');
            $user = DB::table('user')->where('user',$value)->first();
            $data['u_id'] = $user->id;
            $res = DB::table('riji')->insert($data);
            if (!empty($res)) {
                echo "<script>alert('添加成功');location.href='/index/self_diary'</script>";
            } else {
                echo "<script>alert('添加失败了');location.href='/index/self_send_diary'</script>";
            }
        } else {

            echo "<script>alert('标题已经存在');location.href='/index/self_send_diary'</script>";
        }
    }
    //修改状态
    public function upd_state(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        // echo 11 ;die ;
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('user')->where('id', $user->id)->first();
        return view('index.upd_state', ['data' => $res]);
    }
    public function upd_state_sub(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->post('id');
        $state = $request->post('state');
        $user = DB::table('user')->where('id', $id)->first();
        if ($state == $user->state) {
            echo "<script>alert('状态相同,请勿重复提交');location.href='/index/upd_state'</script>";
        }
        $res = DB::table('user')->where('id', $id)->update(['state' => $state]);
        if ($res) {
            echo "<script>alert('修改成功');location.href='/index/upd_state'</script>";
        }

    }
    //修改密码
    public function upd_pass(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        //session
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::table('user')->where('id', $user->id)->first();
        return view('index.upd_pass', ['data' => $res]);
    }
    public function upd_pass_sub(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->post('id');
        $oldpass = $request->post('oldpass');
        $newpass = $request->post('newpass');
        $confirmpass = $request->post('confirmpass');
        $user = DB::table('user')->where('id', $id)->first();
        if ($user->pass != $oldpass) {
            echo "<script>alert('原始密码不正确');location.href='/index/upd_pass'</script>";
        }
        if (empty($oldpass) || empty($newpass) || empty($confirmpass)) {
            echo "<script>alert('不能为空,请重新输入');location.href='/index/upd_pass'</script>";
        }
        if ($newpass != $confirmpass) {
            echo "<script>alert('两次密码不同');location.href='/index/upd_pass'</script>";
        }
        $res = DB::table('user')->where('id', $id)->update(['pass' => $newpass]);
        if ($res) {
            echo "<script>alert('修改成功');location.href='/index/upd_pass'</script>";
        } else {
            echo "<script>alert('出错了');location.href='/index/upd_pass'</script>";
        }
    }
    //进入活动页面
    public function active_index(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        //session
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();

        $res =  DB::table('my_success')->where('m_id',$user->id)->get()->first();
        if(!empty($res))
        {
            $res1 = DB::table('user')->where('id',$res->u_id)->get()->first();
        }
        return view('index.active_index',['data'=>$res1]);
    }
    public function comment(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $id=$user->id;
        $comm= DB::select("select * from user inner join comment on (comment.p_id = user.id) and comment.r_id=$id") ;
        return view('index.comment',['data'=>$user,'comm'=>$comm]);
    }
    public function see_comment(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $id = $request->get('id');
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        DB::table('comment')->where('id', $id)->update(['state' => 1]);
        $res = DB::table('comment')->where('comment.id', $id)->join('user', 'comment.p_id', '=', 'user.id')
            ->select('comment.*', 'user.nichen')->get();
        return view('index.see_comment', ['data' => $res,'datas'=>$user]);

    }
    public function zan (Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $value = $request->session()->get('user');
        $user = DB::table('user')->where('user',$value)->first();
        $res = DB::select("select * from zan where zan.r_id =  $user->id") ;
        return view('index.zan',['data'=>$res,'datas'=>$user]);
    }

}