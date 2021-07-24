<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    public function index(Request $request) {
        $series = [
            '1.Nome' => 'Gundam',
            '2.Nome' => 'Gundam Zeta',
            '3.Nome' => 'Gundam Iron-Blooded Oprhans'
        ];

        return view('series.index', compact('series'));
    }

}
