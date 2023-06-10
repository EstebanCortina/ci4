<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = ['username'];

  public function createUser($data)
  {
    $this->insert($data);

    return $this->insertID();
  }
}
