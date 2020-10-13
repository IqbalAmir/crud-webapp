<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stadium.index', [
            'stadiums' => Stadium::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stadium.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
        $stadium->save();

        return redirect('/stadium')->with('success', 'Stadium Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stadium $stadium
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stadium = Stadium::findOrFail($id);
        return view('stadium.show', ['stadium' => $stadium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stadium $stadium
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stadium = Stadium::findOrFail($id);
        return view('stadium.edit', ['stadium' => $stadium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Stadium $stadium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3', 'max:255'],
            'capacity' => 'required',
            'body' => 'required'
        ]);

        $stadium = Stadium::findOrFail($id);
        $stadium->name = $request->input('name');
        $stadium->capacity = $request->input('capacity');
        $stadium->body = $request->input('body');
        $stadium->save();

        return redirect('/stadium/' . $stadium->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stadium $stadium
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stadium = Stadium::findOrFail($id);
        $stadium->delete();

        return redirect('/stadium')->with('success', 'Stadium Deleted');
    }
}
