<?php

use App\Http\Controllers\AccessController;
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
use App\Http\Controllers\PermissionController;


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

Route::get('/access',  [AccessController::class,'create']);


Route::get('/log_access/{id}', [SearchController::class,'logAccess']);


Route::group(['prefix'=>'cms'],function(){

  Route::get('/home',[AdminController::class,'index']);
  Route::resource('/items',ItemsController::class);
  Route::post('/items/update',[ItemsController::class,'update']);
  Route::get('/types',[AdminController::class,'index']);
  Route::resource('/organizations',OrganizationsController::class);
  Route::resource('/types',ItemTypesController::class);
  Route::resource('/thematicareas',ThematicAreasController::class);
  Route::get('/thematicareas/delete/{id}',[ThematicAreasController::class,'destroy']);

});

//permissions and access control
Route::group(['prefix' => 'permissions','middleware'=>'auth'], function() {

	Route::get('/roles',  [PermissionController::class,'index'])->name('permissions.roles');
	Route::post('/role',  [PermissionController::class,'createRole'])->name('permissions.role');
	Route::get('/permissions',  [PermissionController::class,'permissions'])->name('permissions.permissions');
	Route::post('/permission',  [PermissionController::class,'createPermission'])->name('permissions.permission');
	Route::post('/torole',  [PermissionController::class,'permissionsToRole'])->name('permissions.torole');
	Route::get('/users',  [PermissionController::class,'users'])->name('permissions.users');
	Route::post('/user',  [PermissionController::class,'users'])->name('permissions.filerusers');
	Route::post('/saveuser',  [PermissionController::class,'saveUser'])->name('permissions.saveuser');
	Route::post('/userrole',  [PermissionController::class,'roleToUser'])->name('permissions.userrole');
	
	Route::get('/changepass',  [PermissionController::class,'changePassword'])->name('permissions.changepass');
	Route::post('/changepass',  [PermissionController::class,'changePassword'])->name('permissions.changepass');
	Route::post('/reset',  [PermissionController::class,'resetUser'])->name('permissions.reset');


	Route::post('/delete',  [PermissionController::class,'deleteUser'])->name('permissions.delete');
    Route::any('/trail',  [PermissionController::class,'trail'])->name('permissions.trail');

});