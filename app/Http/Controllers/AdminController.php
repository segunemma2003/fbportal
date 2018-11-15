<?php

namespace App\Http\Controllers;
use App\Exports\ReportsExport;
use App\Exports\SingleReportsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Session as Books;
use App\User;
use Session;
use App\Reports;
use App\Mail\Verify\VerifyMail;
use App\Mail\Session\SessionMail;
use Illuminate\Support\Facades\Hash;
use App\VerifyUser;
use Carbon\Carbon;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
    	$users=User::all();
    	$sessions=Books::all();
    	$reports=Reports::all();
    	
    	return view('admin.index',compact('users','sessions','reports'));
	}
	public function train(){
	    return view('auth.register');
	}
	public function addTrainer(Request $request)
	{
	   // dd($request->all());
	    $this->validate($request,[
	            'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone'=>'required|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
	        ]);
	       // dd(sha1(time()));
	   $user= new User([
	            'first_name'=>$request->first_name,
	            'last_name'=>$request->last_name,
	            'phone'=>$request->phone,
	            'email'=>$request->email,
	            'password'=>Hash::make('password'),
	       ]);
	   $user->save();
	   $password=$request->password;
	   $verifyUser=new VerifyUser([
            'user_id'=>$user->id,
            'token'=>sha1(time()) 
        ]);
        $verifyUser->save();
        // dd($password);
        // dd($user->verifyUser->token());
	   Mail::to($user->email)->send(new VerifyMail($user,$password));
	   Session::flash('success', 'You successfully added a Trainer');
	   return redirect()->back()->with('success', 'You successfully added a Trainer');
	}
	public function reports(){
	    $today = Carbon::today();
// 		$reports=Reports::where("created_at", '>=', $today->subDays(7))->orderBy('status', 'asc')->get();
        $reports=Reports::orderBy('status','asc')->get();
		return view('admin.reports',compact('reports'));
	}
	public function eachreport($id){
		$report=Reports::whereId($id)->first();
		return view('admin.eachreport',compact('report'));
	}
	public function updatereport(Request $request, $id){
		$this->validate($request,[
			'reply'=>'required',
			'status'=>'required'
		]);
		// dd($request->all());
		$report=Reports::whereId($id)->first();
		$report->reply=$request->reply;
		$report->status=$request->status;
		$user=$report->session->user->email;
		if($report->save()){
		    Mail::to($user)->send(new SessionMail($report));
			Session::flash('success', 'You have successfully attended to this report');
			return redirect()->route('admin.reports');
		}
		Session::flash('errors', 'Opps!! An error just occured');
		return redirect()->back();
	}
    //downloading report in excel
    public function downloadreport($id){
        $report=Reports::whereId($id)->first();
        
        // // 	dd($report);
         $filename = "report.xlsx";
        
        $data='';
        $data.= "<b>Name of Trainner: </b>".$report->session->user->first_name." ".$report->session->user->last_name."<br/>".
        
                "<b>name_organisation:</b> ". $report->session->name_organisation."<br/>".
                
                "<b>Expected Number of participant: </b>". $report->session->expected."<br/>".
                '<b>Date of trainning :</b>'. $report["trainning_date"]."<br/>".
                "<b>Time of trainning:</b> ". $report->session->time."<br/>".
                '<b>Are they partners? </b>:'. $report["partner"]."<br/>".
                
                "<b>Venue of trainning: </b>". $report["venue"]."<br/>".
                "<b>Level of trainning: </b>". $report["level"]."<br/>".
                "<b>Were press around?: </b>". $report["press"]."<br/>".
                "<b>Number of females: </b>". $report["females"]."<br/>".
                "<b>Number of males: </b>". $report["male"]."<br/>".
                "<b>Number of trainee with facebook page already: </b>". $report["facebook"]."<br/>".
                "<b>Number of new facebook page opened: </b>". $report["newfacebook"]."<br/>".
                "<b>Number of instagram users: </b>". $report["instagram"]."<br/>".
                "<b>Number of new instagram users: </b>". $report["newinstagram"]."<br/>".
                "<b>Number of whatsapp users: </b>". $report["whatsapp"]."<br/>".
                "<b>Question: </b>". $report["question"]."<br/>".
                "<b>All Questions: </b>". $report["allquestion"]."<br/>".
                "<b>Trainner's feedback: </b>". $report["trainer_feedback"]."<br/>".
                "<b>Any Assistance needed?: </b>". $report["assistance"]."<br/>".
                "<b>Answer to questions asked: </b>". $report["answer"]."<br/>".
                "<b>Google drive link to documented report: </b>". $report["googledrivelink"]."<br/>".
                "<b>Link to pictures taken: </b>". $report["pictureslink"];
    // file_put_contents($filename, $data);
    // $filename->storeAs('public/upload','');
     $headers = ['Content-type'=>'application/xlsx', 'test'=>'YoYo', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $filename),'X-BooYAH'=>'WorkyWorky'];
        return \Response::make($data);

        // 	return response()->download($report->filepath);
        // 	->deleteFileAfterSend();
    }
    public function allsession()
    {
        
        $users=User::all();
        $today = Carbon::today();
		$sessions=Books::where('trainnig', '>', $today->subDays(7))->orderBy('status', 'asc')->get();
    // 	dd($sessions);
    	return view('admin.allsession',compact('users','sessions'));
    }	
    	public function status($id, $status)
    {
    	$sessions=Books::whereId($id)->first();
    	
    	$sessions->status=$status;
    	$user=$sessions->user->email;
    	if($sessions->save()){
    	    Mail::to($user)->send(new SessionMail($sessions));
			Session::flash('success', 'Updated Successfully');
    		return redirect()->back()->with('status','Updated Successfully');
		};
		Session::flash('errors', 'An error occured');
        return redirect()->back()->with('status','An error occured');
    }
    public function trainers()
    {
    	$users=User::paginate(20);
    	return view('admin.trainers',compact('users'));
	}
	public function downloadPDF($id){
		$report = Reports::find($id);
  
		$pdf = PDF::loadView('pdf', compact('report'));
		return $pdf->download("{$report->session->user->first_name}_report.pdf");
  
	  }	
	  public function export() 
	  {
		  return Excel::download(new ReportsExport, 'reports.xlsx');
	  }
	  public function singleExport($id)
	  {
		$report=Reports::whereId($id)->first();
		// $report=Reports::whereId($id)->get()->toArray();
		// dd($reports);
		$reports_array[]=[	'Name',
							
							'Are they partner?',
							'Date of Trainning',
							'Venue of Trainning',
							'Level of Trainning',
							'Were the press present?',
							'Number of females present',
							'Number of males present',
							'Number facebook users',
							'Number of new Facebook users',
							'Number instagram users',
							'Number of new Instagram users',
							'Number whatsapp users',
							'Questions',
							'All questions',
							'Answers',
							'Trainer\'s feedback',
							'Assistance',
							'Google drive link',
							'Pictures Link',
							'Status',
							'Reply'
						];
					// foreach($reports as $report){
						// dd($reportt->session->user->first_name);
						$reports_array[]=[
							'Name'=>$report->session->user->first_name." ".$report->session->user->last_name,
							'Are they partner?'=>$report->partner,
							'Date of Trainning'=>$report->tranning_date,
							'Venue of Trainning'=>$report->venue,
							'Level of Trainning'=>$report->level,
							'Were the press present?'=>$report->press,
							'Number of females present'=>$report->females,
							'Number of males present'=>$report->male,
							'Number facebook users'=>$report->facebook,
							'Number of new Facebook users'=>$report->newfacebook,
							'Number instagram users'=>$report->instagram,
							'Number of new Instagram users'=>$report->newinstagram,
							'Number whatsapp users'=>$report->whatsapp,
							'Questions'=>$report->question,
							'All questions'=>$report->allquestion,
							'Answers'=>$report->answer,
							'Trainer\'s feedback'=>$report->trainer_feedback,
							'Assistance'=>$report->assistance,
							'Google drive link'=>$report->googledrivelink,
							'Pictures Link'=>$report->pictureslink,
							'Status'=>($report->status==1?'approved':'rejected'),
							'Reply'=>$report->reply
						];
					// }
					// \Excel::create('Report',function($excel) use ($reports_array){
					// 		$excel->setTitle('Report');
					// 		$excel->sheet('Report',function($sheet) use($reports_array){
					// 			$sheet->fromArray($reports_array,null,'A1',false,false);

					// 		});
					// })->download('xlsx');
					// (new Collection([[1, 2, 3], [1, 2, 3]]))->downloadExcel(
					// 	$filePath,
					// 	$writerType = null,
					// 	$headings = false
					// )
					
		return Excel::download(new SingleReportsExport($id), 'reports.xlsx');
	  }

}
