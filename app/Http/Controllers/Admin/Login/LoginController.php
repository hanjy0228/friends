<?php
namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use App\Http\Model\Login;
use Illuminate\Http\Request;


class LoginController extends Controller{
    //登录页面
    public function login(){
        return view('login/login');
    }
    //后台展示页面
    public function index(){

        return view('login/index');
    }
    //嵌套后台展示页面
    public function welcome(){
        return view('login/welcome');
    }
    //后台登录
    public function loginok(Request $request){
        $data=$request->post(); //print_r($data);die;

        $username=$data['username'];

        $password=$data['password'];
        $model=new Login();
        $res=$model->login($username,$password);
        if ($res){
            return view('login/index',['username'=>$username]);
        }

    }






}





?>