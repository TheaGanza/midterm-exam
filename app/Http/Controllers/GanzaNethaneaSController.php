<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class GanzaNethaneaSController extends Controller
{
    public function index()
    {
        // Retrieve all records from the table.
        $features = Features::all();

        // Pass the data to the view using the compact helper.
        return view('features.index')->with([
                    'features' => $features,
                   ]);
    }
}
