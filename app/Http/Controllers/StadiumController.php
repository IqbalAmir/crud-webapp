<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StadiumController extends Controller
{



    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('stadium.index')->with('stadiums', $user->stadiums);
    }


    public function create()
    {
        return view('stadium.create');
    }


    public function store()
    {
        Stadium::create([

            'name' => request('name'),
            'capacity' => request('capacity'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect(route('stadium.index'));


    }



    public function show(Stadium $stadium)
    {

        return view('stadium.show', compact('stadium'));
    }



    public function edit(Stadium $stadium)
    {

        return view('stadium.edit', compact('stadium'));
    }



    public function update(Stadium $stadium)
    {
        $stadium->update($this->validateStadium());

        return redirect($stadium->path());

    }



    public function destroy(Stadium $stadium)
    {


        return redirect(route('stadium.index', $stadium->delete()));
    }




    protected function validateStadium()
    {
        return request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'capacity' => 'required',
            'body' => 'required',

        ]);

    }
}
