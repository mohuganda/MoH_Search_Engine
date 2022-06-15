<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DevEntitiesRepository;

class DevEntitiesController extends Controller
{
    
    protected $devEntityRepo;

    
    public function __construct(DevEntitiesRepository $devEntityRepo)
    {
        $this->middleware('auth');
        $this->devEntityRepo = $devEntityRepo;
    }

    public function index(Request $request){
      
        $data['entities'] = $this->devEntityRepo->getAll($request);
        return view('cms.entities.index')->with($data);
    }

    public function store(Request $request){

        $this->devEntityRepo->save($request);
        return redirect( url('/cms/entities') );
    }

     public function destroy($id){
        $this->devEntityRepo->delete($id);
        return redirect( url('/cms/entities') );
    }



}
