<?php

namespace App\Http\Controllers\Network;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\NetworkNews;

class AddNewsController extends Controller
{
    //
	
	public function index()
    {

	    	return view('network.addnews');
    }
    
	public function store(Request $request)
    {
    	//
    	$this->validate($request, [
    	
    			'subject'=>'required',
    			'playtype'=>'required|max:32',
    			'password'=>'required|regex:/^bixY6LdnJHqBujRVDURw$/',
    			'msg'=>'required|min:2',
    	]);
    	NetworkNews::create($request->all());
        return redirect()->action('Network\NewsController@index');
    }
}
