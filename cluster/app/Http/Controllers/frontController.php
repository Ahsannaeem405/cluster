<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;
class frontController extends Controller
{
    //
    public function viewCluster()
    {
        $viewCluster['viewCluster']=Cluster::all();
        return view('front.index',$viewCluster);

    }
}
