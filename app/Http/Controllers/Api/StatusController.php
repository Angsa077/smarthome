<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lamp;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        // get Lamps
        $lamps = Lamp::all();

        // make variable array
        $lamp_status = [];

        // loop lamp and assign to variable
        foreach ($lamps as $lamp) {
            $lamp_status[$lamp->id] = $lamp->status;
        }

        // return response
        return response()->json($lamp_status);
    }
}
