<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    function search(Request $request){
    // if(isset($_GET[query])){
    //     echo 'get text';
    // }
    return view('service_page');
    }
}
