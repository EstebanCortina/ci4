<?php

namespace App\Controllers;

class URLVariablesController extends BaseController
{
  public function index()
  {
    return view('URLVariables/index');
  }
  public function value($urlVal)
  {
    $data = [
      "titulo" => $urlVal,
      "body" => $urlVal
    ];
    return view('URLVariables/index', $data);
  }
}
