<?php

namespace App\Http\Controllers;
use App\Equipos;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipment=Equipos::all();
        return view('admin.equipment.index', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('admin.equipment.create', compact('equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipment = new Equipos;
       $equipment->eq_modelo = $request->eq_modelo;
       $equipment->eq_marca = $request->eq_marca;
       $equipment->eq_serial = $request->eq_serial;
       $equipment->eq_nbiennacional = $request->eq_nbiennacional;
        $equipment->eq_estatus = $request->eq_estatus;
           if ($equipment->save()) {
       return redirect('/admin/equipment');
       } 
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
        $equipment=Equipos::findOrFail($id);
        return view('admin.equipment.edit', compact('equipment'));

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
        $equipment=Equipos::findOrFail($id);
          $equipment->eq_modelo = $request->eq_modelo;
       $equipment->eq_marca = $request->eq_marca;
       $equipment->eq_serial = $request->eq_serial;
       $equipment->eq_nbiennacional = $request->eq_nbiennacional;
        $equipment->eq_estatus = $request->eq_estatus;
           if ($equipment->save()) {
       return redirect('/admin/equipment');
       } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Equipos::destroy($id);
      return back();
    }
}
