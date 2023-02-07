<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel_packages;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->count();
        $travel = Travel_packages::paginate(3);
        return view('user.home.index', [
            'travel' => $travel,
            'users' => $user
        ]);
    }
}
