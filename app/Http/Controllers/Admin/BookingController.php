<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $room = Room::all();

        return view('customer.booking', [
            'rooms' => $room,
        ]);
    }
}
