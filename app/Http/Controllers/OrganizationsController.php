<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OrganizationRepository;

class OrganizationsController extends Controller
{
    
    protected $organizationRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(OrganizationRepository $organizationRepo)
    {
        $this->middleware('auth');
        $this->organizationRepo = $organizationRepo;
    }

    public function index(Request $request){
      
        $data['organizations'] = $this->organizationRepo->getAll($request);
        return view('cms.organizations.index')->with($data);
    }

    public function create(Request $request){
        return view('cms.organizations.create');
    }

    public function store(Request $request){

        $form_validation = ['organization_name'=>'required|min:5','description'=>'required|min:5'];
        $request->validate($form_validation);

        $this->organizationRepo->save($request);
        return redirect(url('/cms/organizations'));
    }

}
