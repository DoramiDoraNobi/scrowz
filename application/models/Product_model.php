<?php
class Product_model extends CI_Model 
{
    public function get_all_product()
    {
        $query = $this->db->get('products');
        return $query->result_array();
    }

    public function get_product_by_id($id)
    {
        $query = $this->db->get_where('products', array('id' => $id));
        return $query->row_array();
    }

    public function create_product($data)
    {
        $this->db->insert('products', $data);
        return $this->db->insert_id();
    }

    public function update_product($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    public function count_all_products() {
        return $this->db->count_all('products');
    }
    
    public function get_products_paginated($limit, $offset) {
        $this->db->limit($limit, $offset);
        return $this->db->get('products')->result_array();
    }

    public function get_latest_products($limit = 3) {
        $this->db->order_by('date_created', 'DESC'); // Mengurutkan produk berdasarkan tanggal dibuat secara descending
        $this->db->limit($limit); // Batasan jumlah produk yang diambil (3 produk terbaru)
        return $this->db->get('products')->result_array(); // Mengembalikan array dari 3 produk terbaru
    }
}


?>