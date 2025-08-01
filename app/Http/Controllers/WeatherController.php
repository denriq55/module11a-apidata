<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    /*
public function index() {
     $path = storage_path('app/weather.json');

    if (!file_exists($path)) {
        dd('weather.json not found at: ' . $path);
    }

    $json = file_get_contents($path);

    $weatherData = json_decode($json, true);

    if ($weatherData === null) {
        dd('JSON decode failed, error: ' . json_last_error_msg());
    }

    return view('weather.index', ['weather' => $weatherData]);
    */
    public function index() {
        $json = Storage::get('weather.json');
        $weatherData = json_decode($json, true);
        return view('weather.index', ['weather' => $weatherData]);
    }
    
    
}

