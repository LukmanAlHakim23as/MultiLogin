<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table            = 't_users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['f_email','f_password'];

    public function CekLogin($email, $password){
        return $this->db->table('t_users')
            ->where([
                'f_email' => $email,
                'f_password' => $password,
            ])->get()->getRowArray();
    }
}
