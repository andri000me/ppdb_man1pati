<?php
class Gelombang extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_gelombang');
        $this->load->library('form_validation');
    }
    

    public function index()
    {
        $data['data'] = $this->Model_gelombang->getAlldata();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/gelombang/index', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function destroy($id)
    {
        $this->Model_gelombang->destroygelombang($id);
        $this->session->set_flashdata('flash','Sudah di hapus');
        redirect('gelombang/index');
    }
    








}




?>