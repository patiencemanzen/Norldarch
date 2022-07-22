<?php

    use App\Http\Controllers\Api\BlogDislikeController;
    use App\Http\Controllers\Api\BlogLikeController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });


    Route::group(['middleware' => ['auth:api']], function() {
        /**
         * ---------------------------------------------
         * Like and dislike blog api routes
         * ----------------------------------------------
         */
        Route::post('/dislike', [BlogDislikeController::class, 'store'])->name('dislike-blog');
        Route::post('/like', [BlogLikeController::class, 'store'])->name('like-blog');
    });
