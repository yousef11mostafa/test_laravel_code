<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class PostsController extends Controller
{
    //

    public function index(posts $post){


        return $post;
    }
}
