<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyService;
use App\Models\Cluster;
use App\Models\Service;
use App\Models\JoinCluster;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class MemberController extends Controller
{
    public function members()
    {
        $user['cluster'] = Cluster::get();
        $user['user_list'] = User::where('post_role', 'member')->Orwhere('post_role', 'manager')->get();

        return view('admin.view_members',$user);
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
    public function updateMember(Request $request,$id)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'email' => 'required|email|unique:users',
               
        // ]);
        $user=User::find($id);
    

        $user->first_name=$request->first_name;
        $user->email=$request->email;
        $user->post_role='member';
        $user->save();
   
        $cluster=JoinCluster::where('user_id',$id);
        $cluster_get=JoinCluster::where('user_id',$id)->get();
        foreach( $cluster_get as $row_cluster_d)
    {
        $clusterDelete=JoinCluster::find($row_cluster_d->id);
        $clusterDelete->delete();
     
    }
            $clusters=$request->cluster;
            foreach( $clusters as $row_cluster)
            {
                           
                $clusteradd=new JoinCluster();
                $clusteradd->cluster_id=$row_cluster;
                $clusteradd->user_id=$id;
                $clusteradd->status=2;
                $clusteradd->save();
            }
            return redirect()->back()->with('success', 'Member Updated Sucessfully!');

        
    }
    public function assignManager(Request $request,$id)
    {
      
        $user=User::find($id);
        $user->post_role='manager';
        $user->save();
            $clusters=$request->cluster;
         
            foreach( $clusters as $row_cluster)
            {
                $cluster=new JoinCluster();
                $cluster->cluster_id=$row_cluster;
                $cluster->user_id=$id;
                $cluster->status=2;
                $cluster->save();
            }
            return redirect()->back()->with('success', 'Member Added Sucessfully!');

    }
    
    public function deleteMembers($id)
    {
        $member=User::find($id);
        $member->delete();
        return redirect()->back()->with('error', 'Member Deleted Sucessfully!');

    }
}
