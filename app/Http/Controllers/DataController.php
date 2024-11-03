<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('parkings.index');
    }

    public function show($id)
    {
        $parking = Data::findOrFail($id);
        return view('parkings.show', compact('parking'));
    }
}
