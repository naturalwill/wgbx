<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Netstatus;
use Carbon\Carbon;


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

    	$dt=Carbon::now();
    	$ns=Netstatus::where('created_at','>',$dt->subHours(12)->toDateTimeString())->first();
    	if(empty($ns)){
    		Netstatus::Create(['info'=>$raw]);
    	}
    	else {
    		$ns->info=$raw;
    		$ns->save();
    	}
    	return $raw;
    }
}
