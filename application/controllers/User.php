<?php 

class User extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('User_model'); //mengambil data model
        $this->load->library('form_validation'); // mengambil data falidasi
    }

    public function index()
    {
        // $data['user']
        $data['User'] = $this->User_model->getAllUser(); //mengambil data dari model
        $this->load->view('admin/layouts/header'); //lokasi template header
        $this->load->view('admin/user/index', $data); //tapilan dari si user dan data user yang di ambil dari model
        $this->load->view('admin/layouts/footer'); //lokasi template footer, 
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
            redirect('User/index');
            // echo "berhasil";
        }
        
    }

    public function destroy($id)
    {
        $this->User_model->destroyUser($id);
        $this->session->set_flashdata('flash','sudah di hapus');
        redirect('User/index');
    }

    public function detail($id)
    {
        $data['user_detail'] = $this->User_model->getUserById($id);

        $this->load->view('admin/layouts/header');
        $this->load->view('admin/user/detail', $data);
        $this->load->view('admin/layouts/footer');
    }

    public function edit($id)
    {
        $data['data'] = $this->User_model->getUserById($id);
        $this->form_validation->set_rules('username','Username','required');
        if($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layouts/header');
            $this->load->view('admin/user/edit', $data);
            $this->load->view('admin/layouts/footer');
        } else {
            $this->User_model->StoreUser();
            $this->session->set_flashdata('flash','Berhasil di edit');
            redirect('User/index');
            // echo "berhasil";
        }
    }


}
?>