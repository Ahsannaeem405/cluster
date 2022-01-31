<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\install;

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



Route::get('install', function () {
    return view('welcome');
});

Route::get('migrate', function () {
    $run=Artisan::call('migrate:fresh');
    return redirect('/');
});


Route::post('install_saved', [install::class,'install_script']);

Route::group(['middleware'=>'install'],function(){
    
    Route::get('/', [frontController::class,'viewCluster']);

});

// Route::view('/','front/index');
Route::middleware(['auth'])->group(function(){
//Route::view('/','front/index');
});

Route::middleware(['auth'])->group(function(){

Route::view('/admin','admin/index');
//////////////////////cluster start
//Route::view('/admin/view_cluster','admin/view_cluster');
Route::post('createCluster', [ClusterController::class,'createCluster']);
Route::post('updateCluster/{id}', [ClusterController::class,'updateCluster']);
Route::get('deleteCluster/{id}', [ClusterController::class,'deleteCluster']);
Route::get('/admin/view_cluster', [ClusterController::class,'viewCluster']);
//////////////////////cluster end


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
