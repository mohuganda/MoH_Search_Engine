<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AuthorityRepository;

class AuthoritiesController extends Controller
{
    
    protected $authRepo;

    
    public function __construct(AuthorityRepository $authRepo)
    {
        $this->middleware('auth');
        $this->authRepo = $authRepo;
    }

    public function index(Request $request){
      
        $data['authorities'] = $this->authRepo->getAll($request);
        
        return view('cms.authority.index')->with($data);
    }

    public function store(Request $request){

        $this->authRepo->save($request);
        return redirect( url('/cms/authorities') );
    }

     public function destroy($id){
        $this->authRepo->delete($id);
        return redirect( url('/cms/authorities') );
    }



}
