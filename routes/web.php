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
    return view('welcome');
});

Route::get('posts',[PostsController::class, 'index'])->name('posts.index');

Route::get('post',[PostsController::class, 'show'])->name('posts.show');

Route::get('about',[PostsController::class, 'about'])->name('posts.about');

Route::get('contact',[PostsController::class, 'contact'])->name('posts.contact');

/*\App\Models\Post::create([
    'title'=>'test title',
    'content'=>'test content',
]);*/

/*$post=new\App\Models\Post();
$post->title='test title';
$post->content='test content';
$post->save();*/

/*$posts=\App\Models\Post::all();
dd($posts);*/

/*$post=\App\Models\Post::find(1);
dd($post);*/

/*$posts=\App\Models\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);*/

/*$post=\App\Models\Post::find(1);
$post->update([
    'title'=>'updated title',
    'content'=>'updated content',
]);*/

/*$post=\App\Models\Post::find(1);
$post->title='save dtitle';
$post->content='save dcontent';
$post->save();*/

/*$post=\App\Models\Post::find(1);
$post->delete();*/

/*\App\Models\Post::destroy(2);*/

\App\Models\Post::destroy(3,5,7);
