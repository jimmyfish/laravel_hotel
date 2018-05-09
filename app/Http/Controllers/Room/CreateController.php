<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $room = new Room;

            
        }

        return view('room.create');
    }
}
