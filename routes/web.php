<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'home'],function (){
    Route::any('','LoginController@Index');
    Route::any('upload', 'LoginController@upload');
    Route::any('login','LoginController@Login');
    Route::any('admin','LoginController@Admin');
    Route::any('sou','LoginController@Sou');
    Route::any('show','LoginController@Show');
    Route::any('si','LoginController@Si');
    Route::any('zan','LoginController@Zan');
    Route::any('content_sub','LoginController@content_sub');
    Route::any('party','PartyController@Party');
    Route::any('diary','DiaryController@Diary');
    Route::any('case','CaseController@Case');
    Route::any('active','CaseController@active');
    Route::any('riji','CaseController@riji');
    Route::any('case_list','CaseController@Case_list');

});
Route::group(['namespace'=>'index','prefix'=>'index'],function (){
    Route::any('/self','SelfController@self');
    Route::any('/edit_self','SelfController@edit_self');
    Route::any('/upd_user','SelfController@upd_user');
    Route::any('/self_content','SelfController@self_content');
    Route::any('/self_content_upd','SelfController@self_content_upd');
    Route::any('/self_message','SelfController@self_message');
    Route::any('/see_comment','SelfController@see_comment');
    Route::any('/see_message','SelfController@see_message');
    Route::any('/see_get_message','SelfController@see_get_message');
    Route::any('/self_get_message','SelfController@self_get_message');
    Route::any('/self_diary','SelfController@self_diary');
    Route::any('/self_diary_del','SelfController@self_diary_del');
    Route::any('/self_send_diary','SelfController@self_send_diary');
    Route::any('/self_send_diary_sub','SelfController@self_send_diary_sub');
    Route::any('/upd_state','SelfController@upd_state');
    Route::any('/upd_state_sub','SelfController@upd_state_sub');
    Route::any('/upd_pass','SelfController@upd_pass');
    Route::any('/upd_pass_sub','SelfController@upd_pass_sub');
    Route::any('/actives','SelfController@actives');
    Route::any('/active_index','SelfController@active_index');
    Route::any('/char','SelfController@char');
    Route::any('/char_list','SelfController@char_list');
    Route::any('/chos','SelfController@chos');
    Route::any('/secoty','SelfController@secoty');
    Route::any('/secoty_sub','SelfController@secoty_sub');
    Route::any('/comment','SelfController@comment');
    Route::any('/content_sub','SelfController@content_sub');
    Route::any('/niming','SelfController@niming');
    Route::any('/see_zan','SelfController@See_zan');

});
Route::any('admin/login/login','Admin\Login\LoginController@login');
Route::any('admin/login/index','Admin\Login\LoginController@index');
Route::any('admin/login/welcome','Admin\Login\LoginController@welcome');
Route::any('admin/login/loginok','Admin\Login\LoginController@loginok');

Route::any('admin/user/userlist','Admin\User\UserController@userlist');
Route::any('admin/user/userdel','Admin\User\UserController@userdel');
Route::any('admin/user/del','Admin\User\UserController@del');

Route::any('admin/comment/commentlist','Admin\Comment\CommentController@commentlist');
Route::any('admin/comment/comdel','Admin\Comment\CommentController@comdel');

Route::any('admin/story/storylist','Admin\Story\StoryController@storylist');
Route::any('admin/story/storyadd','Admin\Story\StoryController@storyadd');
Route::any('admin/story/storyaddok','Admin\Story\StoryController@storyaddok');
Route::any('admin/story/storydel','Admin\Story\StoryController@storydel');
