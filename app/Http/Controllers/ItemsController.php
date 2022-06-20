<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;
use App\Repositories\OrganizationRepository;
use App\Repositories\PersonsRepository;
use App\Repositories\AuthorityRepository;
use App\Repositories\ToolsRepository;
use App\Repositories\DevEntitiesRepository;

class ItemsController extends Controller
{
    
    protected $itemsRepo,$organizationsRepo,$personsRepo,$authorityRepo,$toolsRepo,$devEntitiesRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ItemsRepository $itemsRepo,
        OrganizationRepository $organizationsRepo,
        PersonsRepository $personsRepo,
        AuthorityRepository $authorityRepo,
        ToolsRepository $toolsRepo,
        DevEntitiesRepository $devEntitiesRepo
    )
    {
        $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
        $this->organizationsRepo = $organizationsRepo;
        $this->personsRepo = $personsRepo;
        $this->authorityRepo = $authorityRepo;
        $this->toolsRepo = $toolsRepo;
        $this->devEntitiesRepo = $devEntitiesRepo;
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
        $data['contacts']    = $this->personsRepo->getAll($request);
        $data['authorities'] = $this->authorityRepo->getAll($request);
        $data['uitools']     = $this->toolsRepo->getAll($request);
        $data['entities']    = $this->devEntitiesRepo->getAll($request);
        
        return view('cms.items.create')->with($data);
    }

    

    public function store(Request $request){

        $request->validate(['url'=>'unique:items,url_link']);

        $saved = $this->itemsRepo->saveItem($request);

        $msg = (!$saved)?"Operation failed, try again":"Item saved succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect(url('/cms/items'))->with($alert);
    }

    public function show($id){

        $data['item'] = $this->itemsRepo->getItem($id);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        $data['organizations'] = $this->organizationsRepo->getAll();
        $data['types'] = $this->itemsRepo->getAllItemTypes();
        $data['contacts'] = $this->personsRepo->getAll();
        $data['authorities'] = $this->authorityRepo->getAll();
        $data['uitools']     = $this->toolsRepo->getAll();
        $data['entities']    = $this->devEntitiesRepo->getAll();
        
        return view('cms.items.edit')->with($data);
    }

    
    public function update(Request $request){

        $saved = $this->itemsRepo->saveItem($request,$request->id);

        $msg = (!$saved)?"Operation failed, try again":"Item updated succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];
        
        return redirect(url('/cms/items'))->with($alert);
    }

}
