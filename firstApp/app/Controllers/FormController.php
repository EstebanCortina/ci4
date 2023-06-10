<?php

namespace App\Controllers;

use App\Models\UserModel;

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
    $userName = $this->request->getPost('userName');
    $data = [
      'username' => $userName
    ];

    $userModel = new UserModel();

    $newID = $userModel->createUser($data);
    $data = [
      'id' => $newID
    ];
    return redirect()->to('/form')->with('data', $data);
  }
}
