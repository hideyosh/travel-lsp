<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Travel_packages;

class TravelpackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel = Travel_packages::latest()->paginate(5);
        return view('admin.travel_paket.index', [
            'title' => 'Paket Travel Table',
            'travels' => $travel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.travel_paket.create', [
            'title' => 'Create Travel',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Travel_packages $travelpackage)
    {
        $request->validate([
            'title' => ['required'],
            'about' => ['required'],
            'location' => ['required'],
            'price' => ['required'],
            'departure_date' => ['required'],
            'duration' => ['required']
        ]);

        $store = $request->all();
        $travelpackage->create($store);

        return redirect()->route('travelpackages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Travel_packages $travelpackage)
    {
        return view('admin.travel_paket.view',[
            'title' => 'Detail Travel Package',
            'travel' => $travelpackage,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel_packages $travelpackage)
    {
        return view('admin.travel_paket.edit',[
            'travel' => $travelpackage,
            'title' => 'Edit Paket Travel'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel_packages $travelpackage)
    {
        $request->validate([
            'title' => ['required'],
            'about' => ['required'],
            'location' => ['required'],
            'price' => ['required'],
            'departure_date' => ['required'],
            'duration' => ['required']
        ]);

        $update = $request->all();
        $travelpackage->update($update);

        return to_route('travelpackages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel_packages $travelpackage)
    {
        $travelpackage->delete();

        return redirect()->route('travelpackages.index');
    }
}
