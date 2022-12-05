<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function dynamic(Request $request)
    {
        $model = $request->input('model');
        $model = 'App\\Models\\' . $model;
        $data['records'] = $model::get();
        $keys = array_keys($data['records'][0]->getAttributes());

        if ($model == 'App\\Models\\item') {
            $data['records'] = $model::with('thematic_area',)->get();

            $keys = array_keys($data['records'][0]->getAttributes());

            $data['columns'] = array_filter($keys, function ($column) {
                return in_array($column, ['title', 'url_link']);
            });

            
        }

        return view('reports.dynamic')->with($data);
    }
}
