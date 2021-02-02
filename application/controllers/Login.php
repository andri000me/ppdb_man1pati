<?php
	class Login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('Model_login');
		}
		function index(){
			$this->load->view('admin/login.php');
		}
		function aksi_login(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$where=array(
					'username' =>$username,
					'password' =>$password
				);
			$cek=$this->Model_login->cek_login('user',$where)->num_rows();
			$query=$this->db->where('username',$username)->get('user');
			$row=$query->row();

			$wh=array(
					'username' =>$username,
					'password' =>$password
				);
			if($cek > 0){
				$data_session=array(
						'username'	=>$row->username,
						'level'	=>$row->level,
						'status' => 'login',
						);
					$this->session->set_userdata($data_session);
					redirect('Control/page');
			}else{
				echo "<script>alert('Maaf Ussername atau password yang anda masukkan salah')</script>";
				echo "<script>document.location='../login'</script>";
			}
		}
		function logout(){
				$this->session->sess_destroy();
				redirect('login');
			}
	}
?>