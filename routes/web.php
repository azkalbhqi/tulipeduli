<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\JbiController;
use App\Http\Controllers\AdminController;
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

    
    
    // Store the Modul
    Route::post('moduls', [ModulController::class, 'store'])->name('moduls.store');
    
});

Route::prefix('admin')->group(function () {
    // Admin routes here, including:
    //delete
    Route::delete('/admin/moduls/{modul}', [ModulController::class, 'destroy'])->name('admin.moduls.destroy');
    Route::get('/moduls/{modul}', [ModulController::class, 'adminShow'])->name('admin.moduls.show');
    Route::get('/moduls', [ModulController::class, 'adminIndex'])->name('admin.moduls.index');
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

