<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // $certificateNumber = $request->input('certificate-number');
        // $name = $request->input('name');

        // $certificates = Certificate::query();

        // if($certificateNumber){
        //     $certificates->where('certificate-number', $certificateNumber);
        // }

        // if($name){
        //     $certificates->where('name', 'like', "%".$name.'%');
        // }

        // $results = $certificates->get();

        // return view('search.results', ['results' => $results]);
    }
}
