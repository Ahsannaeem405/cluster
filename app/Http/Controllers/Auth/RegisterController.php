<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Cluster;
use App\Models\Event;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\EventJoin;
use App\Models\JoinCluster;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){

        if (auth()->user()->post_role == 'admin') {
            return '/admin';
        }


        elseif (Auth::user()->post_role == 'member') {

            return '/member';

        } else {

            return '/user';
        }

      }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'datetimepicker' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //dd($data);
        // if(isset($data['cluster']) != null || isset($data['event']) != null)
        // {
          $user=User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => $data['datetimepicker'],
            'gender' => $data['gender'],
            'role' => 'user',
            'status' => 1,
            'register_role' =>$data['post_role'],
          'post_role' =>$data['post_role'],
        ]);
        // $user_id=$user->id;


        $get_user=User::where('status','1')->orderBy('id','DESC')->first();
        $user_id=$get_user->id;
        if($data['post_role'] == 'member')
        {
            $clusters=$data['cluster'];

            foreach( $clusters as $row_cluster)
            {


                $cluster=new JoinCluster();
                $cluster->cluster_id=$row_cluster;
                $cluster->user_id=$user_id;
                $cluster->status='0';
                $cluster->save();
            }

        }

        if($data['post_role'] == 'user')
        {
            $events=$data['event'];

            foreach( $events as $row_event)
            {
                $get_cluster=Event::where('id',$row_event)->first();
                $event=new EventJoin();
                $event->event_id=$row_event;
                $event->user_id= $user_id;
                $event->cluster_id= $get_cluster->cluster_id;
                $event->status=0;
                $event->save();
            }

        }
    // }else{
    //     return redirect()->back()->with('error', 'Cluster and Event select!');

    // }
        return $user;

    }

}
