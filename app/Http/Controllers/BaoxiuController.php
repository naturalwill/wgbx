<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaoxiuController extends Controller
{
    //
	
	public function index()
    {
        //
        if(!preg_match('/^MicroMessenger/', $_SERVER['HTTP_USER_AGENT']))
        {
        	return view('baoxiu');
        }
        return redirect()->action('HomeController@index');
    }
    
	public function store(Request $request)
    {
        //
    	$this->validate($request, [

    			'stunum'=>'required|digits:11',
    			'stuname'=>'required|max:32',
    			'phone'=>'required|digits:11',
    			'phone2'=>'digits:6',
    			'sushe'=>'required|min:2',
    			'fangjian'=>'required|digits:3',
    			'port'=>'required|regex:/^[A-D]$/|max:1',
    			'info'=>'required|min:2',
    	]);
    }
}
