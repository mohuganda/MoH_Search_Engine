<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ItemsRepository;
use App\Mail\RequestAccess;
use Illuminate\Support\Facades\Mail;

class AccessController extends Controller
{
    
    protected $itemsRepo;
   
    
    public function __construct(ItemsRepository $itemsRepo)
    {
        $this->itemsRepo = $itemsRepo;
    }


    public function index($id){
        $data['item'] = $this->itemsRepo->getItem($id);
        return view('search.request_access')->with($data);
    }

    public function store(Request $request){

        $contact = get_item_contact($request->item_id);

        Mail::to($contact->email)->send(new RequestAccess($request));
        redirect( url('/') );
    }

}
