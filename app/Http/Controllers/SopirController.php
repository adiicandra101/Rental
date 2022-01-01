<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sopir = Sopir::all();
        return view('sopir.index', compact('sopir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sopir.create');
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
            ['nama_sopir' => 'required',
                'status_sopir' => 'required',
            ]);

        $sopir = new Merek;
        $sopir->nama_sopir = $request->nama_sopir;
        $sopir->status_sopir = $request->status_sopir;

        $sopir->save();
        return redirect()->route('sopir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('sopir.show', compact('sopir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('sopir.edit', compact('sopir'));
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
            ['nama_sopir' => 'required',
                'status_sopir' => 'required',
            ]);

        $sopir = Sopir::findOrFail($id);
        $sopir->nama_merek = $request->nama_merek;
        $sopir->save();
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
