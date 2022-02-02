
<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\install;
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



Route::get('install', function () {
    return view('welcome');
});

Route::get('migrate', function () {
    $run = Artisan::call('migrate:fresh');
    return redirect('/');
});


Route::post('install_saved', [install::class, 'install_script']);

Route::group(['middleware' => 'install'], function () {

    Route::get('/', [frontController::class, 'viewCluster']);
});

// Route::view('/','front/index');
Route::middleware(['auth'])->group(function () {
    //Route::view('/','front/index');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
    // Route::view('/admin', 'admin/index');
    Route::get('/', [ClusterController::class, 'index']);

    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
    Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);



    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);


    Route::post('/add/event/', [ClusterController::class, 'add_event']);

    //////////////////////cluster start
    //Route::view('/admin/view_cluster','admin/view_cluster');
    Route::post('createCluster', [ClusterController::class, 'createCluster']);
    Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);
    Route::get('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);
    Route::get('/view_cluster', [ClusterController::class, 'viewCluster']);
    Route::get('/view/{id}', [ClusterController::class, 'view']);
    Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);
    Route::get('/view/event/', [ClusterController::class, 'view_event']);
    Route::get('/communication', [ClusterController::class, 'communication']);
    Route::post('/send/email', [ClusterController::class, 'send_email']);
    Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);

});

});



Route::middleware(['auth'])->group(function () {

    // Route::view('/user','admin/index');
    Route::prefix('/user')->group(function () {

        Route::get('/', [ClusterController::class, 'user_index']);
        Route::post('createCluster', [ClusterController::class, 'createCluster']);
        Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);
        Route::get('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);
        Route::get('/admin/view_cluster', [ClusterController::class, 'viewCluster']);
        Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);
        Route::post('/add/event/', [ClusterController::class, 'add_event']);
        Route::get('/view/event/', [ClusterController::class, 'view_event']);
        Route::get('/communication', [ClusterController::class, 'communication']);
        Route::post('/send/email', [ClusterController::class, 'send_email']);



        Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
        Route::get('/view/{id}', [ClusterController::class, 'view']);
        Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);
        Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);


    });
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
