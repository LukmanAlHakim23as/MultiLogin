<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['judul'=> 'Home', 'page' => 'v_home' ];
        return view('tamplates/v_tamplate', $data);
    }
}
