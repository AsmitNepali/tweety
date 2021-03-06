<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesController;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function(){

    Route::get('/tweets',[TweetsController::class,'index'])->name('home');
    Route::post('/tweets',[TweetsController::class,'store']);
    Route::get('/profiles/{user:username}/edit',[ProfilesController::class,'edit'])->middleware('can:edit,user');
    Route::post('/profiles/{user:username}/follows',[FollowsController::class,'store']);
    Route::patch('/profiles/{user:username}',[ProfilesController::class,'update'])->middleware('can:edit,user');
    Route::get('/explore',ExploreController::class)->name('explore');

});
Route::get('/profiles/{user:username}',[ProfilesController::class, 'show'])->name('profile');



