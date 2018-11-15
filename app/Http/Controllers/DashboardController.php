<?php

namespace App\Http\Controllers;
use App\Session as Book;
use Session;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Reports;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function booksessions(Request $request)
    {
        $this->validate($request,[
            "name_organisation"=>"required",
            "expected"=>"required",
            "venue"=>"required",
            "location"=>"required",
            "trainnig"=>"required",
            "time"=>"required",
        ]);
        
        $user=Auth::user();
        
        if(Auth::user()->profile==null)
        {
            Session::flash('info', 'You need to update your profile');
            return redirect()->back();
        }else{
        $session=new Book;
        $session->name_organisation=$request->name_organisation;
        $session->expected=$request->expected;
        $session->venue=$request->venue;
        $session->location=$request->location;
        $session->trainnig=$request->trainnig;
        $session->time=$request->time;
        $session->user()->associate($user);
        if($session->save()){
            Session::flash('success', "You successfully booked your session.You will be contacted for feedbacks");
            return redirect()->back();
        }
        Session::flash('message', "An error occured");
            return redirect()->back();
        }

    }
    public function passwordreset()
    {
        return view('auth.passwordreset');
    }
    public function resetpassword(Request $request)
    {
       
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed'
            ]);
        $id=Auth::user()->id;
        $user=User::whereId($id)->first();
        $user->password=Hash::make($request->password);
        if($user->save()){
            Session::flash('success','You have successfully updated your password');
            return redirect('/trainers/dashboard');
        }
        else{
            Session::flash('errors','Opps something went wrong');
            return redirect()->back();
        }
    }
    public function sessions()
    {
        //getting user id
        $id=Auth::user()->id;
        //all sessions
        $sessions=Book::whereUser_id($id)->orderBy('status', 'asc')->get();
        return view('dashboard.sessions', compact('sessions'));
    }
    public function allreport(){
        $id=Auth::user()->id;
      
        $reports=Reports::orderBy('status', 'asc')->get();
       
        return view('dashboard.allreports',compact('reports', 'id'));
        
    }
    public function makereport($id){
        $user=Auth::user();
        $session=Book::whereId($id)->first();
    // dd($user);
        return view('dashboard.report',compact('user','session'));
    }
    public function report(Request $request,$id){
        $this->validate($request,[
            "partner"=>"required",
            "trainning_date"=>"required",
            "venue"=>"required",
            "level"=>"required",
            "press"=>"required",
            "females"=>"required",
            "male"=>"required",
            "facebook"=>"required",
            "newfacebook"=>"required",
            "instagram"=>"required",
            "whatsapp"=>"required",
            "question"=>"required",
            "trainer_feedback"=>'required',
            "assistance"=>"required",
            "googledrivelink"=>"required",
            "pictureslink"=>"required",
        ]);
        $user=Auth::user();
        if($user->password==Hash::make('password'))
        {
            Session::flash('errors', 'You need to update your password');
            return redirect()->back();
        }else{
        $session=Book::whereId($id)->first();
    //     if(isset($session->report->instagram)){
    //         Session::flash('info', 'You already have a report for this session');
    //         return redirect()->route('allsessions');
    // }
        $report=new Reports([
            "partner"=>$request->partner,
            "trainning_date"=>$request->trainning_date,
            "venue"=>$request->venue,
            "level"=>$request->level,
            "press"=>$request->press,
            "females"=>$request->females,
            "male"=>$request->male,
            "facebook"=>$request->facebook,
            "newfacebook"=>$request->newfacebook,
            "instagram"=>$request->instagram,
            "newinstagram"=>$request->newinstagram,
            "whatsapp"=>$request->whatsapp,
            "question"=>$request->question,
            "allquestion"=>$request->allquestion,
            "trainer_feedback"=>$request->trainer_feedback,
            "assistance"=>$request->assistance,
            "answer"=>$request->answer,
            "googledrivelink"=>$request->googledrivelink,
            "pictureslink"=>$request->pictureslink,
        ]);
        if($session->report()->save($report)){
            Session::flash('success','You have successfully submitted your report. You will be contacted for feedbacks');
            return redirect()->back();
        }else{
            Session::flash('error', 'Opps, Something went wronng while submitting');
            return redirect()->back();
        }
        

    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
