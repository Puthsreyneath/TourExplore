<?php

namespace App\Http\Controllers;
use App\Models\personal_infos;
use App\Models\Hotels;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Transport;
use App\Models\Stop;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    public function create(){

        return view('booking');
    }

    function store(Request $req){
     
        $fname = $req->fname;
        $lname = $req->lname;
        $email = $req->email;
        $tel = $req->tel;
        $address = $req->address;
        
        $b = new \App\Models\personal_infos;
        $b->fname = $fname;
        $b->lname = $lname;
        $b->email = $email;
        $b->tel = $tel;
        $b->address = $address;
        $b->save();
    
    }
    public function gethotel(){
        $hotels = \App\Models\Hotels::with('location')->get();
        $locations = \App\Models\Location::with('hotels')->get();
        
        return view('booking',compact(
            'hotels','locations'
        )
        );
    }
    public function transportation(Request $request){
        $stops = \App\Models\Stop::with('transport')->get();
       $transports = \App\Models\Transport::with('stops')->get();
        $data['transport']=DB::table('transport')->get();
        $locations = \App\Models\Location::with('hotels')->get();

        // return view('hoteldata',compact(
        //     'stops','transports','data'
        // )
        // );
        return view('transport',$data);
    }
    public function getstop(Request $request){
         $cid=$request->post('cid');
         $stop=DB::table('stop')->where('transport_id',$cid)->get();
         $html='<option value="">Select stop</option>';
         foreach($stop as $list){
            $html.='<option value ="'.$list->id.'">'.$list->name.'</option>';
         }
         echo $html;
    }
}
