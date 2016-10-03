<?php

namespace Coffee\Http\Controllers;

use Illuminate\Http\Request;

use Coffee\Http\Requests;

use Coffee\Semilla;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semillas = Semilla::All();
        return view('semilla.index', compact('semillas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semilla.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Semilla::create(['nombre' => $request['nombre']]);

        return redirect('/semilla')->with('message', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semilla = Semilla::find($id);
        return view('semilla.edit',['semilla'=>$semilla]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semilla = Semilla::find($id);
        $semilla->fill($request->all());
        $semilla->save();

        return redirect('/semilla')->with('message', 'edit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semilla::destroy($id);
        return redirect('/semilla')->with('message', 'delete');
    }
}
