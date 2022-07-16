<?php

    use App\Http\Controllers\BlogCommentController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\HomeController;
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
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('single.blog');

    Route::post('/comments', [BlogCommentController::class, 'store'])->name('post.comments');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';
