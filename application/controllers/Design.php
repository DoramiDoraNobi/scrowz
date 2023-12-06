<?php
class Design extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Design_model');
        $this->load->helper('url');
    }
    
    public function index(){
        $this->load->view('design/custom_design');
    }
    
    public function upload_design() {
        // Pastikan user sudah login
        if ($this->session->userdata('logged_in')) {
            // Konfigurasi upload
            $config['upload_path'] = './assets/custom_design/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Ukuran file maksimum (dalam kilobyte)
    
            $this->load->library('upload', $config);
    
            if (!$this->upload->do_upload('userfile')) {
                // Jika upload gagal, tampilkan pesan kesalahan
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('design/custom_design', $error);
            } else {
                // Jika upload berhasil, simpan informasi file ke dalam database
                $data = $this->upload->data();
                $file_name = $data['file_name'];
    
                $this->load->model('Design_model');
                $user_id = $this->session->userdata('id'); // ID pengguna yang sedang login
                $this->Design_model->save_design($user_id, $file_name);
    
                redirect('design/request_form');
            }
        } else {
            // Jika user belum login, arahkan ke halaman login atau tampilkan pesan error
            redirect('auth/login');
        }
    }

    public function request_form() {
        if ($this->session->userdata('logged_in')) {
            $user_id = $this->session->userdata('id');

            // Ambil data desain yang terakhir diunggah oleh user
            $design_id = $this->Design_model->get_last_design_id($user_id);

            // Ambil data fabric dari database
            $data['fabrics'] = $this->Design_model->get_all_fabrics();

            // Masukkan design_id ke dalam data
            $data['design_id'] = $design_id;

            // Tampilkan form request dengan data yang diperlukan
            $this->load->view('design/request_form', $data);
        } else {
            // Jika user belum login, arahkan ke halaman login
            redirect('auth/login');
        }
    }

    public function submit_request() {
        $user_id = $this->session->userdata('id');

        $data = array(
            'customer_id' => $user_id,
            'design_id' => $this->input->post('design_id'),
            'fabric_id' => $this->input->post('fabric_id'),
            'type' => $this->input->post('type'),
            'size' => $this->input->post('size')
            // Tambahkan kolom lain jika diperlukan
        );

        $this->Design_model->save_request($data);
        // Simpan request ke dalam database

        // Redirect atau tampilkan pesan sukses
        redirect('auth');
    }

    public function manage_orders() {
        // Pastikan admin telah login (dapat disesuaikan dengan mekanisme autentikasi)
        // Di sini diasumsikan penggunaan login admin yang telah diatur sebelumnya
        
        $this->load->model('Design_model');
        $data['requested_clothes'] = $this->Design_model->get_requested_clothes();
        
        $this->load->view('layout/header');
        $this->load->view('design/manage_orders', $data);
        $this->load->view('layout/footer');
    }
    
    
}


?>