<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\User;
class AdminController extends Controller
{
    public function index()
    {
    	$users=User::all();
    	$sessions=Session::all();
    	
    	return view('admin.index',compact('users','sessions'));
    }
    public function allsession()
    {
    $users=User::all();
    	$sessions=Session::all();
    	
    	return view('admin.allsession',compact('users','sessions'));
    }	
    	public function status($id, $status)
    {
    	$sessions=Session::whereId($id)->first();
    	// dd($sessions->status);
    	$sessions->status=$status;
    	if($sessions->save()){
    		return redirect()->back()->with('status','Updated Successfully');
    	};
return redirect()->back()->with('status','An error occured');
    }
    public function trainers()
    {
    	$users=User::paginate(20);
    	return view('admin.trainers',compact('users'));
    }	

}
