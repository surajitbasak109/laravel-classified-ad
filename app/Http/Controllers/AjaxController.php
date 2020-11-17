<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function state(Request $request)
    {
        $attributes = $request->validate(['country' => ['required', 'string']]);
        $state = State::where('country_id', $attributes['country'])->get(['id', 'name']);

        return response()->json($state);
    }

    public function city(Request $request) {
        $attributes = $request->validate(['state' => ['required', 'string']]);
        $city = City::where('state_id', $attributes['state'])->get(['id', 'name']);

        return response()->json($city);
    }
}
