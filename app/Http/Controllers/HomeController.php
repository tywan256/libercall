<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
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
        return view('home');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }      


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function credituser(Request $request)
    {   
        $user = User::where('mobile',$request->input('mobile')); 
        $user->update([
            'credit' => $request->input('credit')
        ]);

        return Redirect::to('/home')->with('success', "Thank you, your account has been credited");
    }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function requestcode(Request $request)
    // {
    //     return User::create([
    //         'gender' => $request->input('gender'),
    //         'dateofbirth' => $request->input('dateofbirth'),
    //         'country' => $request->input('country'),
    //         'mobile' => $request->input('mobile'),
    //     ]);
    // }  


    // *
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
     
    // protected function updateuser(Request $request)
    // {   
    //     $user = User::where('mobile',$request->input('mobile')); 
    //     $user->update([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //         'invitationcode' => $request->input('invitationcode'),
    //     ]);
    // }
}
