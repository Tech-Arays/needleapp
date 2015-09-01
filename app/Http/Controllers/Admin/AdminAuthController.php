<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;

class AdminAuthController extends Controller
{

    /**
     * rendering a view for admin to login to the system
     * @return response
     * 
     */
    public function getAdminLogin(){
        return view('admin.admin-login');
    }

    /**
     * function used to validate admin input fields
     * @param [data] [formdata to validate]
     * @return [boolean] [whether validated or not]
     * 
     */
    protected function validateAdminLoginForm($data){
        
        return Validator::make($data,[
        
            'email'=>'required|email',
            'password'=>'required'
        ]);
    }

    /**
     * handling the inputs of admin login form
     * @param  Request $request [used to access the form inputs]
     * @return [type]           [response]
     */
    public function postAdminLogin(Request $request){
        
        $validate = $this->validateAdminLoginForm($request->all());

        /*if validator fails show him the errors*/
        if($validate->fails()){
            return Redirect()->back()->withErrors($validate->errors())
            ->withInput($request->only('email', 'remember'));
        }

        /*if login success then send him to the dashboard*/
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember') )){

            return Redirect('/admin/dashboard');
        }

        /*if login credentials are not right show him the errors*/
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
        ]);
    }

    /**
     * to log admin out from system
     * @return [response]
     * 
     */
    public function getAdminLogout(){
        Auth::logout();
        return Redirect::to('admin/login');
    }
}
