<?php

use Illuminate\Support\Facades\Route;

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

//Type of route 
//1 normal route

Route::get("test",function(){
    return "<h1>Hello Iam test 1 </h1>";
});

//2- parameterd route
 Route::get("test1/{id}",function($id){
     return "hello".$id ;
 });

 //2- optinal route
 Route::get("test2/{id?}",function(){
    return "hello this is optinal route" ;
 });

 //3- Group of Routes

