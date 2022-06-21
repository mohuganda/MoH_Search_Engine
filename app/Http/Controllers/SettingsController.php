<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ToolsRepository;

class SettingsController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        return view('cms.settings.index');
    }

    public function store(Request $request){

        if($request->file('image')){
            
            $file= $request->file('image');
            $filename= 'kla.jpg'; //date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
        }

        return redirect( url('/cms/settings') );
    }



}
