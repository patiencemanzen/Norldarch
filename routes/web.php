<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogCommentController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\HomeController;
use App\Models\BlogCategory;
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

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::post('/blogs', [BlogController::class, 'store'])->name('post.blogs');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('single.blog');

    Route::post('/comments', [BlogCommentController::class, 'store'])->name('post.comments');

    Route::resource('blog-category', BlogCategoryController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('login.view');
    Route::post('admin/login', [AdminAuthController::class, 'login'])->name('adminLogin');
    Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

    Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });

    require __DIR__.'/auth.php';
