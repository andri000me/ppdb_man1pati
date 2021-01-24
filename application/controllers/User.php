<?php 

class User extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        // $data['user']
        $this->load->view('admin/layouts/header');
        $this->load->view('admin/user/index');
        $this->load->view('admin/layouts/footer');
        // $this->load->view('admin/index');
    }
}

?>