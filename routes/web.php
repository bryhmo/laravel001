<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\getDataController;

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



// Route::get('users',[UsersController::class,'getData']);
Route::post('logging.com',[UsersController::class,'getData']);




Route::post('usersinfo',[UsersController::class,'getUserInfo']);
Route::view('info.com','info');


Route::view('noaccess.com','noaccess');
Route::view('accessdenied.com','accessdenied');


//group middleware
Route::group(['middleware'=>['protectedpage']],function(){

    Route::view('home.com','home');

    Route::view("login","users")->middleware('dobcheck');

    Route::get('/', function () {
        return view('welcome');
    });
});


Route::view('doa.com','doa');


Route::get('fetch.com',[getDataController::class,'getUserData']);
Route::get('fetchdata.com',[EmployeesController::class,'fetchUsersData']);


/* Route::get('users', function () {
    return User::all();
}); */