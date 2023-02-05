<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\travel_packages;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->count();
        $travel = travel_packages::paginate(3);
        return view('user.home.index', [
            'travel' => $travel,
            'user' => $user
        ]);
    }
}
