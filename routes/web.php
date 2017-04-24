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

Route::get('/test/{$name}',function ($name){
  $data['user']=$name;
  // $data['user']='Gogo';
  // $data['age']=18;
  // $data['users']=['Gigie','gogo','jub'];

  // return view('test',compact('data','age'));
  return view('test',$data);
});

Route::get('/register',function (){
  return view('register');
});

Route::get('/abount', function () {
    return view('abount');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
