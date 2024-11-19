<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Modul;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\JbiController;
// Public Routes
// Route::get('/', function () {
//     return view('dashboard', ['title' => 'Modul BISINDO']);
// });

Route::get('/login', function () {
    return view('login');
});

// Guest Route
Route::get('/', function () {
    return view('beranda');
})->middleware('guest');

// Authenticated Routes
Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Module and Custom Pages
// Route::get('/modul', function () {
//     return view('modul', ['title' => 'Modul BISINDO']);
// });

Route::get('/jbi', function () {
    return view('jbi', ['title' => 'Pemesanan JBI']);
});

// Blog Routes
Route::get('/blogs', function () {
    return view('blogs.blogs', [
        'title' => 'Blog Berita',
        'blogs' => Blog::all(),
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blogs.blog', [
        'title' => $blog->title, // Optional: Set the title dynamically
        'blog' => $blog
    ]);
});

//Modul Routes
Route::get('/moduls', [ModulController::class, 'index'])->name('moduls.index');
Route::get('/moduls/{id}', [ModulController::class, 'show'])->name('moduls.show');

//Jbis Routes
Route::get('/jbis', [JbiController::class, 'index'])->name('jbis.index');

// Include Auth Routes
require __DIR__.'/auth.php';
