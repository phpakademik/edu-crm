<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;



use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CursesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\MillatController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupsController;

use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\StudentsController as Mystudents;
use App\Http\Controllers\Teacher\GroupsController as MyGroups;
use App\Http\Controllers\DavomatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ChiqimController;


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
    if (!Auth::user())
    {
        return redirect('/login');
    }
    else
    {
        return redirect('/dashboard');
    }
});




Auth::routes();

//Route::get('/register',function (){
//    return redirect('/');
//});
//Route::post('/register',function (){
//    return redirect('/');
//});

Route::group(['prefix' => 'dashboard'], function (){
   Route::get('/',[DashboardController::class,'index']);
   Route::resource('/curses',CursesController::class);
   Route::post('/curses/create',[CursesController::class,'store']);
   Route::get('/curses/edit/{id}',[CursesController::class,'edit']);
   Route::post('/curses/update/{id}',[CursesController::class,'update']);
   Route::get('/curses/delete/{id}',[CursesController::class,'destroy']);
   Route::get('/curses/activate/{id}',[CursesController::class, 'activate']);
   Route::get('/curses/inactivate/{id}',[CursesController::class, 'inactivate']);


   Route::resource('/students',StudentsController::class);
   Route::get('/students/create',[StudentsController::class,'create']);
   Route::post('/students/create',[StudentsController::class, 'store']);
   Route::get('/students/delete/{id}',[StudentsController::class,'destroy']);



   Route::resource('/millat',MillatController::class);



    Route::resource('/staffs',StaffController::class);
    Route::post('/staffs/create',[StaffController::class,'store']);



    Route::resource('/profile',ProfileController::class);
    Route::post('/profile/create',[ProfileController::class,'store']);

    Route::resource('/groups',GroupsController::class);
//    Route::post('/groups')
    Route::group(['prefix'=>'my'],function(){
        Route::resource('/students',Mystudents::class);
        Route::resource('/groups', MyGroups::class);
    });

    Route::resource('/davomat',DavomatController::class);
    Route::group(['prefix'=>'/davomat'],function (){

    });

    Route::resource('/payment',PaymentController::class);
    Route::group(['prefix'=>'payment'],function (){

    });
    Route::resource('/chiqim',ChiqimController::class);
    Route::group(['prefix'=>'/chiqim'],function (){

    });
});
