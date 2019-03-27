<?php
namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Story extends Model{
       //成功故事展示
    public function storyshow(){
        $res=DB::table('story')->get();
        //print_r($res);die;
        if ($res){
            return $res;
        }
    }
    //添加数据
    public function addok($data){

        $res=DB::table('story')->insert($data);
       // print_r($res);die;
        if ($res){
            return true;
        }
    }
    //删除数据
    public function storydele($id){
        $res=DB::table('story')->delete($id);
        if ($res){
            return true;
        }


    }






}









?>