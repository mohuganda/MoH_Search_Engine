<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\ItemTypesController;
use App\Http\Controllers\ThematicAreasController;

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

Route::any('/search', [SearchController::class,'search']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/suggestions',[SearchController::class,'getSuggestions']);

Route::get('/admin', function(){
	return redirect( url('/cms/home'));
});

Route::group(['prefix'=>'cms'],function(){

  Route::get('/home',[AdminController::class,'index']);
  Route::resource('/items',ItemsController::class);
  Route::get('/types',[AdminController::class,'index']);
  Route::resource('/organizations',OrganizationsController::class);
  Route::resource('/types',ItemTypesController::class);
  Route::resource('/thematicareas',ThematicAreasController::class);

});