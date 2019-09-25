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

class PracticeController extends Controller {

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
		$data = [
		                ['id' => "264", 'text' => "Beautiful Rose Blue Flower", 'image' => "https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "1232", 'text' => "Unknown But Beautiful Flower", 'image' => "https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "3454", 'text' => "Marquerite Daisy", 'image' => "https://images.pexels.com/photos/36764/marguerite-daisy-beautiful-beauty.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "21", 'text' => "Purple Lical Blosso Flower", 'image' => "https://images.pexels.com/photos/36753/flower-purple-lical-blosso.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "363", 'text' => "Amazing Sunflower", 'image' => "https://images.pexels.com/photos/39019/flower-sunflower-sky-blue-39019.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
						['id' => "462", 'text' => "Blue Rose Flower Delight", 'image' => "https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "2312", 'text' => "Pexels Lillith Flower", 'image' => "https://images.pexels.com/photos/736230/pexels-photo-736230.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
						['id' => "213", 'text' => "Purple Blosso Flower", 'image' => "https://images.pexels.com/photos/36753/flower-purple-lical-blosso.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "646", 'text' => "Sunflower Delight", 'image' => "https://images.pexels.com/photos/39019/flower-sunflower-sky-blue-39019.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
						['id' => "4539", 'text' => "Beautiful Daisy", 'image' => "https://images.pexels.com/photos/36764/marguerite-daisy-beautiful-beauty.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "8637", 'text' => "Purple Lical Lover", 'image' => "https://images.pexels.com/photos/36753/flower-purple-lical-blosso.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
		                ['id' => "1212", 'text' => "Herald Sunflower", 'image' => "https://images.pexels.com/photos/39019/flower-sunflower-sky-blue-39019.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"],
						
                ];
				
		$tt = ['Top Flowers','Latest Arrivals','Best Sellers'];
		
		 $sections = $this->helpers->getSections($data,$tt);
		
		return json_encode($sections);
    }



}
