<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation'); // Load library form_validation
    }

    public function index() {
        $data['barang'] = $this->Barang_model->get_all_barang();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/barang/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/menu');
                $this->load->view('admin/barang/create');
                $this->load->view('admin/templates/footer');
            } else {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_data = $this->upload->data();
                    $gambar = $gambar_data['file_name'];
                } else {
                    $gambar = '';
                }

                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'keterangan' => $this->input->post('keterangan'),
                    'gambar' => $gambar
                );
                $this->Barang_model->create_barang($data);
                redirect('barang');
            }
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/menu');
            $this->load->view('admin/barang/create');
            $this->load->view('admin/templates/footer');
        }
    }

    public function edit($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
            $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

            if ($this->form_validation->run() === FALSE) {
                $data['barang'] = $this->Barang_model->get_barang($id);
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/menu');
                $this->load->view('admin/barang/edit', $data);
                $this->load->view('admin/templates/footer');
            } else {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_data = $this->upload->data();
                    $gambar = $gambar_data['file_name'];
                } else {
                    $gambar = $this->input->post('gambar_lama');
                }

                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'keterangan' => $this->input->post('keterangan'),
                    'gambar' => $gambar
                );
                $this->Barang_model->update_barang($id, $data);
                redirect('barang');
            }
        } else {
            $data['barang'] = $this->Barang_model->get_barang($id);
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/menu');
            $this->load->view('admin/barang/edit', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function view($id) {
        $data['barang'] = $this->Barang_model->get_barang($id);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/barang/view', $data);
        $this->load->view('admin/templates/footer');
    }

    public function delete($id) {
        $this->Barang_model->delete_barang($id);
        redirect('barang');
    }
}
?>
