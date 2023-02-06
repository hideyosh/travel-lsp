<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel_packages;

class TravelController extends Controller
{
    public function index()
    {
        $travel = Travel_packages::paginate(6);
        return view('user.paket_travel.index', [
            'travel' => $travel
        ]);
    }

    public function show(Travel_packages $travelpaket)
    {
        return view('user.paket_travel.view', [
            'travel' => $travelpaket
        ]);
    }
}
