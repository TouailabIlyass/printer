<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();
        return view('products.create', compact('product'));
    }

    public function store()
    {
        $products = Product::create($this->validateData());
        //return redirect('/products/'.$products->id);
        return redirect('/products');
    }

    //Route Model Binding => \App\Customer $var
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $product->update($this->validateData());    

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }


    public function validateData()
    {
        return request()->validate([
			'id' => 'required|',

			'intitule' => 'required|max:100|',

			'description' => 'required|',

			'categorie_id' => 'required|',

			'prix' => 'required|',

			'size' => 'required|',

			'color' => 'required|max:20|',
		]);
 }

}
        