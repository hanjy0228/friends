<?php
namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller{
    //后台管理前台用户展示页面
    public function userlist(){
        //echo "123";
        $model=new User();
        $res=$model->show();
        if ($res){
            return view('user/member-list',['res'=>$res]);
        }

    }
    //后台管理前台用户删除页面
    public function userdel(){
        $model=new User();
        $res=$model->show();
       // print_r($res);die;
        return view('user/member-del',['res'=>$res]);
    }

    public function del(Request $request){
        $id=$request->get('id');
        // print_r($id);die;
        $model=new User();
        $res=$model->dell($id);
       // print_r($res);die;
        if ($res){
            return redirect('admin/user/userdel');
        }

    }


}




?>