<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel_packages;

class WelcomeController extends Controller
{
    public function index()
    {
        $travel = Travel_packages::paginate(3);
        return view('welcome.index', [
            'travel' => $travel
        ]);
    }

    public function pakettravel()
    {
        return view('welcome.pakettravel');
    }
}
