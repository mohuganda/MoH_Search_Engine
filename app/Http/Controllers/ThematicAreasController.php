<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;

class ThematicAreasController extends Controller
{
    
    protected $itemsRepo;
    protected $organizationsRepo;

    
    public function __construct(ItemsRepository $itemsRepo)
    {
        $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
    }

    public function index(Request $request){
      
        $data['areas'] = $this->itemsRepo->getAllThematicAreas($request);
        $data['term']     = $request->term;
        return view('cms.thematicareas.index')->with($data);
    }

    public function create(Request $request){
        
        return view('cms.thematicareas.create');
    }

    public function store(Request $request){

        $saved = $this->itemsRepo->saveThematicArea($request);
        
        $msg = (!$saved)?"Operation failed, try again":"Thematic Area saved succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect(url('/cms/thematicareas'))->with($alert);
    }

     public function destroy($id){
        
        $saved = $this->itemsRepo->deleteThematicArea($id);
        $msg   = (!$saved)?"Operation failed, try again":"Thematic Area deleted succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect( url('/cms/thematicareas') )->with($alert);
    }



}
