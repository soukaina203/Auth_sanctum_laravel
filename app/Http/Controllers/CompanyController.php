<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Company::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $companies=new Company([
            "Name" => $request->input('Name'),
            "email" => $request->input('email'),
            "phoneNumber" => $request->input('phoneNumber'),
            "address" => $request->input('address'),
            "secteur" => $request->input('secteur'),
            "descriptionDActivite" => $request->input("descriptionDActivite"),
            "otherContact" => $request->input('otherContact'),
            "nameOfCEO" => $request->input('nameOfCEO')

        ]);
        $companies->save();
        return response()->json([
            'message'=>'Item added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $companies = Company::findOrFail($id);
        return response()->json([
            'Company' => $companies
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $companies = Company::findOrFail($id);
        return response()->json([
            'Company' => $companies
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);


        $company->Name = $request->input('Name');
        $company->phoneNumber = $request->input('phoneNumber');
        $company->email = $request->input('email');
        $company->address = $request->input('address');
        $company->secteur = $request->input('secteur');
        $company->otherContact = $request->input('otherContact');
        $company->descriptionDActivite = $request->input("descriptionDActivite");
        $company->nameOfCEO = $request->input('nameOfCEO');

        $company->update();
        $company->save();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Company = Company::findOrFail($id);

        $Company->delete();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }
}

