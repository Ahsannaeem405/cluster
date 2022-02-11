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
use Illuminate\Support\Facades\Auth;
class SettingController extends Controller
{
    public function settings()
    {
        $setting['user_data']=User::where('id',Auth::user()->id)->first();
        $setting['company_data']=Company::where('user_id',Auth::user()->id)->first();
        $setting['setting_data']=Setting::first();
        return view('admin.view_setting', $setting);
    }
    public function profileSetting(Request $request, $id)
    {
    
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'number' => 'required',
            'description' => 'required',
            'gender' => 'required',
            'married_status' => 'required',

        ]);

        $user_update=User::find($id);
        $user_update->first_name=$request->first_name;
        $user_update->last_name=$request->last_name;
        $user_update->email=$request->email;
        $user_update->dob=$request->dob;
        $user_update->number=$request->number;
        $user_update->description=$request->description;
        $user_update->gender=$request->gender;
        $user_update->married_status=$request->married_status;
        $user_update->save();
        return redirect()->back()->with('success', 'Profile Updated Sucessfully!');

    
    }

    public function websiteSetting(Request $request)
    {
     
        $request->validate([
            'footer_name' => 'required',
            'header_name' => 'required',
            'website_name' => 'required',
            'website_logo' => 'required',

        ]);

        $setting=new Setting();
        $setting->website_name=$request->website_name;
        $setting->header_name=$request->header_name;
        $setting->footer_name=$request->footer_name;
        if (isset($request->website_logo)) {
            $image = $request->file('website_logo');
            $imageName = $image->getClientOriginalName();
            $setting->website_logo = $imageName;
            $path = $image->move(public_path('images'), $imageName);
        }
        $setting->save();
        return redirect()->back()->with('success', 'Setting Saved Sucessfully!');


    }
    public function updateWebsiteSetting(Request $request,$id)
    {
        $setting=Setting::find($id);
        $setting->website_name=$request->website_name;
        $setting->header_name=$request->header_name;
        $setting->footer_name=$request->footer_name;
        if (isset($request->website_logo)) {
            $image = $request->file('website_logo');
            $imageName = $image->getClientOriginalName();
            $setting->website_logo = $imageName;
            $path = $image->move(public_path('images'), $imageName);
        }
        $setting->save();
        return redirect()->back()->with('success', 'Setting Updated Sucessfully!');
    }
    
}
