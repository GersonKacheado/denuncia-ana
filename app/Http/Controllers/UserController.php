<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users;
    public $posts;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::All();
        return view('user.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   
    public function show($id)
    {
        if(!$user = User::find($id))

        return redirect()->back();

            return view('user.show', ['user' => $user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

     //   return redirect()->back();
        return view('user.edit', array('user'=> $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, User $users)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->idade = $request->idade;
        $users->contato = $request->contato;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

    
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
      //  return redirect()->back();                   
        $user->delete();
                return redirect()->route('user.index');
    }
}
