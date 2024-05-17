<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Models\Cholera;
use App\Models\Map;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $markers = Cholera::all();

        $initialMarkers = [];
        foreach ($markers as $marker) {
            $initialMarkers[] = [
                'position' => [
                    'lat' => $marker->lat,
                    'lng' => $marker->lng,
                ],
                'draggable' => true,
            ];
        }

        return view('map.index', compact('initialMarkers'));
    }

    /**
     * Show the form for creating a new resource.
     */

}
