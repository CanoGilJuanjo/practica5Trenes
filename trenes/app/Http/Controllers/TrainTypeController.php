<?php

namespace App\Http\Controllers;

use App\Models\TrainType;
use Illuminate\Http\Request;
use App\Models\Train;
use DB;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TrainType::all();
        return view("tipostrenes/index",["tipos"=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipostrenes/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipos = new TrainType;
        $tipos -> type = $request -> input("type");
        $tipos -> save();
        return redirect("/tipostrenes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipos = TrainType::find($id);
        return view("tipostrenes/show",["tipos"=>$tipos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipos = TrainType::find($id);
        return view("tipostrenes/edit",["tipos"=>$tipos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipos = TrainType::find($id);
        $tipos -> type = $request -> input("type");
        $tipos -> save();
        return redirect("/tipostrenes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("train_types")->where("id","=",$id)->delete();
        return redirect("/tipostrenes");
    }
}
