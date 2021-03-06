
<?php

use App\Http\Controllers\ClusterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\install;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CManagerController;
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
    $email = session()->get('EMAIL');
    $pwd = session()->get('PWD');
    $user = new User();
    $user->first_name = 'Admin';
    $user->email = $email;
    $user->password = Hash::make($pwd);
    $user->role = 'admin';
    $user->post_role = 'admin';
    $user->status = '1';
    $user->save();
    return redirect('/login?signin');
});

Route::post('/profileSetting/{id}', [SettingController::class, 'profileSetting']);

Route::post('install_saved', [install::class, 'install_script']);

Route::group(['middleware' => 'install'], function () {

    Route::get('/', [frontController::class, 'viewCluster']);
});

Route::get('/login/{cluster}/{id}', [frontController::class, 'login']);
Route::get('/register/{event}/{id}', [frontController::class, 'login_event']);
Route::get('/cluster_details/{id}', [frontController::class, 'cluster_details']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/', [ClusterController::class, 'index']);
        Route::get('/view/notifications', [ClusterController::class, 'view_all']);


        Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);
        Route::post('/invite/user', [ServiceController::class, 'invite_user']);
        Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
        Route::post('/add/events/', [ClusterController::class, 'add_events']);
        Route::post('/add/event/', [ClusterController::class, 'add_event']);
        Route::post('/edit/event/{id}', [ClusterController::class, 'edit_event']);
        Route::post('/deleteEvent/{id}', [ClusterController::class, 'deleteEvent']);
        Route::post('/update/event/{id}', [ClusterController::class, 'update_event']);
        Route::get('/delete/event/{id}', [ClusterController::class, 'delete_event']);

        Route::post('createCluster', [ClusterController::class, 'createCluster']);
        Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);

        Route::get('aprroved/{id}', [ClusterController::class, 'aprroved']);

        Route::post('upd/cluster/{id}', [ClusterController::class, 'upd_cluster']);

        Route::post('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);
        Route::get('/view_cluster', [ClusterController::class, 'viewCluster']);

        Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);

        Route::get('/view/event', [ClusterController::class, 'view_event']);


        Route::get('/communication', [ClusterController::class, 'communication']);
        Route::post('/send/email', [ClusterController::class, 'send_email']);
        Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);

        Route::get('/events', [EventController::class, 'events']);
        Route::get('/users', [ClusterController::class, 'users']);
        Route::post('/addUser', [ClusterController::class, 'addUser']);
        Route::post('/updateUser/{id}', [ClusterController::class, 'updateUser']);
        Route::post('/deleteUser/{id}', [ClusterController::class, 'deleteUser']);
        Route::get('/members', [MemberController::class, 'members']);
        Route::post('/addMember', [MemberController::class, 'addMember']);
        Route::post('/updateMember/{id}', [MemberController::class, 'updateMember']);
        Route::post('/assignManager/{id}', [MemberController::class, 'assignManager']);
        Route::post('/deleteMembers/{id}', [MemberController::class, 'deleteMembers']);

         Route::view('/profile_setting', 'admin/profile_setting');
        Route::get('/setting', [SettingController::class, 'settings']);

        Route::post('upd/cluster_overview/{id}', [ClusterController::class, 'cluster_overview']);

        Route::get('aprroved/request/{id}', [MemberController::class, 'aprroved']);

        Route::get('reject/request/{id}', [MemberController::class, 'reject']);


        Route::get('/view/{id}', [ClusterController::class, 'view']);



        Route::any('/services', [ServiceController::class, 'view_service']);
        Route::post('/addService', [ServiceController::class, 'addService']);
        Route::post('/updateService/{id}', [ServiceController::class, 'updateService']);
        Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService']);

        Route::post('/addService', [ServiceController::class,'addService']);
        Route::post('/updateService/{id}', [ServiceController::class,'updateService']);
        Route::get('/deleteService/{id}', [ServiceController::class,'deleteService']);
        Route::get('/applyServiceView/{id}', [ServiceController::class,'applyServiceView']);
        Route::get('/cluster_manager', [CManagerController::class,'cluster_manager']);
        Route::post('/addClusterManager', [CManagerController::class,'addClusterManager']);
        Route::post('/updateClusterManager/{id}', [CManagerController::class,'updateClusterManager']);

        Route::post('/deleteClusterM/{id}', [CManagerController::class,'deleteClusterM']);

        Route::post('/websiteSetting', [SettingController::class, 'websiteSetting']);
        Route::post('/updateWebsiteSetting/{id}', [SettingController::class, 'updateWebsiteSetting']);
        Route::get('/survey/form', [MemberController::class, 'survey_form']);
        Route::post('/Survey/create', [MemberController::class, 'survey_create']);

        Route::post('/Survey/edit', [MemberController::class, 'survey_edit']);


        Route::get('/survey/list', [MemberController::class, 'survey_list']);
        Route::get('/view/survey/{id}', [MemberController::class, 'view_list']);

        Route::get('/survey/view/', [MemberController::class, 'survey_view']);
        Route::get('/survey/question', [MemberController::class, 'view_que']);

        Route::post('/invite/cluster/', [MemberController::class, 'invite_user']);



    });
});






Route:: prefix('/manager')->middleware(['auth'])->group(function () {
    Route::get('/', [ClusterController::class, 'index']);
    Route::get('/view/notifications', [ClusterController::class, 'view_all']);

    Route::get('/request/joinCluster/{id}', [MemberController::class, 'request_join']);

    Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);
    Route::post('/invite/user', [ServiceController::class, 'invite_user']);
    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
    Route::post('/add/events/', [ClusterController::class, 'add_events']);
    Route::post('/add/event/', [ClusterController::class, 'add_event']);
    Route::post('/update/event/{id}', [ClusterController::class, 'update_event']);
    Route::get('/delete/event/{id}', [ClusterController::class, 'delete_event']);

    Route::post('createCluster', [ClusterController::class, 'createCluster']);
    Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);

    Route::get('aprroved/{id}', [ClusterController::class, 'aprroved']);

    Route::post('upd/cluster/{id}', [ClusterController::class, 'upd_cluster']);

    Route::post('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);
    Route::get('/view_cluster', [MemberController::class, 'MangerCluster']);

    Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);

    Route::get('/view/event', [ClusterController::class, 'view_event']);


    Route::get('/communication', [ClusterController::class, 'communication']);
    Route::post('/send/email', [ClusterController::class, 'send_email']);
    Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);

    Route::get('/events', [EventController::class, 'events']);
    Route::get('/users', [ClusterController::class, 'users']);
    Route::post('/addUser', [ClusterController::class, 'addUser']);
    Route::post('/updateUser/{id}', [ClusterController::class, 'updateUser']);
    Route::post('/deleteUser/{id}', [ClusterController::class, 'deleteUser']);
    Route::get('/members', [MemberController::class, 'members']);
    Route::post('/addMember', [MemberController::class, 'addMember']);
    Route::post('/updateMember/{id}', [MemberController::class, 'updateMember']);
    Route::post('/assignManager/{id}', [MemberController::class, 'assignManager']);
    Route::post('/deleteMembers/{id}', [MemberController::class, 'deleteMembers']);

     Route::view('/profile_setting', 'admin/profile_setting');
    Route::get('/setting', [SettingController::class, 'settings']);

    Route::post('upd/cluster_overview/{id}', [ClusterController::class, 'cluster_overview']);

    Route::get('aprroved/request/{id}', [MemberController::class, 'aprroved']);

    Route::get('reject/request/{id}', [MemberController::class, 'reject']);


    Route::get('/view/{id}', [ClusterController::class, 'view']);



    Route::get('/services', [ServiceController::class, 'view_service']);
    Route::post('/addService', [ServiceController::class, 'addService']);
    Route::post('/updateService/{id}', [ServiceController::class, 'updateService']);
    Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService']);

    Route::get('/services', [ServiceController::class,'view_service']);
    Route::post('/addService', [ServiceController::class,'addService']);
    Route::post('/updateService/{id}', [ServiceController::class,'updateService']);
    Route::get('/deleteService/{id}', [ServiceController::class,'deleteService']);
    Route::get('/applyServiceView/{id}', [ServiceController::class,'applyServiceView']);
    Route::get('/cluster_manager', [CManagerController::class,'cluster_manager']);
    Route::post('/addClusterManager', [CManagerController::class,'addClusterManager']);
    Route::post('/updateClusterManager/{id}', [CManagerController::class,'updateClusterManager']);

    Route::post('/deleteClusterM/{id}', [CManagerController::class,'deleteClusterM']);

    Route::post('/websiteSetting', [SettingController::class, 'websiteSetting']);
    Route::post('/updateWebsiteSetting/{id}', [SettingController::class, 'updateWebsiteSetting']);
    Route::get('/survey/form', [MemberController::class, 'survey_form']);
    Route::post('/Survey/create', [MemberController::class, 'survey_create']);

    Route::post('/Survey/edit', [MemberController::class, 'survey_edit']);


    Route::get('/survey/list', [MemberController::class, 'survey_list']);
    Route::get('/view/survey/{id}', [MemberController::class, 'view_list']);

    Route::get('/survey/view/', [MemberController::class, 'survey_view']);
    Route::get('/survey/question', [MemberController::class, 'view_que']);

    Route::post('/invite/cluster/', [MemberController::class, 'invite_user']);

});


Route:: prefix('/member')->middleware(['auth'])->group(function () {
    Route::get('/', [MemberController::class, 'member_index']);
    Route::get('/view/notifications', [ClusterController::class, 'view_all']);


    Route::get('/view_cluster', [MemberController::class, 'viewCluster']);
    Route::get('/view/event/', [MemberController::class, 'view_event']);
    Route::get('/request/joinCluster/{id}', [MemberController::class, 'request_join']);
    Route::get('aprroved/request/{id}', [MemberController::class, 'aprroved']);



    Route::get('/services', [ServiceController::class, 'view_service']);
    Route::get('/setting', [SettingController::class, 'settings']);

    Route::get('/search/cluster', [MemberController::class, 'search_cluster']);
    Route::get('/search/event', [MemberController::class, 'search_event']);



    Route::get('/view/cluster/{id}', [ClusterController::class, 'view_cluster']);
    Route::post('/invite/user', [ServiceController::class, 'invite_user']);
    Route::get('/Join/cluster/{id}', [ClusterController::class, 'join_cluster']);
    Route::post('/add/events/', [ClusterController::class, 'add_events']);
    Route::post('/add/event/', [ClusterController::class, 'add_event']);
    Route::post('/update/event/{id}', [ClusterController::class, 'update_event']);
    Route::get('/delete/event/{id}', [ClusterController::class, 'delete_event']);

    Route::post('createCluster', [ClusterController::class, 'createCluster']);
    Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);


    Route::post('upd/cluster/{id}', [ClusterController::class, 'upd_cluster']);

    Route::post('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);

    Route::get('/view/join/{id}/{idd}', [ClusterController::class, 'view_join']);



    Route::get('/communication', [ClusterController::class, 'communication']);
    Route::post('/send/email', [ClusterController::class, 'send_email']);
    Route::get('/manager/status/{id}/{userID}', [ClusterController::class, 'manger']);

    Route::get('/events', [EventController::class, 'events']);
    Route::get('/users', [ClusterController::class, 'users']);
    Route::post('/addUser', [ClusterController::class, 'addUser']);
    Route::post('/updateUser/{id}', [ClusterController::class, 'updateUser']);
    Route::post('/deleteUser/{id}', [ClusterController::class, 'deleteUser']);
    Route::get('/members', [MemberController::class, 'members']);
    Route::post('/addMember', [MemberController::class, 'addMember']);
    Route::post('/updateMember/{id}', [MemberController::class, 'updateMember']);
    Route::post('/assignManager/{id}', [MemberController::class, 'assignManager']);
    Route::post('/deleteMembers/{id}', [MemberController::class, 'deleteMembers']);

     Route::view('/profile_setting', 'admin/profile_setting');
    Route::get('/setting', [SettingController::class, 'settings']);

    Route::post('upd/cluster_overview/{id}', [ClusterController::class, 'cluster_overview']);


    Route::get('/view/{id}', [ClusterController::class, 'view']);

    Route::post('/addService', [ServiceController::class, 'addService']);
    Route::post('/updateService/{id}', [ServiceController::class, 'updateService']);
    Route::get('/deleteService/{id}', [ServiceController::class, 'deleteService']);

    Route::get('/services', [ServiceController::class,'view_service']);
    Route::post('/addService', [ServiceController::class,'addService']);
    Route::post('/updateService/{id}', [ServiceController::class,'updateService']);
    Route::get('/deleteService/{id}', [ServiceController::class,'deleteService']);
    Route::get('/applyServiceView/{id}', [ServiceController::class,'applyServiceView']);
    Route::get('/cluster_manager', [CManagerController::class,'cluster_manager']);
    Route::post('/addClusterManager', [CManagerController::class,'addClusterManager']);

    Route::post('/websiteSetting', [SettingController::class, 'websiteSetting']);
    Route::post('/updateWebsiteSetting/{id}', [SettingController::class, 'updateWebsiteSetting']);



    Route::get('/survey/form', [MemberController::class, 'survey_form']);

    Route::post('/Survey/create', [MemberController::class, 'survey_create']);
    Route::get('/view/list/{id}', [MemberController::class, 'view_list']);

    Route::get('/survey/question', [MemberController::class, 'view_que']);


    Route::get('/view/survey/{id}', [MemberController::class, 'view_list']);



});

Route::middleware(['auth'])->group(function () {


    Route::prefix('/user')->group(function () {


        Route::get('/', [ClusterController::class, 'user_index']);

        Route::get('/view/notifications', [ClusterController::class, 'view_all']);
        Route::get('/request/joinCluster/{id}', [MemberController::class, 'request_join']);

        Route::get('aprroved/{id}', [ClusterController::class, 'aprroved']);



        Route::post('createCluster', [ClusterController::class, 'createCluster']);
        Route::post('updateCluster/{id}', [ClusterController::class, 'updateCluster']);

        Route::post('upd/cluster/{id}', [ClusterController::class, 'upd_cluster']);

        Route::post('upd/cluster_overview/{id}', [ClusterController::class, 'cluster_overview']);

        Route::post('/invite/user', [ServiceController::class, 'invite_user']);

        Route::get('/request/joinCluster/{id}', [MemberController::class, 'request_join']);

        Route::post('deleteCluster/{id}', [ClusterController::class, 'deleteCluster']);


        // Route::get('/admin/view_cluster', [ClusterController::class, 'viewCluster']);

        Route::get('/view_cluster', [MemberController::class, 'viewCluster']);


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

        Route::view('/members', 'admin/view_members');
        // Route::view('/services','admin/view_services');
        Route::get('/services/', [ServiceController::class, 'view_service']);
            Route::view('/profile_setting', 'admin/profile_setting');
        ///////////////////////////////setting start
        Route::get('/setting', [SettingController::class, 'settings']);


        ///////////////////////////////setting end
        Route::view('/cluster_manager', 'admin/cluster_manager');


        ////////////////////////services start
        Route::any('/services', [ServiceController::class, 'view_service']);
        Route::any('/applyService', [ServiceController::class, 'applyService']);

        ////////////////////////services end
        Route::any('/AddCompany', [ServiceController::class, 'AddCompany']);
        Route::post('/UpdateCompany/{id}', [ServiceController::class, 'UpdateCompany']);
        Route::post('/Survey/create', [MemberController::class, 'survey_create']);
        Route::get('/survey/question', [MemberController::class, 'view_que']);
        Route::get('/view/survey/{id}', [MemberController::class, 'view_list']);

    });
});





Route::any('/getclusterID', [ClusterController::class, 'getclusterID']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/subscribeEmail', [frontController::class, 'subscribe']);
Route::get('/searchCluster', [frontController::class, 'searchCluster']);
Route::get('/searchClusterMain', [frontController::class, 'searchClusterMain']);

Route::post('/form/submision', [MemberController::class, 'form_submision']);
Route::post('/skipForm', [MemberController::class, 'skipForm']);


