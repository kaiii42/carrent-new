<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ServiceModel;

class Home extends BaseController
{
    protected $session;
    protected $db;

    public function __construct()
    {
        $this->session = session();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index()
    {

        $ServiceModel = new ServiceModel();
        $data['services'] = $ServiceModel->findAll();

        $header = view('template/header');
        $mainContent = view('home', $data);
        $footer = view('template/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function login()
    {
        return view('login');
    }

    public function checkout()
    {
        $userModel = new UserModel();
        $user = $userModel->where('username', 'ken')->first();

        if ($this->isLoggedIn() && $user) {
            $data['snama'] = session('nama');
            $data['user'] = $user;
            return view('checkout', $data);
        } else {
            $session = session();
            $session->setFlashdata('cologindulu', '<div class="alert alert-warning">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Maaf, anda harus login terlebih dahulu untuk melakukan check-out pemesanan</a>
                        </div>');
            return redirect()->to('home/login');
        }
    }

    public function create() {
      $usermodel = new UserModel();

      $plainPassword = $this->request->getPost("password");
      $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

      $result = $usermodel->insert([
         'nama'=>$this->request->getPost("nama"),
         'email'=>$this->request->getPost("email"),
         'no_telp'=>$this->request->getPost("no_telp"),
         'username'=>$this->request->getPost("username"),
         'password'=> $hashedPassword,
         'level' => 'user'
      ]);

      if($result==true) {
            $session = session();
            $session->setFlashdata('berhasilbuatakun', '<div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Selamat! Akun Berhasil Dibuat.<br>Silahkan Login.</a>
                        </div>');
            return redirect()->to("home/login");
        }else{
            $session = session();
            $session->setFlashdata('gagalbuatakun', '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Maaf! Akun Gagal Dibuat.<br>Silahkan Coba Lagi.</a>
                        </div>');
            return redirect()->to("home/login");
        }

   }

    public function masuk()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                if ($dataUser->level == 'admin') {
                    session()->set([
                        'username' => $dataUser->username,
                        'level' => $dataUser->level,
                        'nama' => $dataUser->nama,
                        'id_user' => $dataUser->id_user,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('admin/index'));
                } elseif ($dataUser->level == 'user') {
                    session()->set([
                        'username' => $dataUser->username,
                        'nama' => $dataUser->nama,
                        'level' => $dataUser->level,
                        'id_user' => $dataUser->id_user,
                        'logged_in' => TRUE
                    ]);
                    return redirect()->to(base_url('user/index'));
                } else {
                    $session = session();
                    // Invalid user level
                    session()->setFlashdata('error', 'Invalid user level');
                    return redirect()->to(base_url('home/index'));
                }
            } else {
                $session = session();
                $session->setFlashdata('salahpw', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
                return redirect()->to(base_url('home/login'));
            }
        } else {
            $session = session();
            $session->setFlashdata('salah', '<div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <i class="icon-line-lock"></i>Maaf, Username & Password Anda Salah<br>Silahkan coba kembali.</a>
                            </div>');
            return redirect()->to(base_url('home/login'));
        }        
    }

    public function logout()
    {
        // Clear session data
        $session = session();
        $session->destroy();

        return redirect()->to(base_url());
    }

}
