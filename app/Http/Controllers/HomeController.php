<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        //$id = 404;
        //return view('home.index')->with('id',$id);
        //return view('home.index')->with('id',123);
        //return view('home.index')->withId(123)->withName('hridoy');
        $id = 404;
        $name = "Hridoy";
        return view('home.index', compact('id','name'));
    }
}
