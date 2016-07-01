<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Bxinfo;

class BaoxiuController extends Controller
{
    //
	
	public function index()
    {
        //
        if(preg_match('/MicroMessenger/', $_SERVER['HTTP_USER_AGENT'])||env('APP_DEBUG',false))
        {
        	return view('baoxiu');
        }
        return view('about',['attention'=>1]);
    }
    
	public function querynews(Request $request)
    {
		$key=$request->input('api_key','');
		if(empty($key )|| env('BX_API_KEY','')!=$key){
    		return 'no access';
		}
    	$time= date('Y-m-d H:i:s');
        $query=Bxinfo::where('status',  0)
        			->where('created_at','<',$time)
        			->get();
        
        if($request->input('update',false))
        {
        	Bxinfo::where('created_at','<',$time)
        			->where('status', 0)
        			->update(['status' => 1]);;
        }
        return json_encode($query);
    }
	public function store(Request $request)
    {
        //
    	$this->validate($request, [

    			'stunum'=>'required|digits:11',
    			'stuname'=>'required|max:32',
    			'phone'=>'required|digits:11',
    			'phone2'=>'digits:6',
    			'sushe'=>'required|regex:/^\D{2}/',
    			'fangjian'=>'required|digits:3',
    			'port'=>'required|regex:/^[A-D]$/|max:1',
    			'info'=>'required|min:2',
    	]);
    	Bxinfo::create($request->all());
    	return view('bxresult');
    }
}
