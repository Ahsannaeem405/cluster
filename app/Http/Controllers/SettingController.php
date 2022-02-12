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
            'gender' => 'required',
            'image' => 'required',
        

        ]);

        $user_update=User::find($id);
        
        $user_update->first_name=$request->first_name;
        $user_update->last_name=$request->last_name;
        $user_update->email=$request->email;
        $user_update->dob=$request->dob;
        $user_update->number=$request->number;
        $user_update->gender=$request->gender;
        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $user_update->image = $imageName;
            $path = $image->move(public_path('images'), $imageName);
        }

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
            'heading' => 'required',
            'sub_heading' => 'required',
            'home_description' => 'required',
            'video_link' => 'required',

        ]);

        $setting=new Setting();
        $setting->website_name=$request->website_name;
        $setting->header_name=$request->header_name;
        $setting->footer_name=$request->footer_name;
        $setting->heading=$request->heading;
        $setting->sub_heading=$request->sub_heading;
        $setting->home_description=$request->home_description;
        $setting->video_link=$request->video_link;
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
        $setting->heading=$request->heading;
        $setting->sub_heading=$request->sub_heading;
        $setting->home_description=$request->home_description;
        $setting->video_link=$request->video_link;
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
