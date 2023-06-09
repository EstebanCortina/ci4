<?php

namespace App\Controllers;

class DataRenderController extends BaseController
{
  public function index()
  {
    $data = [
      "titulo" => "Titulo renderizado",
      "body" => "El valor de este h1 proviene desde el controlador"
    ];
    return view('DataRender/index', $data);
  }
}
