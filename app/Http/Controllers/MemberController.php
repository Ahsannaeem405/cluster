<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyService;
use App\Models\Cluster;
use App\Models\Service;
use App\Models\JoinCluster;
use App\Models\Company;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\RequestCluster;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class MemberController extends Controller
{
    public function members()
    {
        $user['cluster'] = Cluster::get();
        $user['user_list'] = User::where('post_role', 'member')->Orwhere('post_role', 'manager')->get();

        return view('admin.view_members', $user);
    }

    public function addMember(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'cluster' => 'required',

        ]);

        $user=new User();
        $user->first_name=$request->first_name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->post_role='member';
        $user->status='1';
        $user->save();
        $get_user=User::where('post_role','member')->orderBy('id','DESC')->first();
        $user_id=$get_user->id;
            $clusters=$request->cluster;

            foreach( $clusters as $row_cluster)
            {


                $cluster=new JoinCluster();
                $cluster->cluster_id=$row_cluster;
                $cluster->user_id=$user_id;
                $cluster->status=2;
                $cluster->save();
            }
            return redirect()->back()->with('success', 'Member Added Sucessfully!');




    }
    public function updateMember(Request $request, $id)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'email' => 'required|email|unique:users',

        // ]);
        $user = User::find($id);


        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->post_role = 'member';
        $user->save();

        $cluster = JoinCluster::where('user_id', $id);
        $cluster_get = JoinCluster::where('user_id', $id)->get();
        foreach ($cluster_get as $row_cluster_d) {
            $clusterDelete = JoinCluster::find($row_cluster_d->id);
            $clusterDelete->delete();
        }
        $clusters = $request->cluster;
        foreach ($clusters as $row_cluster) {

            $clusteradd = new JoinCluster();
            $clusteradd->cluster_id = $row_cluster;
            $clusteradd->user_id = $id;
            $clusteradd->status = 2;
            $clusteradd->save();
        }
        return redirect()->back()->with('success', 'Member Updated Sucessfully!');
    }
    public function assignManager(Request $request, $id)
    {

        $user = User::find($id);
        $user->post_role = 'manager';
        $user->save();
        $clusters = $request->cluster;

        foreach ($clusters as $row_cluster) {
            $cluster = new JoinCluster();
            $cluster->cluster_id = $row_cluster;
            $cluster->user_id = $id;
            $cluster->status = 2;
            $cluster->save();
        }
        return redirect()->back()->with('success', 'Member Added Sucessfully!');
    }

    public function deleteMembers($id)
    {
        $member = User::find($id);
        $member->delete();
        return redirect()->back()->with('error', 'Member Deleted Sucessfully!');
    }

    public function member_index(Request $request)
    {

        $date1 = Date('Y-m-d H:i:s');
        $clus = JoinCluster::Where('user_id', Auth::user()->id)->where('status', 1)->count();


        $i = 01;
        for ($i = $i; $i <= $i; $i++) {

            if ($i != 13) {
                $date = date("$i");
                $cluster[] = Event::whereMonth('datetimepicker', $date)->get();
                $arr[] = $date;
            } else {
                break;
            }
        }

        $clusterr[] =  count($cluster[0]);
        $clusterr[] =  count($cluster[1]);
        $clusterr[] =  count($cluster[2]);
        $clusterr[] =  count($cluster[3]);
        $clusterr[] =  count($cluster[4]);
        $clusterr[] =  count($cluster[5]);
        $clusterr[] =  count($cluster[6]);
        $clusterr[] =  count($cluster[7]);
        $clusterr[] =  count($cluster[8]);
        $clusterr[] =  count($cluster[9]);
        $clusterr[] =  count($cluster[10]);
        $clusterr[] =  count($cluster[11]);

        $eve = EventJoin::where('user_id', Auth::user()->id)->count();

        $ser = Event::whereDate('datetimepicker', '>', $date1)->count();

        return view('member.index', compact('clus', 'eve', 'ser', 'cluster', 'clusterr'));
    }

    public function search_cluster(Request $request){

        $viewCluster = Cluster::Where('name', $request->name)->where('cluster_type', 'Public')->get();

        return view('member.searchCluseter', compact('viewCluster'));



    }

    public function search_event(Request $request){

        $search_event = Event::Where('name', $request->name)->where('Event_type', 'Public')->get();

        return view('member.searchEvent', compact('search_event'));



    }




    public function viewCluster()
    {

        $viewCluster['viewCluster']  =  JoinCluster::where('user_id',Auth::user()->id)->get();
        // $viewCluster['viewCluster'] = Cluster::all();
        $viewCluster['public_cluster'] = Cluster::where('cluster_type', 'Public')->get();
        $manager['manager'] = User::where('role', 'user')->get();

        return view('member.view_cluster', $viewCluster, $manager);


    }


    public function request_join($id)
    {



        $get = RequestCluster::where('cluster_id', $id)->where('user_id', Auth::user()->id)->count();
    if($get == 0)
    {
        $req = new RequestCluster();
        $req->cluster_id = $id;
         $req->user_id = Auth::user()->id;
         $req->save();
     }
         return back()->with('success', 'Request Submitted Sucessfully');


    }


    public function reject($id){


        $req = RequestCluster::find($id);
        $req->delete();
        return back()->with('success', 'Rejected Successfully');

    }
    public function aprroved($id){

            $req = RequestCluster::find($id);

            $clus = new JoinCluster();
            $clus->cluster_id =   $req->cluster_id;
            $clus->user_id =  $req->user_id;
            $clus->status =  1;
            $clus->save();
            $req->delete();
            return back()->with('success', 'Approved Successfully');


    }











    public function view_event()
    {

        $date =   date("Y-m-d");

        $event['clustor'] = Cluster::all();
        $event['event'] = Event::where('userid', Auth::user()->id)->get();

        $event['search_event'] = EventJoin::where('user_id', Auth::user()->id)->take(10)->get();


        $event['event_3'] = Event::where('userid', Auth::user()->id)->whereDate('datetimepicker',  $date)->take(3)->get();

        $event['event_join'] = EventJoin::where('user_id', Auth::user()->id)->get();
        $event['user'] = User::Where('role', '!=', 'admin')->get();

        return view('member.view_event', $event);
    }
}
