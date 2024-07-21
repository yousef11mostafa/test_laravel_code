<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    public function mark(Request $request){
        $admin=Admin::find(3);

        if($request->input("id")){

        $admin->notifications->when($request->input("id"),function($query) use ($request){
                return $query->where("id",$request->input("id"));
        })
        ->markAsRead();
    }else{

        $admin->notifications->markAsRead();

    }



    }
}
