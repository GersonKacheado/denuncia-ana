<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;

class PostControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 /*   public function index()
        {
            $users = User::all();
            $posts = Post::all();
            return view('denuncia.index', compact('posts', 'users'));
        }  */
     public function index()
        {
            $users = User::all();
            $posts = Post::all();
            return view('denuncia.index', compact('posts', 'users'));
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
        $regras = [
            'mensagem'     => 'required | string  ',
            'arquivo' => 'required '
        ];
        $mensagens = [
            'mensagem.required' => 'Digite sua mensagem!',
            'mensagem.min'      => 'O campo mensagem deve conter no mínimo 10 caracteres!',
            'mensagem.max'      => 'O campo mensagem deve conter no máximo 200 caracteres!'                    
             ];
        $request->validate($regras, $mensagens);

        $path =  $request->file('arquivo')->store('img', 'public');
        $post = new POST();
        $post->users_id = auth()->id();
        $post->name = $request->input('name');
        $post->mensagem = $request->input('mensagem');
        $post->arquivo = $path;
        $post->save();
      
        Flash('Sua Denuncia foi enviada com Sucesso! Se preferir denuncie novamente outra denuncia ! Se não tiver outra denuncia aperte o Botão Sair. <i class="fa fa-whatsapp" aria-hidden="true"></i>')->success()->important();

        return view('home');    
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
        $users = User::All();

        $posts = Post::find($id);
     //   return redirect()->back();
     return view('denuncia.edit', array('posts'=> $posts, 'users' => $users));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Post $posts)
    {
      //  $path =  $request->file('arquivo')->store('img', 'public');
        $posts->users_id = $request->users_id;
        $posts->name = $request->input('name');
        $posts->mensagem = $request->input('mensagem');
        $posts->arquivo = $request->file('arquivo');
        $posts->save();
        return view('denuncia.edit', array('posts'=> $posts));

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

