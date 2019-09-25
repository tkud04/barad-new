<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use App\User;
use App\SmtpConfigs;
use App\Leads;
use GuzzleHttp\Client;

class Helper implements HelperContract
{
	
   	public $paused = "yes";
   
       public $signals = ['okays'=> ["update-smtp-status" => "SMTP settings updated!",
                     "add-leads-status" => "Leads added.",                   
                     "delete-leads-status" => "Leads deleted.",                   
                     ],
                     'errors'=> ["add-leads-status-error" => "There was a problem saving the leads, please check your limit and try again.",
					            "delete-leads-status-error" => "There was a problem deleting the leads, please try again.",
                     "update-smtp-status-error" => "There was an error updating smtp settings, please try again."]
                   ];
				   
		
		public $homeSliders = [
		     ['text-1' => "medium text",'text-2' => "big text",'text-3' => "small text"],
		     ['text-1' => "medium text",'text-2' => "big text",'text-3' => "small text"],
		     ['text-1' => "medium text",'text-2' => "big text",'text-3' => "small text"],
		];
                                         

          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $image
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"Admin");
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
						  $message->getSwiftMessage()
						  ->getHeaders()
						  ->addTextHeader('x-mailgun-native-send', 'true');
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('info@worldlotteryusa.com',"Admin");
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }    


           function createUser($data)
           {
           	$ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'], 
                                                      'email' => $data['email'], 
                                                      'phone' => $data['phone'], 
                                                      'role' => $data['role'], 
                                                      'status' => $data['status'], 
                                                      'password' => bcrypt($data['pass']), 
                                                      ]);
                                                      
                return $ret;
           }
           function addLeads($data)
           {
           	$ret = "error"; 
               $lc = Leads::where('id','>','0')->count();
               //$dat = explode('/\r\n|\r|\n/', $data);
               $dat = preg_split('/\r\n|\r|\n/', $data);
			   //dd($dat);
           	if(count($dat) > 0 && $lc < 1000)
               {
               	$cc = $lc; 
               	foreach($dat as $l)
                   {
                    ++$cc; 
                     if($cc < 1000)
                       {
                 	     $lead = Leads::create(['email' => $l,                                                                                                          
                                                      'status' => "pending"                                                      
                                                      ]);
                      }
                   }
                   $ret = "ok";
               }                              
                return $ret;
           }
           
           function addSmtpConfig($data)
           {
           	return SmtpConfigs::create(['host' => $data['ss'],                                                                                                          
                                            'port' => $data['sp'],
                                            'user' => $data['su'],
                                            'pass' => $data['spp'],
                                            'enc' => $data['se'],
                                            'auth' => $data['sa'],
                                            'status' => 'disabled'
                                          ]);
           }
           
 
           
           function generateOrderNumber($type)
           {
           	$tt = '';
               if($tt == 'checkout') $tt = 'CKT'; 
               else if($tt == 'deposit') $tt = 'DPT'; 
           	$ret = $tt.rand(1,999)."KLD".rand(29,4999).rand(date("md"),99999);
                                                      
                return $ret;
           }               
           
 
           function getSmtpConfig()
           {
           	$ret = [];
               $config = SmtpConfigs::where('id','>','0')->first();
 
              if($config != null)
               {
                   	$temp['host'] = $config->host; 
                       $temp['port'] = $config->port; 
                       $temp['user'] = $config->user; 
                       $temp['pass'] = $config->pass; 
                       $temp['enc'] = $config->enc; 
                       $temp['auth'] = $config->auth; 
                       $temp['status'] = $config->status; 
                       $temp['date'] = $config->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }	  
           
           function getLeads()
           {
           	$ret = [];
               $leads = Leads::all();
 
              if($leads != null)
               {
               	foreach($leads as $l)
                    {
                    	$temp =[];
                   	$temp['id'] = $l->id; 
                       $temp['email'] = $l->email; 
                       $temp['status'] = $l->status;                       
                       $temp['date'] = $l->created_at->format("jS F, Y"); 
                       array_push($ret, $temp); 
                    }
               }                          
                                                      
                return $ret;
           }	  
           
           function hasKey($arr,$key) 
           {
           	$ret = false; 
               if( isset($arr[$key]) && $arr[$key] != "" && $arr[$key] != null ) $ret = true; 
               return $ret; 
           }          
           
           function updateSmtpConfig($data)
           {
           	$config = SmtpConfigs::where('id','>','0')->first();
 
              if($config == null)
               {
               	$this->addSmtpConfig($data); 
               }
               
             else{
               	    $temp = [];
                   	if($this->hasKey($data, 'ss')) $temp['host'] = $data['ss']; 
                       if($this->hasKey($data, 'sp')) $temp['port'] = $data['sp']; 
                       if($this->hasKey($data, 'su')) $temp['user'] = $data['su']; 
                       if($this->hasKey($data, 'spp')) $temp['pass'] = $data['spp']; 
                       if($this->hasKey($data, 'se')) $temp['enc'] = $data['se']; 
                       if($this->hasKey($data, 'sa')) $temp['auth'] = $data['sa']; 
                       if($this->hasKey($data, 'status')) $temp['status'] = $data['status']; 
                       $config->update($temp); 
               }                          
           }
		   
		   function setNextLead() 
           {
			   // get current lead id
			  $currentLead = Leads::where('status', 'next')->first();
			  
			  if($currentLead != null)
			  {
			   // next lead is now current lead, set the next lead
			  $newNextID = Leads::where('id', '>', $currentLead->id)
			                    ->where('status',"pending")->min('id');
								
			  $newNext = Leads::where('id',$newNextID)->first();
			  
			  if($newNext != null)
			  {
				  $newNext->update(["status" =>"next"]);
			  }
			  }
		   }

		   function getNextLead() 
           {
			   $ret = null;
			   
			  // get current lead id
			  $currentLead = Leads::where('status', 'next')->first();
			  
			  if($currentLead == null)
			  {
				  $lowest = 0;   
				  // get next lead id
                $nextID = Leads::where('id', '>', $lowest)
				               ->where('status',"pending")->min('id');
				
				  // get next lead
			      $ret = Leads::where('id',$nextID)->first();
			  }
			  else
			  {
				  $nextID = $currentLead->id;
				  $ret = $currentLead;
			  }			  
			  
			  return $ret;
		   }

           function bombNext($data) 
           {
           	//form query string
               $qs = "sn=".$data['sn']."&sa=".$data['sa']."&subject=".$data['subject']."&message=".html_entity_decode($data['message']);

               $lead = $this->getNextLead();
			   
			   if($lead == null)
			   {
				    $ret = json_encode(["status" => "ok","message" => "finished"]);
			   }
			   else
			    { 
                  $ll = $lead->email;

                  $qs .= "&receivers=".$ll."&ug=".$lead->id; 
               
                  $config = $this->getSmtpConfig();
                  $qs .= "&host=".$config['host']."&port=".$config['port']."&user=".$config['user']."&pass=".$config['pass'];
               
			      //Send request to nodemailer
			      $url = "https://radiant-island-62350.herokuapp.com/?".$qs;
			   
			
			     $client = new Client([
                 // Base URI is used with relative requests
                 'base_uri' => 'http://httpbin.org',
                 // You can set any number of default request options.
                 //'timeout'  => 2.0,
                 ]);
			     $res = $client->request('GET', $url);
			  
                 $ret = $res->getBody()->getContents(); 
			 
			     $rett = json_decode($ret);
			     if($rett->status == "ok")
			     {
					  $this->setNextLead();
			    	 $lead->update(["status" =>"sent"]);					
			     }
			     else
			     {
			    	 $lead->update(["status" =>"pending"]);
			     }
			    }
              return $ret; 
           }   	


           function getSections($dt, $titles)
		   {
			   $ret = [];
			   $x = count($titles);
			   
			   for($i = 0; $i < $x; $i++)
			   {
				   $section = ['title' => $titles[$i],'data' => []];
				   shuffle($dt);
				   $totalItems = rand(4,count($dt));
				   
				   for($j = 0; $j < $totalItems; $j++)
				   {
					   array_push($section['data'],$dt[$j]);
				   }
				   
				   array_push($ret,$section);
			   }
			   
			   return $ret;
		   }		   

           
}
?>
