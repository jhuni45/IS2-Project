<?php

namespace RodarV2\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
      //$name="hola soy chichico";
      //return view('myview',['chichico'=>$name ]);
      return view('myview');
    }
    public function atencionCliente()
    {
      return view('atencionCliente');
    }
}
