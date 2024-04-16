<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ComponentsController extends Controller
{
    public function locateIp(Request $request){
        $my_ip = $request->ip();
        return Inertia::render('Components/MyIp', [
            'ip' => $my_ip,
        ]);
    }
}
