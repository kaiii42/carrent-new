<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\TransaksiModel;
use App\Models\OrderModel;

class User extends BaseController
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
        // Check if user is logged in
        if (!$this->isLoggedIn()) {
            $session = session();
            $session->setFlashdata('belumlogin', '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Anda harus login terlebih dahulu untuk mengakses halaman Admin.<br>Silahkan Coba Login.</a>
                        </div>');
            return redirect()->to("home/login");
        }

        $header = view('template/user/header');
        $mainContent = view('user/index');
        $footer = view('template/user/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function order()
    {
        // Check if user is logged in
        if (!$this->isLoggedIn()) {
            $session = session();
            $session->setFlashdata('belumlogin', '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Anda harus login terlebih dahulu untuk mengakses halaman Admin.<br>Silahkan Coba Login.</a>
                        </div>');
            return redirect()->to("home/login");
        }

        $ServiceModel = new ServiceModel();
        $data['services'] = $ServiceModel->findAll();

        $header = view('template/user/header');
        $mainContent = view('user/order', $data);
        $footer = view('template/user/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function order_history()
    {
        // Check if user is logged in
        if (!$this->isLoggedIn()) {
            $session = session();
            $session->setFlashdata('belumlogin', '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Anda harus login terlebih dahulu untuk mengakses halaman Admin.<br>Silahkan Coba Login.</a>
                        </div>');
            return redirect()->to("home/login");
        }

        $TransaksiModel = new TransaksiModel();
        $id_user = session()->get('id_user');
        $data['transaksi'] = $TransaksiModel->where('id_user', $id_user)->findAll();

        $header = view('template/user/header');
        $mainContent = view('user/order_history', $data);
        $footer = view('template/user/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function submit_order()
{
    if (!$this->isLoggedIn()) {
        $session = session();
        $session->setFlashdata('belumlogin', '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Anda harus login terlebih dahulu untuk mengakses halaman Admin.<br>Silahkan Coba Login.</a>
                        </div>');
        return redirect()->to("home/login");
    }

    $session = session();

    // Get the form input values
    $id_user = $this->request->getPost('id_user');
    $service = $this->request->getPost('service');
    $alamat = $this->request->getPost('alamat');
    $nomor_telepon = $this->request->getPost('nomor_telepon');
    $tgl_transaksi = $this->request->getPost('tgl_transaksi');
    $catatan = $this->request->getPost('catatan');
    $delivery = $this->request->getPost('delivery');

    // Create an instance of the OrderModel
    $orderModel = new OrderModel();

    // Prepare the data to be inserted
    $data = [
        'id_service' => '1',
        'id_user' => $id_user,
        'tgl_transaksi' => $tgl_transaksi,
        'status' => 'Pending',
        'alamat' => $alamat,
        'catatan' => $catatan,
        'delivery' => $delivery
    ];

    // Get the uploaded file
    $file = $this->request->getFile('bukti_bayar');

    // Move the file to the desired location
    if ($file->isValid() && !$file->hasMoved()) {
        // Customize the destination directory and file name as per your needs
        $newName = $file->getRandomName();
        $file->move('./uploads', $newName);

        // Update the data array with the file path or name
        $data['bukti_bayar'] = $newName;
    }

    // Insert the data into the database
    if ($orderModel->insert($data)) {
        return redirect()->to('user/order');
    } else {
        $errors = $orderModel->errors();
        log_message('error', print_r($errors, true)); // Log the errors
        // Redirect to an error page or display an error message
        return redirect()->to('gagal');
    }
}



    private function isLoggedIn()
    {
        $session = session();

        // Check if the 'logged_in' session variable exists and is true
        if ($session->logged_in) {
            return true;
        }

        return false;
    }

    public function logout()
    {
        session()->destroy(); // Clear all session data

        return redirect()->to('home/login'); // Redirect to the login page or any other page
    }
}

?>