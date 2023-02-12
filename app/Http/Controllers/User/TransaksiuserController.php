<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Metode_pembayaran;
use App\Models\Travel_packages;
use App\Models\Transaction;

class TransaksiuserController extends Controller
{
    public function create($id)
    {
        $pembayaran = Metode_pembayaran::get();
        $travelpaket = Travel_packages::findOrFail($id);

        return view('user.transaksi.create',[
            'travel' => $travelpaket,
            'pembayaran' => $pembayaran
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'travel_packages_id' => ['required'],
            'total' => ['required'],
            'visa' => ['required'],
            'pembayrans_id' => ['required']
        ]);

        $validate['users_id'] =auth()->user()->id;
        Transaction::create($validate);
        return to_route('home.index');
    }
}
