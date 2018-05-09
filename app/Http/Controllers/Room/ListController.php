<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Room;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        $room = Room::all();

        return dd($room);
    }
}
