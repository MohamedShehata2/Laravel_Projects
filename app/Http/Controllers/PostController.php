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

}



