<?php

use App\Http\Controllers\PostsController;
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
    //return view('welcome');

    //新增資料
    /*\App\Models\Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);*/

//    $post=new\App\Models\Post();
//    $post->title='test title';
//    $post->content='test content';
//    $post->save();

//查詢資料
    /*$posts=\App\Models\Post::all();
    dd($posts);*/

    /*$post=\App\Models\Post::find(1);
    dd($post);*/

    /*$posts=\App\Models\Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);*/

//更新資料
    /*$post=\App\Models\Post::find(1);
    $post->update([
        'title'=>'updated title',
        'content'=>'updated content',
    ]);*/

    /*$post=\App\Models\Post::find(1);
    $post->title='save dtitle';
    $post->content='save dcontent';
    $post->save();*/

//刪除資料
    /*$post=\App\Models\Post::find(1);
    $post->delete();*/

    /*\App\Models\Post::destroy(2);*/

    /*\App\Models\Post::destroy(3,5,7);*/

//了解 Model 和 Collection 的差異
//    $allPosts=\App\Models\Post::all();
//    dd($allPosts);
    /*$featuredPosts=\App\Models\Post::where('is_feature',1)->get();
    dd($featuredPosts);*/

    /*$fourthPost=\App\Models\Post::find(4);
    dd($fourthPost);*/
    /*$lastPost=\App\Models\Post::orderBy('id','DESC')->first();
    dd($lastPost);*/

    $post=\App\Models\Post::find(4);
    foreach($post->comments as $comment){
        echo $comment->content.'<br>';
    }

});

Route::get('posts',[PostsController::class, 'index'])->name('posts.index');

Route::get('post',[PostsController::class, 'show'])->name('posts.show');

Route::get('about',[PostsController::class, 'about'])->name('posts.about');

Route::get('contact',[PostsController::class, 'contact'])->name('posts.contact');



