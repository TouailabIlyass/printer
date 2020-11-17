<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Command;

class CommandController extends Controller
{
    public function index()
    {
        $commands = Command::all();

        return view('commands.index', compact('commands'));
    }

    public function create()
    {
        $command = new Command();
        return view('commands.create', compact('command'));
    }

    public function store()
    {
        $commands = Command::create($this->validateData());
        //return redirect('/commands/'.$commands->id);
        return redirect('/commands');
    }

    //Route Model Binding => \App\Customer $var
    public function show(Command $command)
    {
        return view('commands.show', compact('command'));
    }

    public function edit(Command $command)
    {
        return view('commands.edit', compact('command'));
    }

    public function update(Command $command)
    {
        $command->update($this->validateData());    

        return redirect('/commands');
    }

    public function destroy(Command $command)
    {
        $command->delete();

        return redirect('/commands');
    }


    public function validateData()
    {
        return request()->validate([
			'id' => 'required|',

			'email' => 'required|max:60|',

			'phone' => 'required|max:20|',

			'firstname' => 'required|max:30|',

			'lastname' => 'required|max:30|',

			'area' => 'required|max:100|',

			'address' => 'required|max:255|',

			'postalcode' => 'required|max:20|',

			'house' => 'required|max:20|',

			'country' => 'required|max:30|',

			'type_payment' => 'required|',

			'mail_paypal' => 'required|max:60|',

			'total' => 'required|max:10|',
		]);
 }


   
}
        