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
    Route::any('logout','LoginController@Logout');
    Route::any('login','LoginController@Login');
    Route::any('admin','LoginController@Admin');
    Route::any('sou','LoginController@Sou');
    Route::any('show','LoginController@Show');
    Route::any('si','LoginController@Si');
    Route::any('zan','LoginController@Zan');
    Route::any('content_sub','LoginController@content_sub');
    Route::any('case','CaseController@Case');
    Route::any('active','CaseController@active');
    Route::any('active_index','CaseController@active_index');
    Route::any('riji','CaseController@riji');
    Route::any('show_riji','CaseController@show_riji');
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
    Route::any('/simi','SelfController@simi');
    Route::any('/self_diary_del','SelfController@self_diary_del');
    Route::any('/self_send_diary','SelfController@self_send_diary');
    Route::any('/self_send_diary_sub','SelfController@self_send_diary_sub');
    Route::any('/upd_state','SelfController@upd_state');
    Route::any('/upd_state_sub','SelfController@upd_state_sub');
    Route::any('/upd_pass','SelfController@upd_pass');
    Route::any('/upd_pass_sub','SelfController@upd_pass_sub');
    Route::any('/char','SelfController@char');
    Route::any('/char_list','SelfController@char_list');
    Route::any('/comment','SelfController@comment');
    Route::any('/content_sub','SelfController@content_sub');
    Route::any('/zan','SelfController@zan');
    Route::any('/see_zan','SelfController@See_zan');

});

