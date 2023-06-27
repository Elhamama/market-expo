<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    function index() {

        dd('hhhhhhhhhhhhhhhh');
        $rooms = rooms::all();
        return respons()->json(['room'=> $room]);
    }
}
