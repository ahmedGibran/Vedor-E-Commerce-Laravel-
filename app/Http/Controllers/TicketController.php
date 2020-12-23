<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::with(['customer','order'])->paginate(env('paginate_code'));
        return view('admin.ticket.ticket',['ticket'=>$tickets]);
    }
}
