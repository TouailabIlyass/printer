<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Checkout;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::all();

        return view('checkouts.index', compact('checkouts'));
    }

    public function create()
    {
        $checkout = new Checkout();
        return view('checkouts.create', compact('checkout'));
    }

    public function store()
    {
        $checkouts = Checkout::create($this->validateData());
        //return redirect('/checkouts/'.$checkouts->id);
        return redirect('/checkouts');
    }

    //Route Model Binding => \App\Customer $var
    public function show(Checkout $checkout)
    {
        return view('checkouts.show', compact('checkout'));
    }

    public function edit(Checkout $checkout)
    {
        return view('checkouts.edit', compact('checkout'));
    }

    public function update(Checkout $checkout)
    {
        $checkout->update($this->validateData());    

        return redirect('/checkouts');
    }

    public function destroy(Checkout $checkout)
    {
        $checkout->delete();

        return redirect('/checkouts');
    }


    public function validateData()
    {
        return request()->validate([
			'command_id' => 'required|',

			'product_id' => 'required|',

			'quantite' => 'required|',

			'total' => 'required|max:10|',
		]);
 }


   
}
        