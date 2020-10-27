<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StadiumController extends Controller
{




    public function index()
    {
        return view('stadium.index', ['stadiums' => Stadium::latest()->get()]);
    }


    public function create()
    {
        return view('stadium.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],
            'capacity' => 'required',
            'body' => 'required'
        ]);

        $stadium = new Stadium();
        $stadium->name = $request->input('name');
        $stadium->capacity = $request->input('capacity');
        $stadium->body = $request->input('body');
        $stadium->user_id = auth()->user()->id;
        $stadium->save();

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
