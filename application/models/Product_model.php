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
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->row_array();
    }

    public function create_product($data)
    {
        $this->db->insert('product', $data);
        return $this->db->insert_id();
    }

    public function update_product($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('product', $data);
    }

    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}


?>