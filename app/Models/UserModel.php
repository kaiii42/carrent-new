<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "tbl_user";
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_user', 'nama', 'email', 'no_telp', 'username', 'password', 'level'];
}