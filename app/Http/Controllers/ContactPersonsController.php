<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PersonsRepository;
use App\Repositories\OrganizationRepository;

class ContactPersonsController extends Controller
{
    
    protected $personsRepo,$orgRepo;

    
    public function __construct(PersonsRepository $personsRepo,OrganizationRepository $orgRepo)
    {
        $this->middleware('auth');
        $this->personsRepo = $personsRepo;
        $this->orgRepo = $orgRepo;
    }

    public function index(Request $request){
      
        $data['people'] = $this->personsRepo->getAll($request);
        $data['organizations'] = $this->orgRepo->getAll($request);
        
        return view('cms.persons.index')->with($data);
    }

    public function create(Request $request){
        
        return view('cms.perons.create');
    }

    public function store(Request $request){

         $saved = $this->personsRepo->savePerson($request);
         $msg  = (!$saved)?"Operation failed, try again":"Person updated succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect( url('/cms/persons') )->with($alert);
    }

     public function destroy($id){
        
        $saved = $this->personsRepo->deletePerson($id);

        $msg   = (!$saved)?"Operation failed, try again":"Person deleted succesfully";
       
        $alert_class = ($saved)?'info':'danger';
        $alert = ['alert-'.$alert_class=>$msg];

        return redirect( url('/cms/persons') )->with($alert);
    }



}
