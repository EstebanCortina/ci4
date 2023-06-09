<?php

namespace App\Controllers;

class VistasController extends BaseController
{
  public function index()
  {
    //Podemos reutilizar partes de otras vistas. Es como pegar codigo html uno despues del otro. Se concatena.
    $vista =
      view('vistas/header') .
      view('vistas/body') .
      view('vistas/footer');
    return $vista;
  }
  public function header()
  {
    return view('vistas/header');
  }
  public function footer()
  {
    return view('vistas/footer');
  }
}
