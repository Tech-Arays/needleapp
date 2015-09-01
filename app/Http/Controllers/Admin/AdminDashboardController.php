<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Initialise the dashboard screen after admin logs in 
     * @return [Response]
     * 
     */
    public function getDashboard(){
        return view('admin.admin-dashboard');
    }
}
