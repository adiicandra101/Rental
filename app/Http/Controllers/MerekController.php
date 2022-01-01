<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merek = Merek::all();
        return view('merek.index', compact('merek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['nama_merek' => 'required',
            ]);

        $merek = new Merek;
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merek = Merek::findOrFail($id);
        return view('merek.show', compact('merek'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merek = Merek::findOrFail($id);
        return view('merek.edit', compact('merek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            ['nama_merek' => 'required',
            ]);

        $merek = Merek::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merek = Merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index');
    }
}
