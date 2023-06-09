<?php

namespace App\Controllers;

class FormController extends BaseController
{
  public function index()
  {
    $vista =
      view('plantillas/header') .
      view('form/body') .
      view('plantillas/menu') .
      view('plantillas/footer');
    return $vista;
  }
}
