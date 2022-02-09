<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\JoinCluster;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;

class ClusterController extends Controller
{


    public function user_index()
    {

        $viewCluster['viewCluster'] = Cluster::all();
        $viewCluster['manager'] = User::where('role', 'user')->get();

        return view('admin.view_cluster', $viewCluster);
    }

    public function communication()
    {

        return view('admin.communication');
    }

    public function send_email(Request $request)
    {

        // dd($request);

        if ($request->Managers) {
            // dd(1);
            $man = User::where('post_role', 'manager')->get();

            foreach ($man as $mans) {
                $details = [
                    'title' => $request->name,
                    'body' => $request->desc
                ];

                \Mail::to($mans->email)->send(new \App\Mail\MyTestMail($details));
            }
        }
        // dd($request);
        if ($request->Members) {

            $mem = User::where('post_role', 'member')->get();

            foreach ($mem as $mems) {
                $details = [
                    'title' => $request->name,
                    'body' => $request->desc
                ];

                \Mail::to($mems->email)->send(new \App\Mail\MyTestMail($details));
            }
        }

        if ($request->Users) {
            // dd($request);
            $user = User::where('post_role', 'user')->get();
            foreach ($user as $news) {
                $details = [
                    'title' => $request->name,
                    'body' => $request->desc
                ];

                \Mail::to($news->email)->send(new \App\Mail\MyTestMail($details));
            }
        }

        // {!! $request->desc !!}




        return redirect('/admin/communication')->with('message',  'Submitted Successfully');
    }

    public function view_event()
    {

        // dd(12);

        $event['clustor'] = Cluster::all();
        $event['event'] = Event::where('userid', Auth::user()->id)->get();
        $event['event_join'] = EventJoin::where('user_id', Auth::user()->id)->get();


        // @dd($event);
        return view('admin.view_event', $event);
    }

    public function view_join($id, $idd)
    {
        // dd($id);
        $event = new EventJoin();
        $event->event_id = $id;
        $event->cluster_id = $idd;
        $event->user_id = Auth::user()->id;
        $event->save();
        return back()->with('success', 'Join Sucessfully');
        // dd($clsID);
    }
    public function add_event(Request $request)
    {
        $cat = null;
        //   dd($request);

        $event = new Event();


        // @dd($request->file('image'));

        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $event->image = $imageName;
            $path = $image->move(public_path('images'), $imageName);
        }



        $event->name = $request->name;
        $event->Event_type = $request->Event_type;
        $event->join_cluster_ID = $request->mangerID;
        $event->location = $request->location;
        $event->datetimepicker = $request->datetimepicker;
        $event->time = $request->time;
        $event->time_type = $request->time_type;
        $event->timezone = $request->timezone;
        $event->description = $request->description;
        $event->type_Emj = $request->type_Emj;
        $event->manager_cluster = $request->manager_cluster;
        $event->userid = Auth::user()->id;
        $event->save();
        return redirect()->back()->with('success', 'Event Added Sucessfully!');

        // return view('admin.view_cluster', compact('viewCluster'));

    }

    public function add_events(Request $request)
    {

        // dd($request)
    }
    public function update_event(Request $request, $id)
    {

        //   dd($request);
        $event = Event::find($id);
        $event->name = $request->name;
        $event->Event_type = $request->Event_type;
        $event->join_cluster_ID = $request->mangerID;
        $event->location = $request->location;
        $event->datetimepicker = $request->datetimepicker;
        $event->time = $request->time;
        $event->time_type = $request->time_type;
        $event->timezone = $request->timezone;
        $event->description = $request->description;
        $event->type_Emj = $request->type_Emj;
        $event->manager_cluster = $request->manager_cluster;
        $event->save();
        return redirect()->back()->with('success', 'Event Updated Sucessfully!');
    }
    public function delete_event($id)
    {
        //   dd($request);
        $event = Event::find($id);
        $event->delete();
        return redirect()->back()->with('success', 'Event Deleted Sucessfully!');
    }

    public function index()
    {

        return view('admin.index');
    }






    public function manger($id, $userID)
    {

        // dd($userID);

        $users = User::find($userID);
        $users->post_role = 'manager';
        $users->save();

        $user = JoinCluster::find($id);
        $user->status = 2;
        $user->save();
        return back()->with('success', 'Submitted Successfully');
    }
    public function view($id)
    {

        // dd($id);

        $user = JoinCluster::where('cluster_id', $id)->get();
        // $event['event'] = Event::all();
        //  $event['event_join'] = EventJoin::where('event_id',$id)->get();
        // return view('admin.view_users', $event);
        return view('admin.view_users', compact('user'));
    }



    function view_cluster($id)
    {

        $clus_img = null;
        $clus_img2 = null;
        $clus_img1 = null;
         $count_clus = null;


        $date =   date("Y/m/d");
        $clust = Cluster::find($id);
        // dd($clust);
        if (isset($clust)) {


            $clus_img2 = explode(',', $clust->image);


            $clus_img1 = array_slice($clus_img2, 0, 1);

            $clus_img = array_slice($clus_img2, 1, 2);

            $count_clus = array_slice($clus_img2, 0, 3);

            if (count($clus_img2) >  3) {


                $count_clus =   count($clus_img2) - count($count_clus);
            } else {
                $count_clus = 1;
            }
        }

        // @dd(count($count_clus)  );
        $get = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->count();
        @dd( $get);
        if($get >0)
        {
            $event = Event::all();
        }
        else
        {
            $event = Event::where('Event_type', 'Public');
        }

        $eventtime = Event::WhereDate('datetimepicker', '>', $date)->get();


        $event_3 = Event::Where('join_cluster_ID', $id)->take(3)->get();


        $joinn = EventJoin::Where('user_id', Auth::user()->id)->where('cluster_id', $id)->get();

        // @dd($joinn);
        // if ($get == 0) {


        // $useID = Auth::user()->id;
        // $user =  User::find($useID);
        // if ($user->post_role != 'manager') {
        //     $user->post_role = 'member';
        // }
        // $user->save();


        // $join = new JoinCluster();
        // $join->cluster_id = $id;
        // $join->user_id = Auth::user()->id;
        // $join->save();
        // $manager = JoinCluster::Where('cluster_id', $id)->where('status', 2)->take(6)->get();
        // $mang = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->first();
        // $user = JoinCluster::Where('cluster_id', $id)->take(6)->get();

        // return view('admin.Events-manager', compact('user', 'manager', 'mang', 'event', 'id', 'joinn','clust','clus_img','clus_img1','event_3','clus_img2','eventtime','count_clus'));
        // } else {

        // $get = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->get();
        $manager = JoinCluster::Where('cluster_id', $id)->where('status', 2)->take(6)->get();
        $user = JoinCluster::Where('cluster_id', $id)->take(6)->get();
        $mang = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->first();

        return view('admin.Events-manager', compact('user', 'manager', 'mang', 'event', 'id', 'joinn', 'clust', 'clus_img', 'clus_img1', 'event_3', 'clus_img2', 'eventtime', 'count_clus'));

        //    return back()->with('success', 'Please Select Another Cluster');
        // }



    }
    function join_cluster($id)
    {

        $date =   date("Y/m/d");
        $clust = Cluster::find($id);

        $clus_img2 = explode(',', $clust->image);


        $clus_img1 = array_slice($clus_img2, 0, 1);

        $clus_img = array_slice($clus_img2, 1, 2);

        $count_clus = array_slice($clus_img2, 0, 3);
        // @dd(count($clus_img2), count($count_clus));

        if (count($clus_img2) >  3) {


            $count_clus =   count($clus_img2) - count($count_clus);
        } else {
            $count_clus = 1;
        }

        // @dd(count($count_clus)  );
        $get = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->count();
        $event = Event::all();
        $eventtime = Event::WhereDate('datetimepicker', '>', $date)->get();


        $event_3 = Event::Where('join_cluster_ID', $id)->take(3)->get();


        $joinn = EventJoin::Where('user_id', Auth::user()->id)->where('cluster_id', $id)->get();

        if ($get == 0) {


            $useID = Auth::user()->id;
            $user =  User::find($useID);
            if ($user->post_role != 'manager') {
                $user->post_role = 'member';
            }
            $user->save();


            $join = new JoinCluster();
            $join->cluster_id = $id;
            $join->user_id = Auth::user()->id;
            $join->save();
            $manager = JoinCluster::Where('cluster_id', $id)->where('status', 2)->take(6)->get();
            $mang = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->first();
            $user = JoinCluster::Where('cluster_id', $id)->take(6)->get();

            // $user = User::where('role', 'user')->take(6)->get();

            return view('admin.Events-manager', compact('user', 'manager', 'mang', 'event', 'id', 'joinn', 'clust', 'clus_img', 'clus_img1', 'event_3', 'clus_img2', 'eventtime', 'count_clus'));
        } else {

            // $get = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->get();
            $manager = JoinCluster::Where('cluster_id', $id)->where('status', 2)->take(6)->get();
            $user = JoinCluster::Where('cluster_id', $id)->take(6)->get();
            $mang = JoinCluster::Where('cluster_id', $id)->Where('user_id', Auth::user()->id)->first();

            return view('admin.Events-manager', compact('user', 'manager', 'mang', 'event', 'id', 'joinn', 'clust', 'clus_img', 'clus_img1', 'event_3', 'clus_img2', 'eventtime', 'count_clus'));

            //    return back()->with('success', 'Please Select Another Cluster');
        }

        // return back()->with('success', 'Join Successfully');
    }
    //
    public function createCluster(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',

        ]);


        $clustor = new Cluster();

        $cat = null;

        if (isset($request->image)) {
            foreach ($request->image as $image) {
                $imageName = $image->getClientOriginalName();
                $path = $image->move(public_path('images/'), $imageName);
                $cat .= $imageName . ",";
            }
        }

        $clustor->image = $cat;
        $clustor->name = $request->name;
        $clustor->cluster_type = $request->cluster_type;

        $clustor->detail = $request->detail;
        $clustor->manager_id = $request->manager_id;
        $clustor->save();
        return redirect()->back()->with('success', 'Cluster addedd Successfully!');
    }

    public function viewCluster()
    {
        $viewCluster['viewCluster'] = Cluster::all();
        $manager['manager'] = User::where('role', 'user')->get();
        // dd($manager);
        return view('admin.view_cluster', $viewCluster, $manager);
    }


    public function updateCluster(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',

        ]);
        $clustor = Cluster::find($id);
        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $clustor->image = $imageName;
            $path = $image->move(public_path('images/'), $imageName);
        }
        $clustor->name = $request->name;
        $clustor->detail = $request->detail;
        $clustor->manager_id = $request->manager_id;
        $clustor->save();
        return redirect()->back()->with('success', 'Cluster Updated Successfully!');
    }




    public function cluster_overview(Request $request, $id)
    {

        // dd($request);
        $cat = null;
        $clustor = Cluster::find($id);

        if (isset($request->image)) {
            foreach ($request->image as $image) {
                $imageName = $image->getClientOriginalName();
                $path = $image->move(public_path('images/'), $imageName);
                $cat .= $imageName . ",";
            }
        }


        $clustor->cluster_overview = $request->cluster_overview;

        $concat =  $clustor->image . $cat;
        $clustor->image = $concat;
        $clustor->save();


        return redirect()->back()->with('success', 'Cluster Updated Successfully!');
    }

    public function upd_cluster(Request $request, $id)
    {



        $cat = null;
        $clustor = Cluster::find($id);

        if (isset($request->image)) {
            foreach ($request->image as $image) {
                $imageName = $image->getClientOriginalName();
                $path = $image->move(public_path('images/'), $imageName);
                $cat .= $imageName . ",";
            }
        }


        $clustor->detail = $request->detail;

        $concat =  $clustor->image . $cat;
        $clustor->image = $concat;
        $clustor->save();


        return redirect()->back()->with('success', 'Cluster Updated Successfully!');
    }

    public function deleteCluster($id)
    {
        $clustor = Cluster::find($id);
        if (\File::exists(public_path('images/' . $clustor->image . ''))) {
            //dd('File does not exists.');
            \File::delete(public_path('images/' . $clustor->image . ''));
        }
        $clustor->delete();
        return redirect()->back()->with('error', 'Cluster Deleted Successfully!');
    }


    public function users()
    {
        $user['user_list'] = User::where('role', 'user')->get();

        return view('admin.users', $user);
    }
    public function addUser(Request $request)
    {
        //dd($request->input());
        $user = new User();
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->status = 1;
        $user->save();
        return redirect()->back()->with('success', 'User Added Successfully!');
    }
    public function updateUser(Request $request, $id)
    {
        // dd($id);

        $user = User::find($id);

        $user->update([
            'first_name' => $request->first_name,
            'email' => $request->email,

        ]);

        if (isset($request->c_password)) {
            $request->validate([
                'new_password' => 'required|min:8',
                'confirm_password' => 'required_with:password|same:new_password|min:8'

            ]);
            if (Hash::check($request->c_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->new_password),
                ]);

                return redirect()->back()->with('success', 'Your profile has been updated!');
            } else {

                return redirect()->back()->with('error', 'Your Password doest match!');
            }
        } else {

            return redirect()->back()->with('success', 'Your profile has been updated!');
        }
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('error', 'User deleted successfully!');
    }

    public function view_members()
    {
        dd(11);
        return view('admin.view_members');
    }
}
