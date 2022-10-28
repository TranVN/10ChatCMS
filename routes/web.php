<?php

use App\Events\MessagePushed;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::prefix('chat')->group(function () {
        Route::get('/',"ChatsController@index");
        Route::post('/store-mes',function(Request $req){
            broadcast(new MessagePushed(auth()->user(),$req->message));
            return $req->message;
        });
    });
});
