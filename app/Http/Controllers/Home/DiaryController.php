<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Model\Diary;
class DiaryController extends Controller{
    /*
     * 日记
     */
    public function Diary(){
        return view('home.diary.diary');
    }
}