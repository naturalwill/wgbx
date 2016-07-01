<?php

namespace App\Http\Controllers\Network;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\NetworkNews;

class NewsController extends Controller
{
    //
	
	public function index()
    {

	    	$info=NetworkNews::orderBy('id', 'desc')->limit(10)->get();
	    	//var_dump($status->info);exit;
	    	//$info=json_decode($status->info);
	    	
	    	return view('network.news',['info'=>$info]);
    }
    
}
