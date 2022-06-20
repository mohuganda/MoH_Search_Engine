<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;

class ItemTypesController extends Controller
{
    
    protected $itemsRepo;
    protected $organizationsRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ItemsRepository $itemsRepo)
    {
        $this->middleware('auth');
        $this->itemsRepo = $itemsRepo;
    }

    public function index(Request $request){
      
        $data['types'] = $this->itemsRepo->getAllItemTypes($request);
        
        return view('cms.types.index')->with($data);
    }

    public function create(Request $request){
        return view('cms.types.create');
    }

    public function store(Request $request){

        $saved = $this->itemsRepo->saveType($request);

        $msg = (!$saved)?"Operation failed, try again":"Item Type saved succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect( url('/cms/types') )->with($alert);
    }

}
