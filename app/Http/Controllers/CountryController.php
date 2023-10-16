<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){

    }

    public function showAll() {
        $countries = Countries::all();

        return view('countries.country', compact('countries'));
    }

    public function getCountryCode($id){
        $getCountry = Countries::where('name', 'LIKE', $id.'%')->orWhere('name', 'LIKE', strtoupper($id).'%')->get();

        return view('countries.countriesSearch', compact('getCountry'));
    }
}
