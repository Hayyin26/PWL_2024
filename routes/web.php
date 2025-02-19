<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WellcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/hello', [WellcomeController::class,'hello']);


Route::get('/world', function () { 
    return 'World'; 
    });

Route::get('/welcome', [PageController::class, 'welcome']);

Route::get('/about', [PageController::class, 'about']);

        Route::get('/user/{name}', function ($name) { 
        return 'Nama saya '.$name; 
        });

        Route::get('/posts/{post}/comments/{comment}', function 
        ($postId, $commentId) { 
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
        }); 

        Route::get('/articles/{id}', [PageController::class, 'articles']);

        Route::get('/user/{name?}', function ($name='John') {
            return 'Nama saya '.$name; 
            });

            Route::resource('photos', PhotoController::class);
            Route::resource('photos', PhotoController::class)->only([ 
                'index', 'show' 
                ]); 
            Route::resource('photos', PhotoController::class)->except([ 
                'create', 'store', 'update', 'destroy' 
                ]); 
            
                Route::get('/greeting', [WellcomeController::class, 'greeting']); 


