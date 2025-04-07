<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('../client/client', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $client = new Client;

        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cnpj = $request->cnpj;
        $client->phone = $request->phone;
        $client->email = $request->email;

        $client->save();

        return redirect('/client');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        // return view('clients', [
        //     'client' => Client::findOrFail($id)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);

        return view('client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);

        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->cnpj = $request->cnpj;
        $client->phone = $request->phone;
        $client->email = $request->email;

        $client->save();

        return redirect()->route('client')->with('sucesso', 'Cliente alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $client = Client::find($request->idClient);
        $client->delete();
        return redirect()->route('client')->with('sucesso', 'Cliente removido com sucesso!');
    }
}
