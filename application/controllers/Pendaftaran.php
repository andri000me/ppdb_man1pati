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
        $data['data'] = $this->Model_pendaftaran->getpendaftaran1ById($id);

        $this->load->view('admin/layouts/header');
        $this->load->view('admin/pendaftaran/detail', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function edit($id)
    {
        $data['data'] = $this->Model_pendaftaran->getpendaftaran1ById($id);
        $this->form_validation->set_rules('id_pendaftaran');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layouts/header');
            $this->load->view('admin/pendaftaran/edit', $data);
            $this->load->view('admin/layouts/footer');
        } else {
            $this->Model_pendaftaran->StorePendaftaran();
            $this->session->set_flashdata('flash','Berhasil di edit');
            redirect('pendaftaran/index');
            // echo "berhasil";
        }
    }

    public function destroy($id)
    {
        $this->Model_pendaftaran->destroyPendaftaran($id);
        $this->session->set_flashdata('flash','Sudah di hapus');
        redirect('Pendaftaran/index');
    }

    // get laporan pdf
    public function laporan()
    {
        $this->load->model('Model_pendaftaran');
        $data['dataall'] = $this->Model_pendaftaran->getAlldata();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename = "laporan-pendaftaran.pdf";
        $this->pdf->load_view('laporan-pendaftaran', $data);
    }
}
?>