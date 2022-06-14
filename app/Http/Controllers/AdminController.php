<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SearchRepository;
use App\Repositories\WidgetsRepository;

class AdminController extends Controller
{
    
    protected $searchRepo, $widgetsRepo;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SearchRepository $searchRepo, WidgetsRepository $widgetsRepo)
    {
        $this->middleware('auth');
        $this->searchRepo = $searchRepo;
        $this->widgetsRepo =$widgetsRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
      
        $data['term']    = $request->term;
        $data['results'] = $this->searchRepo->getAllItems($request);
        $data['areas'] = $this->searchRepo->getAllThematicAreas();
        $data['widgets'] = (object)$this->widgetsRepo->getWidgets();
        
        return view('cms.index')->with($data);
    }

    public function topsearches()
    {
        return view('home');
    }

}
