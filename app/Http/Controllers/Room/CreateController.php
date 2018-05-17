<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HotelSetting;
use App\Room;

class CreateController extends Controller
{
    public function index(Request $request)
    {
        $setting = HotelSetting::all()->first();

        if ($request->isMethod('post')) {
            $room = new Room;

            $room->identifier = $request->identifier;
            $room->type = $request->type;
            $room->bed_count = $request->bed_count;
            $room->breakfast = $request->breakfast;
            $room->floor = $request->floor;
            $room->price = $request->price;

            $room->save();

            $request->session()->flash('room_success', 'Room successfully created.');
        }

        return view('room.create', [
            'setting' => json_decode($setting->data),
        ]);
    }
}
