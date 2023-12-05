<?php
class Product extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index()
    {
        $data['products'] = $this->Product_model->get_all_product();
        $this->load->view('layout/header');
        $this->load->view('product/index', $data);
        $this->load->view('layout/footer');
    }
}


?>