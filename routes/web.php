<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

//class Models
use App\Models\Blog;


//utama
Route::get('/', function () {
    return view('beranda', ['title' => 'Home Page']);
});

Route::get('/modul', function () {
    return view('modul' , ['title' => 'Modul BISINDO']);
});
Route::get('/jbi', function () {
    return view('jbi' , ['title' => 'Pemesanan JBI ']);
});

//blogs
Route::get('/blogs', function () {
    return view('./blogs/blogs', ['title' => 'Blog berita', 'blogs' => Blog::all()],);
});

Route::get('/blogs/{blog:slug}', function(Blog $blog){

    return view('./blogs/blog',['title' => '', 'blog' => $blog]);
});


