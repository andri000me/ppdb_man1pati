<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class gelombangs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_gelombang");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["gelombang"] = $this->model_gelombang->getAll();
        $this->load->view("admin/gelombang/index", $data);
    }

    public function add()
    {
        $gelombang = $this->model_gelombang;
        $validation = $this->form_validation;
        $validation->set_rules($gelombang->rules());

        if ($validation->run()) {
            $gelombang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/gelombang/create");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/gelombangs');
       
        $gelombang = $this->model_gelombang;
        $validation = $this->form_validation;
        $validation->set_rules($gelombang->rules());

        if ($validation->run()) {
            $gelombang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["gelombang"] = $gelombang->getById($id);
        if (!$data["gelombang"]) show_404();
        
        $this->load->view("admin/gelombang/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_gelombang->delete($id)) {
            redirect(site_url('admin/gelombangs'));
        }
    }
}