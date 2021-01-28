<?php
class Pendaftaran extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_pendaftaran');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->Model_pendaftaran->getAlldata();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/pendaftaran/index', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function detail($id)
    {
        $data['data'] = $this->Model_pendaftaran->getPendaftaran1ById($id);

        $this->load->view('admin/layouts/header');
        $this->load->view('admin/pendaftaran/detail', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function destroy($id)
    {
        $this->Model_pendaftaran->destroyPendaftaran($id);
        $this->session->set_flashdata('flash','Sudah di hapus');
        redirect('Pendaftaran/index');
    }
}
?>