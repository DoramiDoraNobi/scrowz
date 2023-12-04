<?php

class Auth_model extends CI_Model 
{
    // Fungsi untuk menambah user baru
    public function create_user($data) {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk mendapatkan data user berdasarkan email
    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('users')->row();
    }

    // Fungsi untuk memeriksa login user
    public function check_login($email, $password) {
        $user = $this->get_user_by_email($email);

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    
    
}

?>