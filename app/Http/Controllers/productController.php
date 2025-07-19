<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
           $products = product::all();
        return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("products.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            "product"=> "required",
             
        ]);

        product::create([
            "product"=>$request->product,
          
        ]);

        return redirect()->route("products.index")->with("success","Product Create successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

          $products = product::find($id);
        return view("products.show",compact("products"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

              $products =  product::find($id);
      return view("products.edit",compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

                 $request->validate([
            "product"=> "required",
         
        ]);

        $product = product::find($id);
        $product->product = $request->product;
       
        $product->save();

              return redirect()->route("products.index")->with("success","product Updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
           $product =  product::find($id);
       $product->delete();
          return redirect()->route("products.index")->with("success","product Deleted successfully.");
    }
}
