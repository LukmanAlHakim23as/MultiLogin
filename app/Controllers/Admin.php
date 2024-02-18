<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index()
    {
        $data = ['judul'=> 'Admin', 'page' => 'v_main' ];
        return view('tamplates/v_tamplate_main', $data);
    }

    
}
