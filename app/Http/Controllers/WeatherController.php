<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function weatherToday($zone)
    {
        \Log::info($zone);
        $weather = '';
        switch ($zone) {
            case 'Hanoi':
                $weather = 'Rainy';
                break;
            case 'Hochiminh':
                $weather = 'Sunny';
                break;
            default:
                $weather = 'Nang to vch';
                break;
        }

        return response()->json(['weather' => $weather]);
    }

    public function all()
    {
        return response()->json(['weathers' => [
            [
                'location' => 'Hue',
                'weather' => 'Rainy',
            ],
            [
                'location' => 'Saigon',
                'weather' => 'Sunny',
            ],
        ]]);
    }

    public function storeWeather(Request $request)
    {
        \Log::info($request->location);
        \Log::info($request->weatherToday);
    }
}
