<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\JoinCluster;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\Auth;
class frontController extends Controller
{
    //
    public function viewCluster()
    {
        $viewCluster['viewCluster']=Cluster::where('cluster_type','Public')->get();
        $viewCluster['viewEvent']=Event::where('Event_type','Public')->get();
        return view('front.index',$viewCluster);

    }

public function login($cluster,$id)
{
    $cluster_name=$cluster;
    $cluster_id=$id;
    $cluster =Cluster::where('cluster_type','Public')->get();
    $event =Event::where('Event_type','Public')->get();

    return view('auth.login', compact('cluster','event','cluster_name','cluster_id'));
}

public function login_event($event_name,$id)
{
    // dd( $event_name,$id);
    $event_name=$event_name;

    $event_id=$id;
    $cluster =Cluster::where('cluster_type','Public')->get();
    $event =Event::where('Event_type','Public')->get();

    return view('auth.login', compact('cluster','event','event_name','event_id'));
}


}
