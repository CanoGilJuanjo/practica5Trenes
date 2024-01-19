<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;
use DB;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TicketType::all();
        return view("tipostickets/index",["tipos"=>$tipos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipostickets/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipos = new TicketType;
        $tipos -> type = $request -> input("type");
        $tipos -> save();
        return redirect("/tipostickets");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipos = TicketType::find($id);
        return view("tipostickets/show",["tipos"=>$tipos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipos = TicketType::find($id);
        return view("tipostickets/edit",["tipos"=>$tipos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipos = TicketType::find($id);
        $tipos -> type = $request -> input("type");
        $tipos -> save();
        return redirect("/tipostickets");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("ticket_types")->where("id","=",$id)->delete();
        return redirect("/tipostickets");
    }
}
