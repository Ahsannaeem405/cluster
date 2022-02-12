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
        $user['user_list'] = User::where('post_role', 'member')->get();

        return view('admin.view_members',$user);
    }

    public function addMember(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
               
        ]);
        $user=new User();
        $user->first_name=$request->first_name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->post_role='member';
        $user->save();
        $get_user=User::where('status','1')->orderBy('id','DESC')->first();
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
    public function deleteMembers($id)
    {
        $member=User::find($id);
        $member->delete();
        return redirect()->back()->with('error', 'Member Deleted Sucessfully!');

    }
}
