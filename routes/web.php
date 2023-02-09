<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
//
Route::get('/', function () {
    return view('user.master');
});
Route::get('index',function(){
    return view('user.index');
})->name('user.index');


Route::middleware('IsLogin')->group(function(){
    Route::get('/courses',function(){
        return view('user.courses');
    })->name('user.courses');
    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
});

Route::middleware('IsAdminLogin')->group(function(){

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function(){ //...

        Route::prefix('admin')->group(function (){
            Route::get('/',[HomeController::class,'index']);
            Route::get('archive',[StudentController::class,'archive'])->name('student.archive');
            Route::get('restore/{id}',[StudentController::class,'restore'])->name('student.restore');
            Route::get('delete/{id}',[StudentController::class,'forceDelete'])->name('student.delete');
            Route::resource('student',StudentController::class);
        });
        Route::resource('teacher',StudentController::class);

    });
});



Route::get('/register',[AuthController::class,'register'])->name('auth.register');
Route::post('/register',[AuthController::class,'handleRegister'])->name('auth.handleRegister');
Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::post('/login',[AuthController::class,'handleLogin'])->name('auth.handleLogin');

