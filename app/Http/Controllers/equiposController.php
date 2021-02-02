<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\TipoEquipo;
use App\Departamentos;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //$equipment=Equipos::all();
        $equipment['equixte']=Equipos::JOIN("tipo_equipos","tipo_equipos.teq_id","=","equipos.eq_tequid")
                                    -> JOIN("departamentos","departamentos.dep_id","=","equipos.departamentos_dep_id")
                                    -> SELECT("id", "eq_modelo", "eq_marca" ,"eq_serial" , "eq_tequid","eq_nbiennacional", "eq_estatus", "equipos.created_at", "equipos.updated_at", "teq_nombre", "dep_nombre")
                                    -> orderBy('equipos.id', 'asc')
                                    -> paginate(8);           
            return view('admin.equipment.index', $equipment );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
      $tipoEquipo=TipoEquipo::all()->pluck('teq_nombre', 'teq_id');
      $departamentos=Departamentos::all()->pluck('dep_nombre', 'dep_id');
       return view('admin.equipment.create', compact('tipoEquipo', 'departamentos'));
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
       $equipment->eq_tequid = $request->eq_tequid;
       $equipment->eq_nbiennacional = $request->eq_nbiennacional;
       $equipment->departamentos_dep_id = $request->departamentos_dep_id;
       $equipment->eq_tequid = $request->eq_tequid;
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
        $tipoEquipo=TipoEquipo::all()->pluck('teq_nombre', 'teq_id');
        $departamentos=Departamentos::all()->pluck('dep_nombre', 'dep_id');
        return view('admin.equipment.edit', compact('equipment', 'tipoEquipo', 'departamentos'));

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
       $equipment->eq_tequid = $request->eq_tequid;
       $equipment->eq_nbiennacional = $request->eq_nbiennacional;
       $equipment->departamentos_dep_id = $request->departamentos_dep_id;
       $equipment->eq_tequid = $request->eq_tequid;
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