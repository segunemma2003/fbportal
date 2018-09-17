<?php

namespace App\Http\Controllers;
use App\Session as Book;
use Session;
use Auth;
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
        $session=new Book;
        $session->name_organisation=$request->name_organisation;
        $session->expected=$request->expected;
        $session->venue=$request->venue;
        $session->location=$request->location;
        $session->trainnig=$request->trainnig;
        $session->time=$request->time;
        $session->user()->associate($user);
        if($session->save()){
            Session::flash('success', "You successfully booked your session");
            return redirect()->back();
        }
        Session::flash('message', "An error occured");
            return redirect()->back();

    }
    public function sessions()
    {
        //getting user id
        $id=Auth::user()->id;
        //all sessions
        $sessions=Book::whereUser_id($id)->get();
        return view('dashboard.sessions', compact('sessions'));
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
