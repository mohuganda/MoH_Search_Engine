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
        
        return view('cms.thematicareas.index')->with($data);
    }

    public function create(Request $request){
        
        return view('cms.thematicareas.create');
    }

    public function store(Request $request){

        $this->itemsRepo->saveThematicArea($request);
        return redirect( url('/cms/thematicareas') );
    }

     public function destroy($id){
        $this->itemsRepo->deleteThematicArea($id);
        return redirect( url('/cms/thematicareas') );
    }



}
