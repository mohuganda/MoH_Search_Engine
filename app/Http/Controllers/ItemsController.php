<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;
use App\Repositories\OrganizationRepository;

class ItemsController extends Controller
{
    
    protected $itemsRepo;
    protected $organizationsRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ItemsRepository $itemsRepo, OrganizationRepository $organizationsRepo)
    {
        $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
        $this->organizationsRepo = $organizationsRepo;
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

    public function create(Request $request){
      
        $data['items'] = $this->itemsRepo->getAllItems($request);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        $data['organizations'] = $this->organizationsRepo->getAll();
        $data['types'] = $this->itemsRepo->getAllItemTypes();
        
        return view('cms.items.create')->with($data);
    }

    public function store(Request $request){

        $this->itemsRepo->saveItem($request);
        return redirect( url('/cms/items') );
    }

}
