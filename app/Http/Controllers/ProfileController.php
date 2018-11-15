<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_pictures($picture, Request $request){
        if($request->hasFile($picture)){
            $filename=$request->file($picture)->getClientOriginalName();
            $filenameWithoutExt=pathinfo($filename, PATHINFO_FILENAME);
            $extension=$request->file($picture)->getClientOriginalExtension();
            $filenameToStore=$filenameWithoutExt.'_'.time().'.'.$extension;
            $request->file($picture)->storeAs('public/upload',$filenameToStore);
            return $filenameToStore;
        }
        else{
            return 'noimage.jpg';
        
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'dob'=>'required|date',
            'street'=>'required',
            'city'=>'required',
            'state'=>'required|string',
            'profile_picture'=> 'required|mimes:jpeg,jpg,png|max:1000',
            'certificate'=>'required',
            'kinLastName'=>'required|string',
            'kinFirstName'=>'required|string',
            'kinEmail'=>'required|string|email',
            'kinPhone'=>'required',
            'relationship'=>'required|string',
            'accountname'=>'required',
            'accountno'=>'required',
            'bank'=>'required',
        ]);
        $picture=$this->get_pictures('profile_picture', $request);
        $id=Auth::user()->id;
        $profile=new Profile([
            'dob'=>$request->dob,
            'street'=>$request->street,
            'city'=>$request->city,
            'state'=>$request->state,
            'profile_picture'=> $picture,
            'certificate'=>$request->certificate,
            'kinLastName'=>$request->kinLastName,
            'kinFirstName'=>$request->kinFirstName,
            'kinEmail'=>$request->kinEmail,
            'kinPhone'=>$request->kinPhone,
            'relationship'=>$request->relationship,
            'accountname'=>$request->accountname,
            'accountno'=>$request->accountno,
            'bank'=>$request->bank,
            'user_id'=>$id
        ]);
        if($profile->save()){
            Session::flash('success','You have Successfully updated your profile!!!!');
            return redirect()->back();
        }else{
            Session::flash('errors','Opps Something went wrong!!!');
            return redirect()->back();
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
