<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
    $clients=Client::all();
    return response()->json($clients);
    }




    public function store(Request $request)
    {
        $Clients = new Client([
            "FullName" => $request->input('FullName'),
            "phoneNumber" => $request->input('phoneNumber'),
            "email" => $request->input('email'),
            "otherContact" => $request->input('otherContact'),
            "fidalite" => $request->input('fidalite'),
        ]);
        $Clients->save();
        return response()->json([
            'message'=>'Item added successfully'
        ]);
    }
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return response()->json([
            'client' => $client
        ]);
    }
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return response()->json([
            'client' => $client
        ]);
    }
    public function update(Request $request, string $id)
    {
        $client = Client::findOrFail($id);

        $client->FullName = $request->input('FullName');
        $client->phoneNumber = $request->input('phoneNumber');
        $client->email = $request->input('email');
        $client->otherContact = $request->input('otherContact');
        $client->fidalite = $request->input('fidalite');

        $client->update();
        $client->save();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
