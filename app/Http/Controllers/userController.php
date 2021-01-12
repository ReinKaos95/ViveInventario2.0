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
    public function index()
    {
            $users=User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles=Rol::all()->pluck('id', 'rol_tipo');
      return view('admin.users.create',  compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $users = new User;
       $users->name = $request->name;
       $users->surname = $request->surname;
       $users->email = $request->email;
       $users->password = bcrypt($request->password);
       if ($users->save()) {
        $users->assignRole($request->rol);
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
       $roles=Rol::all()->pluck('id', 'rol_tipo');

      return view('admin.users.edit', compact('users','roles'));
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
              $users=User::findOrFail($id);

       $users->name = $request->name;
       $users->surname = $request->surname;
       $users->email = $request->email;
       if ($users->password != null) {
       $users->password = $request->password;
       }
       $users->syncRoles($request->rol);
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
        $users->removeRole($users->roles->implode('name', ','));
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
