<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Supplier::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Clients = new Supplier([
            "FullName" => $request->input('FullName'),
            "phoneNumber" => $request->input('phoneNumber'),
            "email" => $request->input('email'),
            "Localisation" => $request->input('Localisation'),
            "fonction" => $request->input('fonction'),
            "otherContact" => $request->input('otherContact'),
            "rating" => $request->input('rating'),
        ]);
        $Clients->save();
        return response()->json([
            'message'=>'Item added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Supplier = Supplier::findOrFail($id);
        return response()->json([
            'Supplier' => $Supplier
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Supplier = Supplier::findOrFail($id);
        return response()->json([
            'Supplier' => $Supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Supplier::findOrFail($id);

        $client->FullName = $request->input('FullName');
        $client->phoneNumber = $request->input('phoneNumber');
        $client->email = $request->input('email');
        $client->Localisation = $request->input('Localisation');
        $client->fonction = $request->input('fonction');
        $client->otherContact = $request->input('otherContact');
        $client->rating = $request->input('rating');

        $client->update();
        $client->save();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Supplier = Supplier::findOrFail($id);

        $Supplier->delete();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

}
