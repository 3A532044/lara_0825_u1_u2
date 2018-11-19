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
    //return view('welcome');
    $fourthPost = \App\Post::find(4);
    $post=new\App\comments();
    $post->title='turtle';
    $post->content='test';
    $post->save();
});
