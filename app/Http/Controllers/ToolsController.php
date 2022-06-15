<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ToolsRepository;

class ToolsController extends Controller
{
    
    protected $toolsRepo;

    
    public function __construct(ToolsRepository $toolsRepo)
    {
        $this->middleware('auth');
        $this->toolsRepo = $toolsRepo;
    }

    public function index(Request $request){
      
        $data['tools'] = $this->toolsRepo->getAll($request);
        return view('cms.tools.index')->with($data);
    }

    public function store(Request $request){

        $this->toolsRepo->save($request);
        return redirect( url('/cms/tools') );
    }

     public function destroy($id){
        $this->toolsRepo->delete($id);
        return redirect( url('/cms/tools') );
    }



}
