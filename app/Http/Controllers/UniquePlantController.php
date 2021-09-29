<?php

namespace App\Http\Controllers;

use App\Models\UniquePlant;
use Illuminate\Http\Request;
use App\Models\Plant;
use Illuminate\Validation\Rules\Unique;

class UniquePlantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uniquePlant = UniquePlant::all();
        return view('uniquePlant.index', ['uniquePlants' => $uniquePlant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plant = Plant::all();
        return view('uniquePlant.create', ['plants' => $plant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uniquePlant = new UniquePlant();
        $uniquePlant->age = $request->age;
        $uniquePlant->height = $request->height;
        $uniquePlant->health = $request->health;
        $uniquePlant->plant_id = $request->plant_id;
        $uniquePlant->save();
        return redirect()->route('uniquePlant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UniquePlant  $uniquePlant
     * @return \Illuminate\Http\Response
     */
    public function show(UniquePlant $uniquePlant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UniquePlant  $uniquePlant
     * @return \Illuminate\Http\Response
     */
    public function edit(UniquePlant $uniquePlant)
    {
        $plant = Plant::all();
        return view('uniquePlant.edit', ['uniquePlant' => $uniquePlant, 'plant' => $plant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UniquePlant  $uniquePlant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UniquePlant $uniquePlant)
    {
        $uniquePlant->age = $request->age;
        $uniquePlant->height = $request->height;
        $uniquePlant->health = $request->health;
        $uniquePlant->plant_id = $request->plant_id;
        $uniquePlant->save();
        return redirect()->route('uniquePlant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UniquePlant  $uniquePlant
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniquePlant $uniquePlant)
    {
        $uniquePlant->delete();
        return redirect()->route('uniquePlant.index');
    }
}
