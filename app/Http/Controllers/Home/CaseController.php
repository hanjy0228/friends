<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CaseController extends Controller{
    /*
     * 幸福案例
     */
    public function Case(Request $request){
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $data=DB::table('story')->get();
        //print_r($data[0]->title);die;
        return view('home.case.case',['list'=>$data]);
    }
    //内容
    public function Case_list(Request $request){
        $id=$request->input('id');
        $data=DB::table('story')->where('id',$id)->first();
        return view('home.case.case_list',['list'=>$data]);
    }
    public function riji(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $res = DB::select("select * from user inner join riji on (riji.u_id = user.id) and riji.state=1");
        return view('home.case.riji',['data'=>$res,]);
    }
    public function show_riji(Request $request)
    {
        $id=$request->input('id');
        $data=DB::table('riji')->where('id',$id)->first();
        $res = DB::select("select * from user inner join riji on (riji.u_id = user.id) and riji.state=1 and riji.id=$id");
        return view('home.case.show_riji',['list'=>$data,'data'=>$res]);
    }
    public function active(Request $request)
    {
        if(empty($request->session()->get('user')))
        {
            echo "<script>location.href='/login'</script>";
        }
        $data=DB::table('active')->get();
        return view('home.case.active',['list'=>$data]);
    }
    public function active_index(Request $request){
        $id=$request->input('id');
        $data=DB::table('active')->where('id',$id)->first();
        return view('home.case.active_index',['list'=>$data]);
    }
}