<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $categorie = new Categorie();
        return view('categories.create', compact('categorie'));
    }

    public function store()
    {
        $categories = Categorie::create($this->validateData());
        //return redirect('/categories/'.$categories->id);
        return redirect('/categories');
    }

    //Route Model Binding => \App\Customer $var
    public function show(Categorie $categorie)
    {
        return view('categories.show', compact('categorie'));
    }

    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    public function update(Categorie $categorie)
    {
        $categorie->update($this->validateData());    

        return redirect('/categories');
    }

    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect('/categories');
    }


    public function validateData()
    {
        return request()->validate([
			'id' => 'required|',

			'categorie' => 'required|max:255|',
		]);
 }

}
        