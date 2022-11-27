<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct() {
        parent::__construct(); 
        $this->load->model('Customer_model');
    }

    public function index() {

        $data['title'] = 'Daftar Customer';
        $data['customer'] = $this->Customer_model->getAllCustomer();
        
		$this->load->view('templates/heder', $data);
		$this->load->view('customer/index', $data);
		$this->load->view('templates/footer');
        
    }

    

    public function register() {
        $data['title'] = 'Tambah data user';

        // set rules
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama Perusahaan harus diisi!'
        ]);
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required|trim', [
            'required' => 'Alamat Perusahaan harus diisi!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No. Telpon', 'required|trim', [
            'required' => 'No. Telpon harus diisi!'
        ]);
        $this->form_validation->set_rules('no_fax', 'No. Fax', 'required|trim', [
            'required' => 'No. Fax harus diisi!'
        ]);
        $this->form_validation->set_rules('sektor_usaha', 'Sektor Usaha', 'required|trim', [
            'required' => 'Sektor Usaha harus diisi!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara Usaha harus diisi!'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
            'required' => 'Lokasi Usaha harus diisi!'
        ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        //     'required' => 'Email harus diisi!',
        //     'valid_email' => 'Harus berupa email',
        //     'is_unique' => 'Email sudah terdaftar'
        // ]);
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        //     'required' => 'password harus diisi!',
        //     'min_length' => 'Password minimal 3 karakter',
        //     'matches' => 'Passord tidak sama!'
        // ]);
        // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/heder');
            $this->load->view('customer/register', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Customer_model->tambahData();

            redirect('customer');
        }
    }

    public function edit_cutomer($id) {
        $data['title'] = 'Tambah data user';

        // set rules
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama Perusahaan harus diisi!'
        ]);
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat Perusahaan', 'required|trim', [
            'required' => 'Alamat Perusahaan harus diisi!'
        ]);
        $this->form_validation->set_rules('no_telp', 'No. Telpon', 'required|trim', [
            'required' => 'No. Telpon harus diisi!'
        ]);
        $this->form_validation->set_rules('no_fax', 'No. Fax', 'required|trim', [
            'required' => 'No. Fax harus diisi!'
        ]);
        $this->form_validation->set_rules('sektor_usaha', 'Sektor Usaha', 'required|trim', [
            'required' => 'Sektor Usaha harus diisi!'
        ]);
        $this->form_validation->set_rules('negara', 'Negara', 'required|trim', [
            'required' => 'Negara Usaha harus diisi!'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
            'required' => 'Lokasi Usaha harus diisi!'
        ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        //     'required' => 'Email harus diisi!',
        //     'valid_email' => 'Harus berupa email',
        //     'is_unique' => 'Email sudah terdaftar'
        // ]);
        // $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        //     'required' => 'password harus diisi!',
        //     'min_length' => 'Password minimal 3 karakter',
        //     'matches' => 'Passord tidak sama!'
        // ]);
        // $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/heder');
            $this->load->view('customer/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Customer_model->ubahData($id);

            redirect('customer');
        }
    }

    public function hapus_customer($id)
    {
        $this->Customer_model->hapusCustomer($id);
        redirect('customer');
    }

    
}