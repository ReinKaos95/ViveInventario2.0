<?php

namespace App\Http\Controllers;
use App\User;
use App\Rol;
use Illuminate\Http\Request;

class userController extends Controller
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
       /*$users=User::all();
       return view('admin.users.index', compact('users'));*/
    $users['users']=User::JOIN("rols","rols.id","=","users.us_rol_id")
                                    -> SELECT("users.id", "name", "surname", "cedula", "user", "email", "photos", "estatus", "password", "users.created_at", "users.updated_at", "us_rol_id", "rol_tipo")
                                    -> orderBy('users.id', 'asc')
                                    -> paginate(8);           
            return view('admin.users.index', $users );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$roles=Rol::all()->pluck('id', 'rol_tipo');
      return view('admin.users.create',  compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  {
    
      if ($request->hasFile('photos')) {
        $archivo=$request->file('photos');
       $nombre= time().$archivo->getClientOriginalName();
       $archivo->move(public_path().'/images/', $nombre);

      }

       $users = new User;
       $users->name = $request->name;
       $users->surname = $request->surname;
      $users->cedula = $request->cedula;
       $users->user = $request->user;
       $users->email = $request->email;
          $users->estatus = $request->estatus;
             $users->photos = $nombre;
       $users->password = bcrypt($request->password);
       if ($users->save()) {
        //$users->assignRole($request->rol);
       return redirect('/admin/users');
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
       $users=User::findOrFail($id);
       //$roles=Rol::all()->pluck('id', 'rol_tipo');

      return view('admin.users.edit', compact('users'));
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
         if ($request->hasFile('photos')) {
        $archivo=$request->file('photos');
       $nombre= time().$archivo->getClientOriginalName();
       $archivo->move(public_path().'/images/', $nombre);

      }
              $users=User::findOrFail($id);

       $users->name = $request->name;
       $users->surname = $request->surname;
      $users->cedula = $request->cedula;
       $users->user = $request->user;
       $users->email = $request->email;
          $users->estatus = $request->estatus;
       if ($users->password != null) {
       $users->password = $request->password;
       }
       //$users->syncRoles($request->rol);
       $users->save();
       
       return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$users->removeRole($users->roles->implode('name', ','));
         $users=User::findOrFail($id);
             if ($users->delete()) {
       return redirect('/admin/users');
   }
       else{
        return response()->json([
            'mensaje'=>'error al eliminar usuario'
        ]);
       }
    }
}
