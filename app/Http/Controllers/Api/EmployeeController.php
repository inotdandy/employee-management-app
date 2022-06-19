<?php

namespace App\Http\Controllers\Api;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function getCountries(){

        $countries = Country::all();

        return response()->json($countries);
    }

    public function getStates(Country $country){

        return response()->json($country->states);
    }

    public function getCities(State $state){
    
        return response()->json($state->cities);
    }
}
