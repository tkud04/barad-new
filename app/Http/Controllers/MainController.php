<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 
use App\Leads;

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
	    $signals = $this->helpers->signals;
	    $sliders = $this->helpers->homeSliders;
		
    	return view('index',compact(['user','signals','sliders']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout()
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
	    $signals = $this->helpers->signals;
		
    	return view('about',compact(['user','signals']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postSmtp(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}

        $req = $request->all();
        #dd($req);
        
        $validator = Validator::make($req, [
                             'ss' => 'required',
                             'sp' => 'required|numeric',
                             'su' => 'required',
                             'spp' => 'required',
                             'sa' => 'required|not_in:none',
                             'se' => 'required|not_in:no-enc',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
            $this->helpers->updateSmtpConfig($req);
	        session()->flash("update-smtp-status","ok");
			return redirect()->intended('smtp');
         }        
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getLeads()
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
		$signals = $this->helpers->signals;
		$lc = Leads::where('id','>','0')->count();
    	return view('leads',compact(['user','lc','signals']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getDeleteLeads()
    {
       $user = null;
		$cart = [];
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		Leads::where('id','>','0')->delete();
    	session()->flash("delete-leads-status","ok");
	  return redirect()->intended('leads');
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postLeads(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}

        $req = $request->all();
        #dd($req);
        
        $validator = Validator::make($req, [
                             'leads' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	$leads = $req["leads"]; 
             $as = $this->helpers->addLeads($leads);
	        session()->flash("add-leads-status",$as);
			return redirect()->intended('/');
         }        
    }


    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postSend(Request $request)
    {
		$user = null;
		
    	if(Auth::check())
		{
			$user = Auth::user();
		}

        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'sn' => 'required',
                             'sa' => 'required',
                             'subject' => 'required',
                             'message' => 'required'
                             
         ]);
         
         if($validator->fails())
         {         	
             $ret = json_encode(["status" => "error", "message" => "Validation failed."]);
             //dd($messages);
         }
         
         else
         {         	
             $ret = $this->helpers->bombNext($req); 
         }
         return $ret;		 
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }


}
