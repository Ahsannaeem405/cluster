<?php

namespace App\Http\Controllers;

use App\Models\ApplyService;
use App\Models\Cluster;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\JoinCluster;
use App\Models\Company;
use App\Models\Setting;
use App\Models\User;
use Laravel\Ui\Presets\React;

class CManagerController extends Controller
{
    public function cluster_manager()
    {
        $user['cluster'] = Cluster::get();
        $user['user_list'] = User::where('post_role', 'member')->get();
        $user['manager_list'] = User::where('post_role', 'manager')->get();
        return view('admin.cluster_manager', $user);
    }

    public function addClusterManager(Request $request)
    {
        $users=$request->users;
        $cluster=$request->cluster;

        foreach($users as $userList)
        {

            $user=User::find($userList);
            $user->post_role='manager';
            $user->save();
            foreach($cluster as $clusterList)
            {
                $clusteradd=new JoinCluster();
                $clusteradd->cluster_id=$clusterList;
                $clusteradd->user_id=$userList;
                $clusteradd->status=2;
                $clusteradd->save();
            }
        }
        return redirect()->back()->with('success', 'Cluster Manager Added Sucessfully!');

    }
    public function deleteClusterM(Request $request,$id)
    {   
        $cluster_get=JoinCluster::where('user_id',$id)->get();
        foreach( $cluster_get as $row_cluster_d)
    {
        $clusterDelete=JoinCluster::find($row_cluster_d->id);
        $clusterDelete->delete();
     
    }
        $member=User::find($id);
        $member->delete();

        return redirect()->back()->with('error', 'Manager Deleted Sucessfully!');
    }
}
