<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\getDataController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\HttpRequestController;
use App\Http\Controllers\SessionController;

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


Route::get('http.com',[HttpController::class,'getHttpRequest']);


// Route::method_name('httprequest.com',[HttpRequestController::class,'HttpRequest']);
// Route::get('httprequest.com',[HttpRequestController::class,'HttpRequest']);
// Route::post('httprequest.com',[HttpRequestController::class,'HttpRequest']);
Route::get('httprequest.com',[HttpRequestController::class,'HttpRequest']);

route::view('formrequest.com','httprequest');
/* Route::get('users', function () {
    return User::all();
}); */

Route::post('session.com',[SessionController::class,'GetSessionData']);

// Route::view('selog.com','sessionlogin');
// Route::view('sepro.com','sessionprofile');

//not letting a user bypass the profile link without submiting the form or going direct to the profile page
Route::get('sepro.com', function(){
    if(!session()->has('myHolder')){
        return redirect('selog.com');
    }
    return view('sessionprofile');
});


//protecting the login route
Route::get('selog.com', function(){
    if(session()->has('myHolder')){
        return redirect('sepro.com');
    }
    return view('sessionlogin');
});


//conditioning the logout 

Route::get('/logout',function(){
    if(session()->has('myHolder'))
    {
        session()->pull('myHolder');
    }
    return redirect('selog.com');
});