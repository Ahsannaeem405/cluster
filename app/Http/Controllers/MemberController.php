<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\ApplyService;
use App\Models\Cluster;
use App\Models\Service;
use App\Models\JoinCluster;
use App\Models\Company;
use App\Models\Event;
use App\Models\EventJoin;
use App\Models\Opition;
use App\Models\Question;
use App\Models\RequestCluster;
use App\Models\SurveryNumber;
use App\Models\SurveyReply;
use App\Models\User;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use PhpOption\Option;

class MemberController extends Controller
{
    public function members()
    {
        $user['cluster'] = Cluster::get();
        $user['user_list'] = User::where('post_role', 'member')->paginate(10);

        return view('admin.view_members', $user);
    }

    public function addMember(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'cluster' => 'required',

        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->post_role = 'member';
        $user->status = '1';
        $user->role = 'user';
        $user->save();
        $get_user = User::where('post_role', 'member')->orderBy('id', 'DESC')->first();
        $user_id = $get_user->id;
        $clusters = $request->cluster;

        foreach ($clusters as $row_cluster) {

            $cluster = new JoinCluster();
            $cluster->cluster_id = $row_cluster;
            $cluster->user_id = $user_id;
            $cluster->status = 1;
            $cluster->save();
        }
        return redirect()->back()->with('success', 'Member Added Sucessfully!');
    }
    public function updateMember(Request $request, $id)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'email' => 'required|email|unique:users',

        // ]);
        $user = User::find($id);


        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->post_role = 'member';
        $user->role = 'user';
        $user->save();

        //$cluster = JoinCluster::where('user_id', $id);
        $cluster_get = JoinCluster::where('user_id', $id)->get();
        foreach ($cluster_get as $row_cluster_d) {
            $clusterDelete = JoinCluster::find($row_cluster_d->id);
            $clusterDelete->delete();
        }
        $clusters = $request->cluster;
        foreach ($clusters as $row_cluster) {

            $clusteradd = new JoinCluster();
            $clusteradd->cluster_id = $row_cluster;
            $clusteradd->user_id = $id;
            $clusteradd->status = 1;
            $clusteradd->save();
        }
        return redirect()->back()->with('success', 'Member Updated Sucessfully!');
    }
    public function assignManager(Request $request, $id)
    {

        $user = User::find($id);
        $user->post_role = 'manager';
        $user->save();
        $cluster_get = JoinCluster::where('user_id', $id)->get();
        foreach ($cluster_get as $row_cluster_d) {
            $clusterDelete = JoinCluster::find($row_cluster_d->id);
            $clusterDelete->delete();
        }
        $clusters = $request->cluster;

        foreach ($clusters as $row_cluster) {
            $cluster = new JoinCluster();
            $cluster->cluster_id = $row_cluster;
            $cluster->user_id = $id;
            $cluster->status = 2;
            $cluster->save();
        }
        return redirect()->back()->with('success', 'Assign Manager Sucessfully!');
    }

    public function deleteMembers($id)
    {
        $member = User::find($id);
        $member->delete();
        return redirect()->back()->with('error', 'Member Deleted Sucessfully!');
    }

    public function member_index(Request $request)
    {

        $date1 = Date('Y-m-d H:i:s');
        $clus = JoinCluster::Where('user_id', Auth::user()->id)->where('status', 1)->count();


        $i = 01;
        for ($i = $i; $i <= $i; $i++) {

            if ($i != 13) {
                $date = date("$i");
                $cluster[] = Event::whereMonth('datetimepicker', $date)->get();
                $arr[] = $date;
            } else {
                break;
            }
        }

        $clusterr[] =  count($cluster[0]);
        $clusterr[] =  count($cluster[1]);
        $clusterr[] =  count($cluster[2]);
        $clusterr[] =  count($cluster[3]);
        $clusterr[] =  count($cluster[4]);
        $clusterr[] =  count($cluster[5]);
        $clusterr[] =  count($cluster[6]);
        $clusterr[] =  count($cluster[7]);
        $clusterr[] =  count($cluster[8]);
        $clusterr[] =  count($cluster[9]);
        $clusterr[] =  count($cluster[10]);
        $clusterr[] =  count($cluster[11]);

        $eve = EventJoin::where('user_id', Auth::user()->id)->count();

        $ser = Event::whereDate('datetimepicker', '>', $date1)->count();

        return view('member.index', compact('clus', 'eve', 'ser', 'cluster', 'clusterr'));
    }

    public function search_cluster(Request $request)
    {

        $viewCluster = Cluster::where('name', 'like', '%' . $request->name . '%')->where('cluster_type', 'Public')->get();

        return view('member.searchCluseter', compact('viewCluster'));
    }

    public function search_event(Request $request)
    {



        $search_event = Event::where('name', 'like', '%' . $request->name . '%')->where('Event_type', 'Public')->get();

        return view('member.searchEvent', compact('search_event'));
    }



    public function MangerCluster()
    {



        $viewCluster['viewCluster']  =  JoinCluster::where('user_id', Auth::user()->id)->get();
        $viewCluster['public_cluster'] = Cluster::where('cluster_type', 'Public')->get();
        $manager['manager'] = User::where('role', 'user')->get();

        // $mang = JoinCluster::Where('cluster_id', $id)->where('status', '!=', 0)->Where('user_id', Auth::user()->id)->first();


        return view('manager.view_cluster', $viewCluster, $manager);
    }

    public function viewCluster()
    {

        $viewCluster['viewCluster']  =  JoinCluster::where('user_id', Auth::user()->id)->get();
        $viewCluster['public_cluster'] = Cluster::where('cluster_type', 'Public')->get();
        $manager['manager'] = User::where('role', 'user')->get();

        return view('member.view_cluster', $viewCluster, $manager);
    }


    public function request_join($id)
    {



        $get = RequestCluster::where('cluster_id', $id)->where('user_id', Auth::user()->id)->count();
        $get1 = JoinCluster::where('cluster_id', $id)->where('user_id', Auth::user()->id)->count();
        if ($get == 0) {
            $req = new RequestCluster();
            $req->cluster_id = $id;
            $req->user_id = Auth::user()->id;
            $req->save();
        }



        if ($get1 == 0) {
            $join = new JoinCluster();
            $join->cluster_id = $id;
            $join->user_id = Auth::user()->id;
            $join->status = 0;
            $join->save();
        }



        return back()->with('success', 'Request Submitted Sucessfully');
    }


    public function reject($id)
    {


        $req = RequestCluster::find($id);
        $clus =  JoinCluster::where('cluster_id', $req->cluster_id)->where('user_id', $req->user_id)->first();

        $req->delete();
        $clus->delete();


        return back()->with('success', 'Rejected Successfully');
    }
    public function aprroved($id)
    {

        $req = RequestCluster::find($id);


        $clus =  JoinCluster::where('cluster_id', $req->cluster_id)->where('user_id', $req->user_id)->first();
        // @dd( $clus);
        if ($clus != null) {
            $clus->cluster_id =   $req->cluster_id;
            $clus->user_id =  $req->user_id;
            $clus->status =  1;
            $clus->save();
            $req->delete();
        }

        return back()->with('success', 'Approved Successfully');
    }

    public function view_event()
    {

        $date =   date("Y-m-d");

        $event['clustor'] = Cluster::all();
        $event['event'] = Event::where('userid', Auth::user()->id)->get();

        $event['search_event'] = Event::where('Event_type', 'Public')->take(10)->get();


        $event['event_3'] = Event::where('userid', Auth::user()->id)->whereDate('datetimepicker',  $date)->take(3)->get();

        $event['event_join'] = EventJoin::where('user_id', Auth::user()->id)->get();
        $event['user'] = User::Where('role', '!=', 'admin')->get();

        return view('member.view_event', $event);
    }




    public function survey_form()
    {


        return view('member.survey');
    }



    public function survey_edit(Request $req)
    {


        if ($req->questionr || $req->question) {
            $serr = new SurveryNumber();
            $serr->userID = Auth::user()->id;
            $serr->title = $req->title;
            $serr->save();
        }

        if ($req->questionr != null) {

            for ($i = 0; $i < count($req->questionr); $i++) {

                $que = new Question();
                $que->question_title = $req->questionr[$i];
                $que->question_title = $req->questionr[$i];
                $que->question_type = 'radio';
                $que->servey_id =   $serr->id;

                $que->user_id = Auth::user()->id;

                $que->save();

                $opt = new Opition();
                $opt->option1 = $req->option1[$i];
                $opt->option2 = $req->option2[$i];
                $opt->option3 = $req->option3[$i];
                $opt->option4 = $req->option4[$i];
                $opt->question_id = $que->id;
                $opt->save();
            }
        }


        if ($req->question != null) {
            for ($i = 0; $i < count($req->question); $i++) {

                $que = new Question();
                $que->question_title = $req->question[$i];
                $que->question_type = 'text';
                $que->user_id = Auth::user()->id;
                $que->servey_id =  $serr->id;
                $que->save();
            }
        }



        for ($i = 0; $i < count($req->quesIDRad); $i++) {


            $quee =  Question::find($req->quesIDRad[$i]);
            $quee->question_title = $req->questionrad[$i];
            $quee->save();

            $optt = Opition::Where('question_id', $req->quesIDRad[$i])->first();
            $optt->option1 = $req->option11[$i];
            $optt->option2 = $req->option22[$i];
            $optt->option3 = $req->option33[$i];
            $optt->option4 = $req->option44[$i];
            $optt->save();
        }

        for ($i = 0; $i < count($req->quesID); $i++) {


            $quee =  Question::find($req->quesID[$i]);

            $quee->question_title = $req->questioninp[$i];
            $quee->save();
        }




        return back();
    }


    public function survey_create(Request $req)
    {

        // dd($req->title);

        $serr = new SurveryNumber();
        $serr->userID = Auth::user()->id;
        $serr->title = $req->title;
        $serr->save();

        if ($req->question != null) {
            for ($i = 0; $i < count($req->question); $i++) {

                $que = new Question();
                $que->question_title = $req->question[$i];
                $que->question_type = 'text';
                $que->user_id = Auth::user()->id;
                $que->servey_id =  $serr->id;
                $que->save();
            }
        }


        if ($req->questionr != null) {

            for ($i = 0; $i < count($req->questionr); $i++) {

                $que = new Question();
                $que->question_title = $req->questionr[$i];
                $que->question_title = $req->questionr[$i];
                $que->question_type = 'radio';
                $que->servey_id =   $serr->id;

                $que->user_id = Auth::user()->id;


                $que->save();

                $opt = new Opition();
                $opt->option1 = $req->option1[$i];
                $opt->option2 = $req->option2[$i];
                $opt->option3 = $req->option3[$i];
                $opt->option4 = $req->option4[$i];
                $opt->question_id = $que->id;
                $opt->save();
            }
        }

        return back()->with('success', 'Add Question Successfully');
    }

    public function survey_list()
    {
        $ans =  Answer::get()->Unique('userID');

        return view('member.view_servey', compact('ans'));
    }


    public function view_que()
    {
        $serv = SurveryNumber::all();

        //   dd( $serv[0]->Survey);

        return view('member.view_que', compact('serv'));
    }

    public function form_submision(Request $req)
    {



        if(isset($req->survyID))
        {


        for ($i = 0; $i < count($req->survyID); $i++) {


            $surv = new SurveyReply();
            $surv->userID = Auth::user()->id;
            $surv->surveyID = $req->survyID[$i];
            $surv->save();
        }
    }

    if(isset($req->optionID))
    {
        for ($i = 0; $i < count($req->optionID); $i++) {

            $reqq =   $req->optionID[$i];
            $r = 'option' . $reqq;
            $ans = new Answer();
            $ans->questionID =  $req->questionIDr[$i];
            $ans->optionID = $req->optionID[$i];
            $ans->formID = $req->Formm[$i];
            $ans->answer = $req->$r;
            $ans->userID = Auth::user()->id;
            $ans->save();
        }
    }

        if (isset($req->answer_text)) {


            for ($i = 0; $i < count($req->answer_text); $i++) {

                $ans = new Answer();
                $ans->answer_text =  $req->answer_text[$i];
                $ans->questionID = $req->questionID[$i];
                $ans->formID = $req->Form[$i];


                $ans->userID = Auth::user()->id;

                $ans->save();
            }
        }

        return back()->with('success', 'Submitted Successfully');
    }


    public function view_list($id)
    {


        $serv = SurveryNumber::all();
        $ans = Answer::where('userID', $id)->get();
        return view('member.survey_detail', compact('ans', 'serv'));
    }



    public function survey_view()
    {


        $serv = SurveryNumber::where('userID', Auth::user()->id)->get();

        return view('member.edit_survey', compact('serv'));
    }

    public function invite_user(Request $request){


        for($i = 0; $i < count($request->userid); $i++)
        {
            $get = JoinCluster::where('user_id', $request->userid[$i])->where('cluster_id',$request->clusterID )->count();

            if($get == 0)
            {
                $join = new JoinCluster();
                $join->user_id = $request->userid[$i];
                $join->cluster_id = $request->clusterID;
                $join->status = 1;
                $join->save();
            }


        }

        return back()->with('success', "Sucessfully Invited");

    }
    public function skipForm()
    {
        setcookie('skip','SkipFrom', time() + (86400 *30));//set for a day

        return back()->with('success', "Sucessfully Invited");
    }
}
