<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
    public function home()
    {
        $data=[
            "name"=>"akshaya",
            "message"=>"hello",
            "names"=>["aksh","arya","amru"]
        ];
        return view('welcome',$data);
    }
}
