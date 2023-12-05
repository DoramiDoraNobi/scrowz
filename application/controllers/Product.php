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

    public function create() {
        // Load view form tambah produk
        $this->load->view('product/create');
    }

    // Fungsi untuk menyimpan produk baru ke database dan gambar ke folder assets/product
public function save() {
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Product Stock', 'required|numeric');

        if ($this->form_validation->run() === TRUE) {
            $config['upload_path'] = './assets/product/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB max size (you can change as needed)
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image_url')) {
                // Jika gagal upload, tampilkan pesan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('product');
            } else {
                $upload_data = $this->upload->data();
                $image_url = $upload_data['file_name'];

                // Data untuk disimpan ke database
                $data = array(
                    'name' => $this->input->post('name'),
                    'description' => $this->input->post('description'),
                    'price' => $this->input->post('price'),
                    'stock' => $this->input->post('stock'),
                    'image_url' => $image_url
                );

                // Simpan data produk ke database
                $this->Product_model->create_product($data);

                // Redirect ke halaman index produk
                redirect('product');
            }
        } else {
            // Jika validasi form gagal, tampilkan pesan error
            $this->session->set_flashdata('error', validation_errors());
            redirect('product/create');
        }
    } else {
        show_404(); // Tampilkan halaman error 404 jika bukan POST request
    }
}

public function edit($id) {
    $data['product'] = $this->Product_model->get_product_by_id($id);
    $this->load->view('layout/header');
    $this->load->view('product/edit', $data);
    $this->load->view('layout/footer');
}

public function update($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('description', 'Product Description', 'required');
        $this->form_validation->set_rules('price', 'Product Price', 'required|numeric');
        $this->form_validation->set_rules('stock', 'Product Stock', 'required|numeric');

        if ($this->form_validation->run() === TRUE) {
            // Jika ada file gambar yang diunggah, lakukan pemrosesan gambar
            if (!empty($_FILES['image_url']['name'])) {
                $config['upload_path'] = './assets/product/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048; // 2MB max size
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image_url')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('product/edit/' . $id);
                } else {
                    $upload_data = $this->upload->data();
                    $image_url = $upload_data['file_name'];
                }
            } else {
                $image_url = $this->input->post('old_image'); // Jika tidak ada gambar baru, gunakan gambar lama
            }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock' => $this->input->post('stock'),
                'image_url' => $image_url
            );

            $this->Product_model->update_product($id, $data);
            redirect('product');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('product/edit/' . $id);
        }
    } else {
        show_404();
    }
}
public function delete($id) {
    $product = $this->Product_model->get_product_by_id($id);

    // Hapus gambar produk
    unlink('./assets/product/' . $product['image_url']);

    // Hapus data produk dari database
    $this->Product_model->delete_product($id);

    redirect('product');


}
}

?>