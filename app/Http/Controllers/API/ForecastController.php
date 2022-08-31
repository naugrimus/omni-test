<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ForecastController {

    public function indexAction() {
        // read the filter from the url
        // fetch data from the database
        return Response()->json($data);
    }
}