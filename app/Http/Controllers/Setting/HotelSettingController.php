<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HotelSetting;

class HotelSettingController extends Controller
{
    public function index(Request $request)
    {
        $hotelSetting = HotelSetting::all()->first();

        if ($request->isMethod('post')) {
            $type = preg_split('/,/', $request->type);

            $length = count($type);

            if ($type[$length - 1] == "") {
                unset($type[$length - 1]);
            }

            $hotelSetting->data = json_encode([
                'type' => $type,
                'floor' => $request->floor,
            ]);

            $hotelSetting->save();
        }

        return view('setting.form', [
            'settings' => json_decode($hotelSetting->data),
        ]);
    }
}
