<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function sensor()
    {
        return view('sensor');
    }

    public function prosesData(Request $request)
    {
        $dataSensor = $request->all();
        return view('hasil', compact('dataSensor'));
    }
}
