<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model{
   public function clist(){
       $res=DB::table('comment')->get();
        //print_r($res);die;
       if ($res){
          return $res;
       }
   }
   public function cdel($id){
       $res=DB::table('comment')->delete($id);
       if ($res){
           return true;
       }
   }

}




?>