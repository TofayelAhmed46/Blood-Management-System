<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TryController extends Controller
{
    public function try(){
        return view('components.backend.layouts.try');
    }
}
