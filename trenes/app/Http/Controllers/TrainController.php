<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use DB;
class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trenes = Train::all();
        return view("trenes/index",["trenes"=>$trenes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Train $train)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Train $train)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Train $train)
    {
        //
    }
}
