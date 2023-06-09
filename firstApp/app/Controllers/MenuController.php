<?php

namespace App\Controllers;

class MenuController extends BaseController
{
  public function index()
  {
    return view('menu/index');
  }
}
