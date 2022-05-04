<?php

use App\Models\post;
use Illuminate\Support\Facades\DB;
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
 Route::get('/',function(){
      //N+1 problem
    DB::listen(function($query){
      logger($query->sql);
    });

    return view ('Posts',[
      'posts'=> Post::with('category')->get()
    ]);
 });

// Route::get('/post/{id}',function($id){
//    return view('post',[
//       'post'=>Post::find($id)
//    ]);
// });

Route::get('/post/{post:slug}',function(Post $post){ 
      //Post::where('slug' , $post)->firstOrfail()
      return view('post',[
         'post'=>$post
      ]);
   });
   


 
