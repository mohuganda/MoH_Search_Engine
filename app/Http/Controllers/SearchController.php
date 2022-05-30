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

    public function search(Request $request){
      
      $data['term']    = $request->term;

      $data['results'] = $this->searchRepo->getAllItems($request);
      $data['areas']   = $this->searchRepo->getAllThematicAreas();
      $data['logs']    = $this->searchRepo->getSearchLog();
       
      return view("search.results")->with($data);

    }

     public function getSuggestions(Request $request){
        return $this->searchRepo->getSearchSuggestions($request);
     }


}
