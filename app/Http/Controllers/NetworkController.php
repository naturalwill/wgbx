<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Netstatus;

class NetworkController extends Controller
{
    //
	
	public function index()
    {

    	if(preg_match('/MicroMessenger/', $_SERVER['HTTP_USER_AGENT'])||env('APP_DEBUG',false))
    	{    		
	    	$status=Netstatus::orderBy('id', 'desc')->limit(1)->first();
	    	//var_dump($status);exit;
	    	if(empty($status)){
	    		return view('about');
	    	}
	    	$info=json_decode($status->info);
	    	
	    	return view('networkstatus',['info'=>$info,
				'updated_at' => $status->updated_at,
	    	]);
    	}
        return view('about',['attention'=>1]);
    }
    
	public function store(Request $request)
    {
		$key=$request->input('api_key','');
		if(empty($key )|| env('BX_API_KEY','')!=$key){
    		return 'no access';
		}
		
    	$raw=file_get_contents('php://input');
    	Netstatus::updateOrCreate([
    			'created_at' =>time()-43200    			
    	], ['info'=>$raw]);
    	return $raw;
    }
}
