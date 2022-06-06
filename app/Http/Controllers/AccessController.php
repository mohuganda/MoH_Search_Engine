<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;

class AccessController extends Controller
{
    
    protected $itemsRepo;
   
    
    public function __construct(ItemsRepository $itemsRepo)
    {
        $this->itemsRepo = $itemsRepo;
    }



    public function create(Request $request){
        
        return view('search.request_access');
    }

}
