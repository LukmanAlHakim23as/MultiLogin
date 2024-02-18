<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Anggota extends BaseController
{
    public function index()
    {
        $data = ['judul'=> 'Anggota','page'=>'v_main'];
        return view('tamplates/v_tamplate_main',$data);
    }
}
