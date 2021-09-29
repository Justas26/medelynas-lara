<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Validator;

class PlantController extends Controller
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
        $plants = Plant::all();
        return view('plant.index', ['plants' => $plants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'min:3', 'max:32'],

            ],
            [
                'name.required' => 'augalo vardas privalomas',
                'name.min' => 'per trumpas augalo vardas',
                'name.max' => 'per ilgas augalo vardas',


            ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        $plant = new Plant;
        $plant->name = $request->name;
        $is_yearling = 'off';
        if (isset($request->$is_yearling)) {
            $is_yearling = 'on';
        }
        $plant->is_yearling = $request->is_yearling;
        $plant->save();
        return redirect()->route('plant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        return view('plant.edit', ['plant' => $plant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'min:3', 'max:32'],

            ],
            [
                'name.required' => 'augalo vardas privalomas',
                'name.min' => 'per trumpas augalo vardas',
                'name.max' => 'per ilgas augalo vardas',


            ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        $plant->name = $request->name;
        $plant->is_yearling = $request->is_yearling;
        $plant->save();
        return redirect()->route('plant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        if ($plant->plantUniquePlant()->count()) {
            return 'Trinti negalima, nes turi augalų';
        }
        $plant->delete();
        return redirect()->route('plant.index');
    }
}
