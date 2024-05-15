<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class SearchController extends Controller
{
    public function search(Request $request)
    {
         $certificateNumber = $request->input('certificate_number');
         $certificateType = $request->input('certificate_type');
         $certificates = Certificate::query();
         if($certificateType || $certificateNumber){
             $certificates->where('soHieuVBCC', $certificateNumber)
                           ->where('certificate_type', $certificateType);
         }
         $results = $certificates->get();

        return view('search.results', ['results' => $results]);
    }
}
