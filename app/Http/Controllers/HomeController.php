<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SearchRepository;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $data['results'] = $this->searchRepo->getAllItems();
        $data['areas'] = $this->searchRepo->getAllThematicAreas();
        
        return view('home')->with($data);
    }

    public function topsearches()
    {
        return view('home');
    }

}
