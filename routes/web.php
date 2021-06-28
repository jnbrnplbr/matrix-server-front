<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    return view('auth.index');
});


Route::get('/verify/email',[AuthController::class,'checkEmail']);
Route::post('/verify/email',[AuthController::class,'verifyEmail']);


Route::get('/signup',function(){
    $email = session::get('email');
    $success = session::get('success');

    if(empty($email)) {
        return redirect('/verify/email')->with('error',"No valid Session.");
    }

    return view('auth.signup', compact('email','success'));
});

