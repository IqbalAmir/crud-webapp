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
        return view('stadium.index', ['stadiums' => Stadium::latest()->get()]);
    }

    public function create()
    {
        return view('stadium.create');
    }

    public function store(Request $request)
    {
        $request->user()->stadiums()->create($this->validateStadium());
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

    public function search()
    {
        $search_text = $_GET['query'];
        $stadiums = Stadium::where('name','LIKE','%'.$search_text.'%')->get();

        return view('stadium.index', compact('stadiums'));
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
