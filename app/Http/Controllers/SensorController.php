<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        return view('sensors.index');
    }

    public function create()
    {
        return view('sensors.create');
    }
    public function edit(Sensor $sensor)
    {
        return view('sensors.edit', compact('sensor'));
    }

    public function show($id)
    {
        $sensor = Sensor::findOrFail($id);
        return view('sensors.show', compact('sensor'));
    }
}
