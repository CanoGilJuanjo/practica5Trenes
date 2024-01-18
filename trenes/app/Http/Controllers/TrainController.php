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
        $trenes = new Train;
        $trenes -> name = $request -> input("nombre");
        $trenes -> passengers = $request -> input("pasajero");
        $trenes -> year = $request -> input("ano");
        $trenes -> train_type_id = $request -> input("tipo");
        $trenes -> save();
        return redirect("/trenes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trenes = Train::find($id);
        return view("trenes/show",["trenes"=>$trenes]);
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
    public function update(Request $request, string $id)
    {
        $trenes = Train::find($id);
        $trenes -> name = $request -> input("nombre");
        $trenes -> passengers = $request -> input("pasajeros");
        $trenes -> year = $request -> input("ano");
        $trenes -> train_type_id = $request -> input("tipo");
        $trenes -> save();
        return redirect("/trenes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("trains")->where("id","=",$id)->delete();
        return redirect("/trenes");
    }
}
