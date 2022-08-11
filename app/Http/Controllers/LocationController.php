<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::all();
        return view('admin.location.index')->with('locations', $locations);
    }

    public function create(){
        return view('admin.location.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'province' => 'required|unique:locations|max:255',
            'name_code' => 'required|max:255',
        ]);

        Location::create($data);
        return redirect('/admin.location')->with('message', 'Added Successfully');
    }

    public function edit($location_id){
        $location = Location::find($location_id);
        return view('admin.location.edit')->with('locations', $location);
    }

    public function update(Request $request, $location_id){
        $data = $request->validate([
            'province' => 'required|max:255',
            'name_code' => 'required|max:255',
        ]);

        $location = Location::find($location_id);
        $location->update($data);
        return redirect('/admin.location')->with('message', 'Updated Successfully');
    }

    public function destroy($location_id){
        Location::find($location_id)->delete();
        return redirect('/admin.location')->with('message', 'Deleted Successfully');
    }
}
