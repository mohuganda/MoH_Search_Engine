<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    private function search($searchTerms=FALSE){
    
    return view('search/results');

    }
}
