<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;
use App\Repositories\OrganizationRepository;
use App\Repositories\PersonsRepository;
use App\Repositories\AuthorityRepository;
use App\Repositories\ToolsRepository;
use App\Repositories\DevEntitiesRepository;

class PublicItemController extends Controller
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
        $this->itemsRepo = $itemsRepo;
        $this->organizationsRepo = $organizationsRepo;
        $this->personsRepo = $personsRepo;
        $this->authorityRepo = $authorityRepo;
        $this->toolsRepo = $toolsRepo;
        $this->devEntitiesRepo = $devEntitiesRepo;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['items'] = $this->itemsRepo->getAllItems($request);
        $data['areas'] = $this->itemsRepo->getAllThematicAreas();
        $data['organizations'] = $this->organizationsRepo->getAll($request);
        $data['types'] = $this->itemsRepo->getAllItemTypes();
        $data['contacts']    = $this->personsRepo->getAll($request);
        $data['authorities'] = $this->authorityRepo->getAll($request);
        $data['uitools']     = $this->toolsRepo->getAll($request);
        $data['entities']    = $this->devEntitiesRepo->getAll($request);
        return view('search/submit_item')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
