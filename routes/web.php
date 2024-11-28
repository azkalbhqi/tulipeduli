<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\JbiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;

Route::get('/', function () {
    return view('beranda');
});

//admin routes
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    // Admin dashboard route
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/moduls', [ModulController::class, 'adminIndex'])->name('admin.moduls.index');
    Route::get('/moduls/{id}', [ModulController::class, 'adminShow'])->name('admin.moduls.show');
    Route::get('moduls-create', [ModulController::class, 'create'])->name('create');
    
    Route::get('/blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs.index');
    Route::get('/blogs/{slug}', [BlogController::class, 'adminShow'])->name('admin.blogs.show');
    Route::get('/blogs/{slug}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::get('blogs-create', [BlogController::class, 'create'])->name('create');

    Route::get('/jbis', [JbiController::class, 'adminIndex'])->name('admin.jbis.index');
    Route::get('/jbis/{id}', [JbiController::class, 'adminShow'])->name('admin.jbis.show');
    Route::get('jbis-create', [JbiController::class, 'create'])->name('create');

    
    
});

Route::prefix('admin')->group(function () {
    // Admin routes here, including: 
    Route::post('moduls-create', [ModulController::class, 'store'])->name('admin.moduls.store');
    Route::post('blogs-create', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::post('jbi-create', [JbiController::class, 'store'])->name('admin.jbis.store');

    

    //delete
    Route::delete('/admin/moduls/{modul}', [ModulController::class, 'destroy'])->name('admin.moduls.destroy');
    Route::get('/moduls/{modul}', [ModulController::class, 'adminShow'])->name('admin.moduls.show');
    Route::get('/moduls', [ModulController::class, 'adminIndex'])->name('admin.moduls.index');


    Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::get('/blogs', [BlogController::class, 'adminIndex'])->name('admin.blogs.index');
    Route::get('/blogs/{slug}', [BlogController::class, 'adminShow'])->name('admin.blogs.show');
    Route::get('/blogs/{slug}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');

    Route::delete('/admin/jbis/{modul}', [JbiController::class, 'destroy'])->name('admin.jbis.destroy');
    Route::get('/jbis', [JbiController::class, 'adminIndex'])->name('admin.jbis.index');
    Route::get('/jbis/{jbi}', [JbiController::class, 'adminShow'])->name('admin.jbis.show');
    Route::get('/jbis/{id}/edit', [JbiController::class, 'edit'])->name('admin.jbis.edit');
    Route::put('/jbis/{jbi}', [JbiController::class, 'update'])->name('admin.jbis.update');


    
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Module Routes

Route::get('/moduls', [ModulController::class, 'index'])->name('moduls.index');
Route::get('/moduls/{id}', [ModulController::class, 'show'])->name('moduls.show');

// Jbi Route
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
        'title' => $blog->title,
        'blog' => $blog
    ]);
});

// Jbis Routes
Route::get('/jbis', [JbiController::class, 'index'])->name('jbis.index');

// Include Auth Routes
require __DIR__.'/auth.php';

