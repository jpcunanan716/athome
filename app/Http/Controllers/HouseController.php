<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function home(){
        return view('index');
    }

    public function listing(){
        return view('createlisting');
    }

    public function save(Request $request){
        $data = $request->validate([
            'houseName' => 'required',
            'houseNumberStreet'=> 'required',
            'province' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'zipCode' => 'required',
            'squareMeters' => 'required',
            'floors' => 'required',
            'floorImages' => 'required'|'nullable',
            'rooms' => 'required',
            'roomImages' => 'required'|'nullable',
            'bathrooms' => 'required',
            'bathroomImages' => 'required'|'nullable',
            'backyard' => 'required',
            'backyardImages' => 'required'|'nullable',
            'basement' => 'required',
            'basementImages' => 'required'|'nullable',
            'attic' => 'required',
            'atticImages' => 'required'|'nullable',
            'price' => 'required',
            'furnished' => 'required',
            'furnishedImages' => 'required'|'nullable',
            'description' => 'required',
        ]);

        $newListing = House::create($data);
        
        return redirect(route('home'));
    }
}
