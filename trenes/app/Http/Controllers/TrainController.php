<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\TrainType;
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
        $trenes = TrainType::all();
        return view("trenes/create",["trenes"=>$trenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trenes = new Train;
        $trenes -> name = $request -> input("name");
        $trenes -> passengers = $request -> input("passengers");
        $trenes -> year = $request -> input("year");
        $trenes -> train_type_id = $request -> input("typeTrain");
        $trenes -> save();
        return redirect("/trenes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trenes = Train::find($id);
        
        return view("trenes/show",["trenes"=>$trenes,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trenes = Train::find($id);
        $tiposTrenes = TrainType::all();
        return view("trenes/edit",["trenes"=>$trenes,"tiposTrenes"=>$tiposTrenes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trenes = Train::find($id);
        $trenes -> name = $request -> input("name");
        $trenes -> passengers = $request -> input("passengers");
        $trenes -> year = $request -> input("year");
        $trenes -> train_type_id = $request -> input("typeTrain");
        $trenes -> save();
        return redirect("/trenes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("tickets")->where("train_id","=",$id)->delete();
        DB::table("trains")->where("id","=",$id)->delete();
        return redirect("/trenes");
    }
}
