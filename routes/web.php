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
    return view('home');
});

//所有客户展示
Route::get('clients','StaticPagesController@ClientsIndex')->name('clients/index');

//公司客户集合路由
Route::resource('company','CompanysController');
//动作路由，增加删除更改公司客户
Route::post('company','MovementsController@create_company');

//自然人客户集合路由
Route::resource('natural','NaturalsController');
//增加删除更改自然人客户
Route::post('natural','MovementsController@create_natural');

//公司项目列表
Route::get('clients/items/{cid}','StaticPagesController@ClientsCompanyItems');

//自然人项目列表
Route::get('natural/items/{cid}','StaticPagesController@ClientsNaturalItems');

//创建项目
Route::post('clients/items/{cid}','ItemsController@CreateItems');
Route::post('natural/items/{cid}','ItemsController@CreateItems');
//项目阶段详情
Route::get('items/phase/show/{iid}','ItemsController@ItemsShow');

//项目表单录入
Route::post('items/phase/show/{iid}','ItemsPhasesController@create_tables');
//项目表单更改更新完成
Route::post('items/phase/edit/{pid}','ItemsPhasesController@update_tables');
//阶段创建生成
Route::get('items/phase/create','ItemsPhasesController@create_phase');