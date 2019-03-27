<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model{
    public function show(){
        $res=DB::table('user')->where(['state'=>1])->get();
        //print_r($res);die;
        if ($res){
            return $res;
        }

    }
    //在用户删除页面点击删除数据
    public function dell($id){

          $res=DB::table('user')->where(['id'=>$id])->update(['state'=>0]);
          //print_r($res);die;
          if ($res){
              return true;
          }
    }


}




?>