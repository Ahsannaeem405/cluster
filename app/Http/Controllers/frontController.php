<?php

namespace App\Http\Controllers;

use App\Models\SubscribeEmail;
use Illuminate\Http\Request;
use App\Models\Cluster;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\JoinCluster;
use App\Models\Setting;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use PHPUnit\Framework\Constraint\Count;

class frontController extends Controller
{
    //
    public function viewCluster()
    {
        $viewCluster['viewCluster']=Cluster::where('cluster_type','Public')->get();
        $viewCluster['viewEvent']=Event::where('Event_type','Public')->get();
        $viewCluster['setting']=Setting::first();
        //dd($viewCluster['setting']);
        return view('front.index',$viewCluster);

    }
    public function cluster_details($id)
    {
       
        $viewCluster['viewEvent']=Event::where('Event_type','Public')->where('cluster_id',$id)->get();
        
        return view('front.cluster_details',$viewCluster);

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

    public function subscribe(Request $request)
    {
        // dd($request->input());
            $subscribe=new SubscribeEmail();

            $subscribe->email=$request->email;
            $subscribe->save();
            $details = [
                'email' => $request->email,
            ];

            \Mail::to($request->email)->send(new \App\Mail\SubscribeMail($details));
            return redirect()->back()->with('success', 'Thanks for subscribe this website!');

    }

    public function searchCluster(Request $request)
    {
        $final=array();
        $top_cluster['top_cluster']=$request->search;
        if($request->search == 'top_cluster')
        {
            $top_cluster['viewCluster']=Cluster::where('cluster_type','Public')->withCount('topCluster')->having('top_cluster_count','>',0)->orderBy('top_cluster_count','DESC')->take(4)->get();
            //dd($top_cluster['viewCluster']);

            return view('front.search_cluster',$top_cluster);

        }
        if($request->search == 'most_popular')
        {   
            
            $top_cluster['viewCluster']=Cluster::where('cluster_type','Public')->withCount('topEvent')->having('top_event_count','>',0)->orderBy('top_event_count','DESC')->take(4)->get();

        }else{
            $top_cluster['TopCluster']=Cluster::where('cluster_type','Public')->orderBy('id','DESC')->take(4)->get();
          
        }
        return view('front.search_cluster',$top_cluster);
    }

    public function searchClusterMain(Request $request)
    {
        $top_cluster['viewCluster']=Cluster::where('cluster_type','Public')->where('name','like','%'.$request->search.'%')->take(4)->get();
        // dd($top_cluster['TopCluster']);
        return view('front.searchMain_cluster',$top_cluster);
       }
}
