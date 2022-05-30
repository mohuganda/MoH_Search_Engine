<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;

class ItemsController extends Controller
{
    
    protected $itemsRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ItemsRepository $itemsRepo)
    {
       // $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
      
        $data['items'] = $this->itemsRepo->getAllItems($request);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        
        return view('cms.items.index')->with($data);
    }

    public function store(Request $request){

        $this->itemsRepo->save($request);
        return redirect( url('/cms/items') );
    }

}
