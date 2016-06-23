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
        //
    	$status=Netstatus::whereRaw('id = (select max(id) from `netstatuses`)')->first();
    	//var_dump($status->info);exit;
    	$info=json_decode($status->info);
    	
    	return view('networkstatus',['info'=>$info,
			'created_at' => $status->created_at,
    	]);
        return var_export($status);
    }
    
	public function store(Request $request)
    {
		$key=$request->input('api_key','');
		if(empty($key )|| env('BX_API_KEY','')!=$key){
    		return 'no access';
		}
		
    	$raw=file_get_contents('php://input');
    	Netstatus::create(['info'=>$raw]);
    	return $raw;
    }
}
