<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;
use App\Models\ModelBukuBuku;

class Buku extends BaseController
{
    protected $ModelBuku;

    public function __construct()
    {
        $this->ModelBuku = new ModelBuku();
    }

    public function Show ()
    {
        $buku = $this->ModelBuku->findall();
    }

    public function Create()
    {

    }

    public function Update()
    {

    }
}
