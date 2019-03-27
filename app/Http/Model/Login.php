<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model{
    //后台登录页面接值
    public function login($username,$password){
        $res=DB::table('admin')->where(['username'=>$username,'password'=>$password])->first();
        if (!empty($res)){
            return true;
        }else{
            echo "会员名或者密码错误";
            return false;
        }
    }




}




?>