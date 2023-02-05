<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_packages;

class WelcomeController extends Controller
{
    public function index()
    {
        $travel = travel_packages::paginate(3);
        return view('welcome.index', [
            'travel' => $travel
        ]);
    }

    public function pakettravel()
    {
        return view('welcome.pakettravel');
    }
}
