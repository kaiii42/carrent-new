<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\TransaksiModel;

class Admin extends BaseController
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

        $header = view('template/admin/header');
        $mainContent = view('admin/index');
        $footer = view('template/admin/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function services()
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

        $header = view('template/admin/header');
        $mainContent = view('admin/services', $data);
        $footer = view('template/admin/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function orders()
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
        $data['orders'] = $TransaksiModel->AdminOrder();

        $header = view('template/admin/header');
        $mainContent = view('admin/orders', $data);
        $footer = view('template/admin/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function tambah_services()
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

        $header = view('template/admin/header');
        $mainContent = view('admin/tambah_services', $data);
        $footer = view('template/admin/footer');
        $fullView = $header . $mainContent . $footer;
        
        return $this->response->setBody($fullView);
    }

    public function proses_tambah_services()
    {
        // Retrieve the form data
        $serviceName = $this->request->getPost('service_name');
        $serviceDescription = $this->request->getPost('service_description');
        $servicePrice = $this->request->getPost('service_price');

        $servicePicture = $this->request->getFile('service_picture');
        if ($servicePicture->isValid() && !$servicePicture->hasMoved()) {
            // Generate a unique file name
            $newFileName = $servicePicture->getRandomName();

            // Move the uploaded file to the desired directory
            $servicePicture->move('./uploads', $newFileName);

            // Store the file path in the $data array
            $data['foto'] = './uploads/' . $newFileName;
        } else {
            // Handle the error if the file upload fails
            // Redirect, display an error message, or set a validation error
            return redirect()->back()->withInput()->with('error', 'Failed to upload service picture');
        }

        // Validate the form data
        if (empty($serviceName)) {
            // Handle the error, redirect, or display an error message
            return redirect()->back()->withInput()->with('error', 'Service Name is required');
        }

        // Insert the data into the database
        $serviceModel = new \App\Models\ServiceModel();
        $data = [
            'nama_service' => $serviceName,
            'deskripsi_service' => $serviceDescription,
            'harga' => $servicePrice,
            'foto' => './uploads/' . $newFileName // Store the file path in the database
        ];
        $serviceModel->insert($data);

        if($serviceModel){
            $session = session();
            $session->setFlashdata('berhasiltambahservice', '<div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Selamat! Anda berhasil menambahkan service!</a>
                        </div>');
            return redirect()->to("admin/services");
        }else{
            return redirect()->to("admin/services");
        }
        // Redirect or display a success message
        // ...
    }

    public function delete_service($id)
    {
        $serviceModel = new \App\Models\ServiceModel();
        $service = $serviceModel->find($id);

        if ($service) {
            // Delete the service from the database
            $serviceModel->delete($id);
            $session = session();
            $session->setFlashdata('berhasilhapusservice', '<div class="alert alert-warning">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Data berhasil di hapus!</a>
                        </div>');
            return redirect()->to("admin/services");
        } else {
            // Service not found, redirect or display an error message
            return redirect()->to('admin/services')->with('error', 'Service not found');
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

    public function confirm_order()
    {
        $idt = $this->request->getGet('id');

        // Retrieve the transaction from the database
        $transaksiModel = new TransaksiModel();
        $transaction = $transaksiModel->find($idt);

        if ($transaction) {
            // Update the status to "cancelled"
            $transaction->status = "Confirmed";
            
            // Save the updated transaction
            $transaksiModel->save($transaction);

            $session = session();
            $session->setFlashdata('confirm_order', '<div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <i class="icon-line-lock"></i>Oke, Pesanan Berhasil Di Konfirmasi</a>
                        </div>');

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        // Destroy the session
        session()->destroy();
        
        // Redirect to the login page or any other desired page
        return redirect()->to('home/login');
    }

}


?>