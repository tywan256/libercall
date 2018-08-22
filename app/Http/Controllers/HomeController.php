<?php

namespace App\Http\Controllers;
use App\User;
use App\Advert;
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


    public function viewadverts(){

        $adverts = Advert::all();
        $json = json_encode($adverts);

        return view('/home',compact('json'));

    }

}
