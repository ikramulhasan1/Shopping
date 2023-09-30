<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashBoard()
    {
        return view('backend.dashboard');
    }
}