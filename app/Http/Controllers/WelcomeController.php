<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel_packages;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->count();
        $travel = Travel_packages::paginate(3);
        return view('welcome.index', [
            'travel' => $travel,
            'users' => $user
        ]);
    }

    public function pakettravel()
    {
        $travel = Travel_packages::paginate(9);
        return view('welcome.pakettravel',[
            'travel' => $travel
        ]);
    }
}
