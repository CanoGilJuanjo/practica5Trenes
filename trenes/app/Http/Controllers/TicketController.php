<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Train;
use App\Models\TicketType;
use Illuminate\Http\Request;
use DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view("tickets/index",["tickets"=>$tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketType = TicketType::all();
        $trenes = Train::all();
        return view("tickets/create",["ticketType"=>$ticketType,"trenes"=>$trenes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket -> date = $request -> input("date");
        $ticket -> price = $request -> input("price");
        $ticket -> train_id = $request -> input("train_id");
        $ticket -> ticket_type_id = $request -> input("ticket_type_id");
        $ticket -> save();
        return redirect("/tickets");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tickets = Ticket::find($id);
        return view("tickets/show",["tickets"=>$tickets]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tickets = Ticket::find($id);
        $ticketType = TicketType::all();
        $trenes = Train::all();
        return view("tickets/edit",["tickets"=>$tickets,"ticketType"=>$ticketType,"trenes"=>$trenes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        $ticket -> date = $request -> input("date");
        $ticket -> price = $request -> input("price");
        $ticket -> train_id = $request -> input("train_id");
        $ticket -> ticket_type_id = $request -> input("ticket_type_id");
        $ticket -> save();
        return redirect("/tickets");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("tickets")->where("id","=",$id)->delete();
        return redirect("/tickets");
    }
}
