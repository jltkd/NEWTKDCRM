<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Contact;
use App\Domain;
use App\Server;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::with('contact')->orderBy('client_name', 'asc')->paginate(15);
        return view('clients.index', compact('clients'));
    }

    public function show(Request $request, $id)
    {
        $client = Client::find($id);
        $contact = Contact::find($id);
        $domain = Domain::find($id);
        $server = Server::find($id);

        return view('clients.show', compact('client', 'contact', 'domain', 'server'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->user_id = Auth::id();
        $client->client_name = request('client_name');
        $client->client_status = request('client_status');
        $client->client_website = request('client_website');
        $client->client_address = request('client_address');
        $client->client_city = request('client_city');
        $client->client_state = request('client_state');
        $client->client_zip = request('client_zip');
        $client->client_phone = request('client_phone');
        $client->client_notes = request('client_notes');
        $client->save();


        return view('clients.index');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        Client::find($id)->update($request->all());
        return view('clients.show');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        Session::flash('flash_message', 'Client Successfully Deleted');
        return view('clients.index');
    }
}
