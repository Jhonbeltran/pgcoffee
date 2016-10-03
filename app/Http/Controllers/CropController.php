<?php

namespace Coffee\Http\Controllers;

use Illuminate\Http\Request;

use Coffee\Http\Requests;

use Coffee\Cultivo;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cultivos = Cultivo::All();
        return view('cultivo.index', compact('cultivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cultivo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cultivo::create([
            'direccion' => $request['direccion'],
            'responsable' => $request['responsable'],
            'semilla_id' => $request['semilla_id']
            ]);

        return redirect('/cultivo')->with('message', 'store');
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
        $cultivo = Cultivo::find($id);
        return view('cultivo.edit',['cultivo'=>$cultivo]);
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
        $cultivo = Cultivo::find($id);
        $cultivo->fill($request->all());
        $cultivo->save();

        return redirect('/cultivo')->with('message', 'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cultivo::destroy($id);
        return redirect('/cultivo')->with('message', 'delete');
    }
}
