<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index() {
        $this->load->view('landing_page');
    }

    public function login() {
        $this->load->view('auth/login');
    }

    public function register() {
        $this->load->view('auth/register');
    }

    public function dashboard() {
        $this->load->view('layout/header');
        $this->load->view('auth/dashboard');
        $this->load->view('layout/footer');
    }

    // Fungsi untuk halaman register
    public function do_register() {
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'role' => 'user' // Default role for registered user
                );

                $this->Auth_model->create_user($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Register berhasil!</div>');
                redirect('auth');
                // Redirect to login page or success message
            }
        }

        // Load your register view here
        $this->load->view('auth/register');
    }

    // Fungsi untuk halaman login
    public function do_login() {
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');

                $user = $this->Auth_model->check_login($email, $password);
                if ($user) {
                    $data_session = array(
                        'id' => $user->id,
                        'username' => $user->username,
                        'email' => $user->email,
                        'role' => $user->role,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($data_session);
                    
                    // Check if user role is admin
                    if ($user->role == 'admin') {
                        redirect('auth/dashboard');
                    } else {
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau password salah!</div>');
                    redirect('auth/login');
                }
            }
        }

        // Load your login view here
        $this->load->view('login_view');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
