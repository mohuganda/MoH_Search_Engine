<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SearchRepository;


class SearchController extends Controller
{


    protected $searchRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SearchRepository $searchRepo)
    {
       // $this->middleware('auth');
        $this->searchRepo = $searchRepo;
    }

    public function search(){
      
      $data['results'] = $this->searchRepo->getAllItems();
      $data['areas']   = $this->searchRepo->getAllThematicAreas();
       
      return view("search.results")->with($data);

    }


}
