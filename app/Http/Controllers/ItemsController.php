<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;
use App\Repositories\OrganizationRepository;
use App\Repositories\PersonsRepository;

class ItemsController extends Controller
{
    
    protected $itemsRepo;
    protected $organizationsRepo;
    protected $personsRepo;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ItemsRepository $itemsRepo, OrganizationRepository $organizationsRepo, PersonsRepository $personsRepo)
    {
        $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
        $this->organizationsRepo = $organizationsRepo;
        $this->personsRepo = $personsRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
      
        $data['items']    = $this->itemsRepo->getAllItems($request);
        $data['areas']    = $this->itemsRepo->getAllThematicAreas();
        
        return view('cms.items.index')->with($data);
    }

    public function create(Request $request){
      
        $data['items'] = $this->itemsRepo->getAllItems($request);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        $data['organizations'] = $this->organizationsRepo->getAll($request);
        $data['types'] = $this->itemsRepo->getAllItemTypes();
        $data['contacts'] = $this->personsRepo->getAll($request);
        
        return view('cms.items.create')->with($data);
    }

    public function store(Request $request){

        $request->validate(['url'=>'unique:items,url_link']);

        $this->itemsRepo->saveItem($request);
        return redirect( url('/cms/items') );
    }

    public function show($id){

        $data['item'] = $this->itemsRepo->getItem($id);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        $data['organizations'] = $this->organizationsRepo->getAll();
        $data['types'] = $this->itemsRepo->getAllItemTypes();
        $data['contacts'] = $this->personsRepo->getAll();
        
        return view('cms.items.edit')->with($data);
    }

    
    public function update(Request $request){

        $this->itemsRepo->saveItem($request,$request->id);
        return redirect( url('/cms/items') );
    }

}
