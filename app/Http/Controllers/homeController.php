<?php

namespace RodarV2\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
      //$name="hola soy chichico";
      //return view('myview',['chichico'=>$name ]);
      return view('welcome');
    }
    public function atencionCliente()
    {
      return view('atencionCliente');
    }
    public function servicios()
    {
      return view('servicios');
    }
    public function promociones()
    {
      return view('promociones');
    }
    public function enlaces()
    {
      return view('enlaces');
    }
    public function login()
    {
      return view('login');
    }public function registro()
    {
      return view('registro');
    }
}
