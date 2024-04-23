<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Stevebauman\Location\Facades\Location;

class ComponentsController extends Controller
{
    public function locateIp(Request $request){
        $position = Location::get();
       
        return Inertia::render('Components/MyLocationInfo', [
            'location' => $position,
        ]);
    }
}
