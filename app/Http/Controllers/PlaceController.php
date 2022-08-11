<?php

namespace App\Http\Controllers;
use App\Models\Location;
use DB;
use App\Models\Transport;
use Illuminate\Http\Request;
use App\Models\places;

class PlaceController extends Controller
{
    public function getplace(){
        $places = \App\Models\places::with('location')->get();
        $locations = \App\Models\Location::with('places')->get();
        $transports = DB::select('select * from transport');

        
        return view('service_page',compact(
            'places','locations','transports'
        )
        );
    }
   
    public function getdetailplace(){
        $places = \App\Models\places::with('location')->get();
        $locations = \App\Models\Location::with('places')->get();
        $transports = DB::select('select * from transport');

        
        return view('detail_page',compact(
            'places','locations','transports'
        )
        );
    }
}
