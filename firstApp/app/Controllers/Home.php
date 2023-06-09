<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    return view('componentes/menu') . view('welcome_message');
  }
}
