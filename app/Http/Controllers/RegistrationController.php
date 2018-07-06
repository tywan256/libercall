<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }  

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function requestcode(Request $request)
    {	
    	$this->validate($request,[
    			'gender' => 'required',
    			'dateofbirth' => 'required',
    			'mobile' => 'required|numeric|unique:users',
    			'country' => 'required'
    		],[
    			'gender.required' => ' The gender field is required.',
    			'mobile.required' => ' The mobile field is required.',
    			'mobile.unique' => ' The mobile number already exists.',
    			'dateofbirth.required' => ' The dateofbirth field is required.',
    			'country.required' => ' The country field is required.'
    		]);

        User::create([
            'gender' => $request->input('gender'),
            'dateofbirth' => $request->input('dateofbirth'),
            'invitationcode' => md5($request->input('mobile')),
            'country' => $request->input('country'),
            'mobile' => $request->input('mobile'),
        ]);

        return Redirect::to('welcome')->with('success', "Thank you, Invitation successfully sent.!"."  ".md5($request->input('mobile')));
    }  


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function updateuser(Request $request)
    {   

    	$this->validate($request,[
    			'name' => 'required|min:5|max:35',
    			'email' => 'required|email|unique:users',
    			'mobile' => 'required|numeric|exists:users',
    			'invitationcode' => 'required|exists:users',
    			'password' => 'required|min:3|max:20',
    			'confirm_password' => 'required|min:3|max:20|same:password'
    		],[
    			'name.required' => ' The name field is required.',
    			'mobile.required' => ' The mobile field is required.',
                'mobile.exists' => ' The mobile does not exist.',
    			'email.required' => ' The email field is required.',
    			'invitationcode.required' => ' The invitationcode field is required.',
    			'invitationcode.exists' => ' This code is wrong.',
    			'password.required' => ' The password field is required.',
    			'confirm_password.required' => ' The confirm password field is required.',
    			'confirm_password.same' => ' The passwords dont match.'

    		]);

        $user = User::where('mobile',$request->input('mobile')); 
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return Redirect::to('register')->with('success', "Thank you, Registration Successfull");
    }
}
