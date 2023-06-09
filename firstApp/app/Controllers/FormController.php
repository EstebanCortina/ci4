<?php

namespace App\Controllers;

class FormController extends BaseController
{
  public function index()
  {
    $vista =
      view('componentes/header') .
      view('form/body') .
      view('componentes/menu') .
      view('componentes/footer');
    return $vista;
  }
  public function data()
  {
    print_r($_POST);
  }
}
