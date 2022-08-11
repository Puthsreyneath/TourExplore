<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Place;
use App\Models\Hotels;
use App\Models\Location;
use App\Models\Stop;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('admin.place.index')->with('places', $places);
    }

    public function create()
    {
        return view('admin.place.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = public_path('images/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        Place::create($data);
        return redirect('/admin.place')->with('message', 'Added Successfully');
    }

    public function edit($place_id)
    {
        $place = Place::find($place_id);
        return view('admin.place.edit')->with('places', $place);
    }

    public function update(Request $request, $place_id)
    {
       
        $place = Place::find($place_id);
        $data = $request->all();
       
        if ($image = $request->file('image')) {
            $destinationPath = public_path('images/');
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }else{
            unset($data['image']);
        }
        
            $place->update($data);
            return redirect('/admin.place')->with('message', 'Updated Successfully');
          

       
    }
    public function destroy($place_id)
    {
        Place::find($place_id)->delete();
        return redirect('/admin.place')->with('message', 'Deleted Successfully');
    }
    public function getplace(){
        $places = \App\Models\Place::with('location')->get();
        $locations = \App\Models\Location::with('places')->get();
        $transports = DB::select('select * from transport');

        
        return view('service_page',compact(
            'places','locations','transports'
        )
        );
    }
   
    public function getdetailplace(){
        $places = \App\Models\Place::with('location')->get();
        $locations = \App\Models\Location::with('places')->get();
        $transports = DB::select('select * from transport');

        
        return view('detail_page',compact(
            'places','locations','transports'
        )
        );
    }
    public function search(Request $request){
        $output="";
        $searching=DB::select('select * from places' )->where('name','Like','%'.$request->search.'%')->get();
        foreach($searching as $d){
            $output.= '<tr>'.$d->name.'</tr>';
        }
        echo $output;
    
    }
}
