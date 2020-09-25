<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Storage;

class PostControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::all();
            $posts = Post::all();
            return view('listagemdenuncia.index', compact('posts', 'users'));
     }  


     public function listarindex(){

        $users = User::all();
        $posts = Post::all();
        return view('/adminhome', compact('posts', 'users'));





     }
    
    /*public function home()
    {
        $posts = POST::All();
        return view('home', compact(['posts']));
    }*/

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
        $path =  $request->file('arquivo')->store('img', 'public');
        $post = new POST();
        $post->users_id = auth()->id();
        $post->email = $request->input('email');
        $post->mensagem = $request->input('mensagem');
        $post->arquivo = $path;
        $post->save();
        return redirect('/');
    
    }
    public function download($id)
    {
        $posts = Post::find($id);
        if(isset($posts)){
            $path = Storage::disk('public')->getDriver()->getAdapter()->applyPathPrefix($posts->arquivo);
            return response()->download($path);

        }
        return redirect('/');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show()
    {
        $post = POST::all();
        return view('admin', ['Posts' => $post]);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (isset($post)){
            $arquivo = $post->arquivo;
            Storage::disk('public')->delete('arquivo');
            $post->delete();

        }
        return redirect('/');

    }
}
