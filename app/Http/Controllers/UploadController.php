<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class UploadController extends Controller
{
    public function index(){
        return view('upload');
    }

    public function uploadadvert(Request $request)
    {	
    	$this->validate($request,[
    			'advert_title' => 'required',
    			'description' => 'required',
    			'advert' => 'required'
    		],[
    			'advert_title.required' => ' The advert title is required.',
    			'description.required' => ' The description is required.',
    			'advert.unique' => ' Please attach an advert.'
    		]);

        Advert::create([
            'advert_title' => $request->input('advert_title'),
            'description' => $request->input('description'),
            'advert' => $request->file('advert')->getFilename(),
        ]);

        $file = $request->file('advert');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        
        // return Redirect::to('upload')->with('success', "Thank you, advert successfully uploaded.!");
        return redirect('/upload')->with('success', 'Advert Posted');
    } 
}
