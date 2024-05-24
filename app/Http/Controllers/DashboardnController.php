<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardnController extends Controller
{

    public function index()
    {
        return view('indes');
    }
}
