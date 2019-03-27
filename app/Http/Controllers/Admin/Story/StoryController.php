<?php
namespace App\Http\Controllers\Admin\Story;

use App\Http\Controllers\Controller;
use App\Http\Model\Story;
use Illuminate\Http\Request;

class StoryController extends Controller{
    //成功故事展示
     public function storylist(){
         $model=new Story();
         $res=$model->storyshow();
         if ($res){
         return view('story/story-list',['res'=>$res]);
         }
     }
     //成功故事添加
    public function storyadd(){
         return view('story/story-add');
    }
    public function storyaddok(Request $request){
         $data=$request->post();
         if (!file_exists('./uploads')){
             mkdir('./uploads');
         }else{
             //判断文件是否上传
         if ($request->hasFile('img')){
             //获取文件后缀
             $ext=$request->file('img')->getClientOriginalExtension();

             //新的文件名
             $newfile=rand(1,10).".".$ext;
             $request->file('img')->move('./uploads',$newfile);
           }
         }
         $data['img']=$newfile;
         //print_r($data);die;
        $model=new Story();
        $res=$model->addok($data);
        if ($res){
            return redirect('admin/story/storylist');
        }
    }
    public function storydel(Request $request){
         $id=$request->post();
         //print_r($id);die;
        $model=new Story();
        $res=$model->storydele($id);
        if ($res){
            return redirect('admin/story/storylist');
        }

    }


}









?>