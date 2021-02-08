<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forge extends Controller
{
    public function pull_all()
    {
        return response()->file(resource_path('/js/jqhtm.json'));
    }
}
