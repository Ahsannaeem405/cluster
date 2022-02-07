
<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\install;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
   $email= session()->get('EMAIL');
    $pwd=session()->get('PWD');
    $user=new User();
    $user->first_name='Admin';
    $user->email=$email;
    $user->password=Hash::make($pwd);
    $user->role='admin';
    $user->status='1';
    $user->post_role='admin';
    $user->save();
    return redirect('/');
});


Route::post('install_saved', [install::class, 'install_script']);

Route::group(['middleware' => 'install'], function () {

    Route::get('/', [frontController::class, 'viewCluster']);
});


Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
    // Route::view('/admin', 'admin/index');
    Route::get('/', [ClusterController::class, 'index']);

    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
    Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);



    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);

    Route::post('/add/events/', [ClusterController::class, 'add_events']);

    Route::post('/add/event/', [ClusterController::class, 'add_event']);
    Route::post('/update/event/{id}', [ClusterController::class, 'update_event']);
    Route::get('/delete/event/{id}', [ClusterController::class, 'delete_event']);

    //////////////////////cluster start
    //Route::view('/admin/view_cluster','admin/view_cluster');
    Route::post('createCluster', [ClusterController::class, 'createCluster']);
    Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);
    Route::get('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);
    Route::get('/view_cluster', [ClusterController::class, 'viewCluster']);
    // Route::get('/view/{id}', [ClusterController::class, 'view']);

    Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);

    // @dd(123);
    Route::get('/view/event', [ClusterController::class, 'view_event']);


    Route::get('/communication', [ClusterController::class, 'communication']);
    Route::post('/send/email', [ClusterController::class, 'send_email']);
    Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);

    Route::get('/events', [EventController::class, 'events']);
/////////////////////////////
Route::get('/users', [ClusterController::class, 'users']);
Route::post('/addUser', [ClusterController::class, 'addUser']);
Route::post('/updateUser/{id}', [ClusterController::class, 'updateUser']);
Route::post('/deleteUser/{id}', [ClusterController::class, 'deleteUser']);
//////////////////members
Route::view('/members','admin/view_members');
Route::view('/services','admin/view_services');
Route::view('/setting','admin/view_setting');
Route::view('/profile_setting','admin/profile_setting');
Route::view('/cluster_manager','admin/cluster_manager');


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
        Route::post('/add/events/', [ClusterController::class, 'add_events']);




        Route::get('/view/event/', [ClusterController::class, 'view_event']);
        Route::get('/communication', [ClusterController::class, 'communication']);
        Route::post('/send/email', [ClusterController::class, 'send_email']);



        Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
        Route::get('/view/{id}', [ClusterController::class, 'view']);
        Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);
        Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);

        Route::view('/members','admin/view_members');
        Route::view('/services','admin/view_services');
        Route::view('/setting','admin/view_setting');
        Route::view('/profile_setting','admin/profile_setting');
        Route::view('/cluster_manager','admin/cluster_manager');


    });
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
