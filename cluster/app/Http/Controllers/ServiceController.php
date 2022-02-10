<?php

namespace App\Http\Controllers;

use App\Models\ApplyService;
use App\Models\Cluster;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{
    public function view_service()
    {
        $service['services']=Service::get();
        $service['clusters']=Cluster::get();
        return view('admin.view_services', $service);
    }

    ////////////addService start
    public function addService(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cluster_id' => 'required',
               
        ]);
        $title=$request->title;
        $description=$request->description;
        $cluster_id=$request->cluster_id;
        $service=new Service();
        $service->title=$title;
        $service->description=$description;
        $service->cluster_id=$cluster_id;
        $service->status=0;
        $service->save();
        return redirect()->back()->with('success', 'Service Added Sucessfully!');
    
    }
    ////////////addService end
    ////////////updateService start
    public function updateService(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cluster_id' => 'required',
               
        ]);
        $title=$request->title;
        $description=$request->description;
        $cluster_id=$request->cluster_id;
        $service=Service::find($id);
        $service->title=$title;
        $service->description=$description;
        $service->cluster_id=$cluster_id;
        $service->status=0;
        $service->save();
        return redirect()->back()->with('success', 'Service Updated Sucessfully!');
    
    }

    ////////////updateService end
    ////////////deleteService start
    public function deleteService($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect()->back()->with('error', 'Service Deleted Sucessfully!');

    }
    ////////////deleteService end
////////////applyService start
    public function applyService(Request $request)
    {
       //dd($request->input());

        $apply_type=$request->apply;
        $service_id=$request->service_id;
        $apply_service_user=ApplyService::where('user_id',Auth::user()->id)->where('service_id', $service_id)->get();
        //dd($apply_service_user);
        if(count($apply_service_user) == 0)
        {
        if($apply_type == 'company')
        {
            $user_comp=Company::where('user_id',Auth::user()->id)->first();
            if($user_comp != null)
            {
                    $apply_service=new ApplyService();
                    $apply_service->user_id=Auth::user()->id;
                    $apply_service->service_id=$service_id;
                    $apply_service->apply_type=$apply_type;
                    $apply_service->save();
                    return redirect()->back()->with('success', 'Apply Service Sucessfully!');
    
            }else{
                return view('admin.view_setting');
            }

           // dd($user_comp);
        }else{
            $apply_service=new ApplyService();
            $apply_service->user_id=Auth::user()->id;
            $apply_service->service_id=$service_id;
            $apply_service->apply_type=$apply_type;
            $apply_service->save();
            return redirect()->back()->with('success', 'Apply Service Sucessfully!');     
        }
    }else{
        return redirect()->back()->with('error', 'Already Apply Service!');     

    }
    }
    ////////////applyService end
    ////////////applyServiceView start
    public function applyServiceView($id)
    {   
        $apply_service['Applyservices']=ApplyService::where('service_id',$id)->get();
        $apply_service['service_data']=Service::where('id',$id)->get();
        //$user_id=$services[0]->user_id;
            //////userdata get relation start
           $apply_service['user_data']= $apply_service['Applyservices'][0]->ServiceUsers;
           $apply_service['cluster_data']= $apply_service['service_data'][0]->ServiceCluster;
          // dd($apply_service['cluster_data']);
            //////userdata get relation end
        return view('admin.apply_service_view',$apply_service);
    }
    ////////////applyServiceView end

    //////////////////add user company start
    public function AddCompany(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
               
        ]);
        $title=$request->title;
        $description=$request->description;
        $company=new Company();
        $company->title=$title;
        $company->description=$description;
        $company->user_id=Auth::user()->id;
        $company->save();
        return redirect()->back()->with('success', 'Company Added Sucessfully!');
    }
    //////////////////add user company end
}
