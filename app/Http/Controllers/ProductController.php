<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return response()->json($data);
    }



    public function store(Request $request)
    {





        $Products = new Product([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "price" => $request->input('price'),

        ]);

        $Products->save();

        return response()->json([
            'message'=>'Item added successfully'
        ]);
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'product' => $product
        ]);
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'product' => $product
        ]);

    }

    public function update(Request $request, $id)
    {

        $Product = Product::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->description = $request->input('description');
        $Product->price = $request->input('price');

        $Product->update();
        $Product->save();
        return response()->json([
            'message' => 'Item updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $Product = Product::findOrFail($id);

        $Product->delete();


    }

}
