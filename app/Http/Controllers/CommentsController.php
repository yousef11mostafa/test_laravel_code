<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;

class CommentsController extends Controller
{
    //
    public function index(){
        $comments=Comments::all();

        return view('comments',['comments'=>$comments]);
    }

    public function create(Request $request){
        $valid=$request->validate([
            'name'=>'required|text',
            'password'=>'required',
        ]);

       dump($request->query());
       dump( $request->query());

    }
}
