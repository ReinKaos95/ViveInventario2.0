<?php

namespace App\Http\Controllers;
use App\User;
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
       $users = new User;
       $users->name = $request->name;
       $users->surname = $request->surname;
       $users->email = $request->email;
       $users->password = bcrypt($request->password);
       if ($users->save()) {
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
              $users=User::findOrFail($id);

       $users->name = $request->name;
       $users->surname = $request->surname;
       $users->email = $request->email;
       if ($users->password != null) {
       $users->password = $request->password;
       }

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
