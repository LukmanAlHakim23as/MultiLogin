<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAuth;
use PhpParser\Builder\Function_;

class Auth extends BaseController
{
    protected $ModelAuth,$session;

    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
        $this->session = \Config\Services::session();
    }

    public function index(): string
    {
        $data = ['judul' => 'Halaman Login','page'=>'v_login'];
        return view('tamplates/v_tamplate_login', $data);
    }

    public function cekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !',
                ]
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->CekLogin($email, $password);

            if (!empty($cek_login)) {
                session()->set('f_id', intval($cek_login['f_id']));
                session()->set('f_nama', $cek_login['f_nama']);
                session()->set('f_email', $cek_login['f_email']);
                session()->set('f_role', $cek_login['f_role']);
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Salah !');
                return redirect()->to(base_url('Auth'));
            }
        } else {
            // Jika entry tidak valid
            return redirect()->to(base_url('Auth'))->withInput()->with('errors', \Config\Services::validation()->getErrors());
        }
    }

    public function Logout()
    {
        session()->remove('f_id');
        session()->remove('f_nama');
        session()->remove('f_email');
        session()->remove('f_role');
        session()->setFlashdata('pesan', 'Logout Sukses !');
        return redirect()->to(base_url('Auth'));
    }
}
