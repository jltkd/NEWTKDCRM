<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Contact;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('contact')->orderBy('client_name', 'asc')->paginate(15);
        return view('home', compact('clients'));
    }
}
