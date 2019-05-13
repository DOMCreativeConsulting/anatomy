<?php

namespace App\Controllers;
use App\Model\User;
use App\Model\Ticket;

class TicketsController
{
    public function index()
    {
        User::check();

        return view("abrir-ticket");
    }

    public function abrir()
    {
        Ticket::abrir();
    }

    public function meusTickets()
    {
        $tickets = Ticket::buscar();

        return view("meus-tickets",compact('tickets'));
    }

    public function pendentes()
    {
        $tickets = Ticket::buscar();

        return view("tickets-pendentes",compact('tickets'));
    }

    public function resolvidos()
    {
        $tickets = Ticket::buscar();

        return view("tickets-resolvidos",compact('tickets'));
    }

    public function resolverTicket()
    {
        $tickets = Ticket::buscar();
        $escolhido = $_POST['ticket'];

        return view("resolver-ticket",compact('tickets','escolhido'));
    }

    public function resolver()
    {
        Ticket::resolver();
    }
}