<?php 

class User extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data['user']
        $data['User'] = $this->User_model->getAllUser();
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/user/index', $data);
        $this->load->view('admin/layouts/footer');
        // $this->load->view('admin/index');
    }

    public function create()
    {
        $this->form_validation->set_rules('username','Username','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layouts/header');
            $this->load->view('admin/user/create');
            $this->load->view('admin/layouts/footer');
        } else {
            $this->User_model->StoreUser();
            $this->session->set_flashdata('flash','Berhasil di tambah');
            redirect('User');
            // echo "berhasil";
        }
    }
}

?>