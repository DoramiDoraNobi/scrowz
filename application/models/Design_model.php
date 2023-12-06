<?php
class Design_model extends CI_Model {
    public function save_design($user_id, $file_name) {
        $data = array(
            'customer_id' => $user_id,
            'image_url' => $file_name
            // Tambahkan kolom lain jika diperlukan
        );

        return $this->db->insert('Designs', $data);
    }

    public function get_last_design_id($user_id) {
        $this->db->select('design_id');
        $this->db->where('customer_id', $user_id);
        $this->db->order_by('design_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('Designs');
        return $query->row()->design_id;
    }

    public function get_all_fabrics() {
        $query = $this->db->get('fabrics');
        return $query->result_array();
    }

    public function save_request($data) {
        return $this->db->insert('requestedclothes', $data);
    }

    public function get_requested_clothes() {
        $this->db->select('requestedclothes.*, users.username, designs.image_url');
        $this->db->from('requestedclothes');
        $this->db->join('users', 'users.id = requestedclothes.customer_id');
        $this->db->join('designs', 'designs.design_id = requestedclothes.design_id');
        $query = $this->db->get();
        
        return $query->result_array();
    }
}


?>