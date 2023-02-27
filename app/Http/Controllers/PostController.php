<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function getData(){
        $posts = post::get();
        return view('tabelData', ['posts' => $posts]);

    }

    function viewpost($id){
        $onePost = post::find($id);
       return view('view',['onePost' => $onePost]);
    }

    function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('tabelData');
    }


    function create()
    {
        return view('create');
    }


    function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('tabelData');
    }


    function update($id)
    {
        $post = Post::find($id);
        return view('update', compact('post'));
    }


    function edit($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->except(['_method', '_token']));
        return redirect()->route('tabelData');
    }





}



