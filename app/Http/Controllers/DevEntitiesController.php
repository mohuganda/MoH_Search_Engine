<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DevEntitiesRepository;

class DevEntitiesController extends Controller
{

    protected $devEntityRepo;


    public function __construct(DevEntitiesRepository $devEntityRepo)
    {
        $this->middleware('auth');
        $this->devEntityRepo = $devEntityRepo;
    }

    public function index(Request $request)
    {

        $data['entities'] = $this->devEntityRepo->getAll($request);
        return view('cms.entities.index')->with($data);
    }

    public function store(Request $request)
    {

        $saved = $this->devEntityRepo->save($request);

        $msg = (!$saved) ? "Operation failed, try again" : "Entity saved succesfully";

        $alert_class = ($saved) ? 'info' : 'danger';
        $alert = ['alert-' . $alert_class => $msg];

        return redirect(url('/cms/entities'))->with($alert);
    }

    public function destroy($id)
    {

        $saved = $this->devEntityRepo->delete($id);

        $msg = (!$saved) ? "Operation failed, try again" : "Entity deleted succesfully";
        $alert_class = ($saved) ? 'info' : 'danger';
        $alert = ['alert-' . $alert_class => $msg];

        return redirect(url('/cms/entities'))->with($alert);
    }
}