<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Models\Map;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => -17.4097,
                    'lng' => 31.0426,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.5728,
                    'lng' => 31.1126,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3474,
                    'lng' => 30.2035,
                ],
                'draggable' => false,
            ],
            [
                'position' => [
                    'lat' => -18.9137,
                    'lng' => 32.6897,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.8252,
                    'lng' => 31.0335,
                ],
                'draggable' => false,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
            [
                'position' => [
                    'lat' => -17.3019,
                    'lng' => 31.3306,
                ],
                'draggable' => true,
            ],
        ];

        return view('map.index', compact('initialMarkers'));
    }

    /**
     * Show the form for creating a new resource.
     */

}
