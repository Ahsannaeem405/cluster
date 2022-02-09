<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\JoinCluster;
use App\Models\AdminEvent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EventController extends Controller
{
    public function events()
    {
        $viewCluster['viewCluster'] = AdminEvent::all();
        return view('admin.events', $viewCluster );
    }

    public function createCluster(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',

        ]);
        $clustor = new Cluster();
        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $clustor->image = $imageName;
            $path = $image->move(public_path('images/'), $imageName);
        }
        $clustor->name = $request->name;
        $clustor->detail = $request->detail;
        $clustor->manager_id = $request->manager_id;
        $clustor->save();
        return redirect()->back()->with('success', 'Cluster addedd Successfully!');
    }
}
