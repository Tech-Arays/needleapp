<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminClientsController extends Controller
{
    /**
     * show all clients
     * @return [Response]
     * 
     */
    public function getClients(){
        
        return view('admin.admin-clients');
    }

    /**
     * To render a form to add the client in system
     * @return [response]
     * 
     */
    public function getAddClient(){
    	
    	return view('admin.admin-client-add');
    }

    /**
     * to handle the form values from the front end and save client info in DB
     * @return [response]
     * 
     */
    public function postAddClient(Request $request){
    	
    	echo '<pre>';
    	print_r($request->all());
    	die('<hr>these are all form inputs above');
    }
}
