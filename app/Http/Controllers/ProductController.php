<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('Products.index', ['products' => $products]);
    }

    public function create(){
        return view('Products.create');
    }

    public function store(Request $request)
    {
      $data =  $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $newProduct = product::create($data);
        // Product::create($request->all());

        return redirect()->route('Products.index');
    }



    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit(Product $product)
    {
        // dd($product);
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data =  $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $product->update($data);

        return redirect(route('Products.index'))->with('success', 'Product updated successfully.');

    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('Products.index')->with('success', 'Product deleted successfully.');
    }
}


