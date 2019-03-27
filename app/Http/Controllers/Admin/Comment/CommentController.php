<?php
namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Http\Model\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller{
    //评论数据展示
    public function commentlist(){
        $model=new Comment();
        $res=$model->clist();
        //print_r($res);die;
        return view('comment/comment-list',['data'=>$res]);
    }
    //删除评论的数据
    public function comdel(Request $request ){
        $id=$request->get('id');
       // print_r($id);die;
        $model=new Comment();
        $res=$model->cdel($id);
        if ($res){
            return redirect('admin/comment/commentlist');
        }
    }




}



?>