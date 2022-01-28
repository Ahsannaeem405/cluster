<?php

namespace App\Http\Controllers;

use App\Models\Cluster;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    //
    public function createCluster(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
               
        ]);
        $clustor=new Cluster();
        if(isset($request->image))
        {
        $image=$request->file('image');
        $imageName = $image->getClientOriginalName();
        $clustor->image=$imageName;
        $path=$image->move(public_path('images/'),$imageName);
           
        }
        $clustor->name=$request->name;
        $clustor->detail=$request->detail;
        $clustor->save();
        return redirect()->back()->with('success','Cluster addedd Successfully!'); 

    }

    public function viewCluster()
    {
        $viewCluster['viewCluster']=Cluster::all();
        return view('admin.view_cluster',$viewCluster);

    }
    public function updateCluster(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
               
        ]);
        $clustor=Cluster::find($id);
        if(isset($request->image))
        {
        $image=$request->file('image');
        $imageName = $image->getClientOriginalName();
        $clustor->image=$imageName;
        $path=$image->move(public_path('images/'),$imageName);
           
        }
        $clustor->name=$request->name;
        $clustor->detail=$request->detail;
        $clustor->save();
        return redirect()->back()->with('success','Cluster Updated Successfully!'); 
    }
    public function deleteCluster($id)
    {
        $clustor=Cluster::find($id);
        if(\File::exists(public_path('images/'.$clustor->image.''))){
            //dd('File does not exists.');
            \File::delete(public_path('images/'.$clustor->image.''));
            }
        $clustor->delete();
        return redirect()->back()->with('error','Cluster Deleted Successfully!'); 

    }
    
}
