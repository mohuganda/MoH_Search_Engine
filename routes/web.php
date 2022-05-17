<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectsController;
use phpDocumentor\Reflection\Types\Resource_;
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
//default route
Route::get('/', [HomeController::class,'index']);

// Route::post('/', function () {
//     return view('welcome');
// });

//Route::resource('/subjects', HomeController::class);

Route::group(['prefix'=>'subjects'],function(){

    Route::resource('/',SubjectsController::class);
    Route::get('/random',[SubjectsController::class,'random']);
    }
);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('topsearches',[HomeController::class,'topsearches'])->name('searches');
