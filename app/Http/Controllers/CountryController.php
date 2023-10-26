<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index(){

    }

    public function showAll() {
        $countries = DB::table('countries')->paginate(16);
        return view('countries.country', compact('countries'));
    }

    public function getCountryCode($id){
        $idCheck = DB::table('countries')->where('name', 'LIKE', $id.'%')->exists();
        $getCountry = Countries::where('name', 'LIKE', $id.'%')->orWhere('name', 'LIKE', strtoupper($id).'%')->paginate(16);
        if($idCheck){
            return view('countries.countriesSearch', compact('getCountry'));
        }
        return redirect()->back();
    }
}
