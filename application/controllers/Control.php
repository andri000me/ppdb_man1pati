<?php
	class Control extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('Model_sekolah');
			$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		}
		function index(){
			redirect('Login');
		}
		function page(){
			$page=$this->uri->segment(3);
			if(empty($page)){
				$page='home';
				
			}
			$data['home']=$page;
			if($page=="siswa"){
				$data['tamp_sis']=$this->Model_sekolah->qw('*','pendaftaran','')->result();
				$this->load->view('admin/index',$data);
			}elseif($page=="f_siswa"){
				$yy=$this->uri->segment(4);
				if(empty($yy)){
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['judul']='Input Siswa';
					$data['open']='Control/simpan_siswa';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['nomot']=$yy;
					$data['value']='Edit';
					$data['judul']='Edit Siswa';
					$data['open']='Control/edit_siswa';
					$data['type']='text';
					$data['hsl']=$this->Model_sekolah->qw("*","pendaftaran","WHERE id_pendaftaran= '$yy'"
						);
				}				
				$this->load->view('admin/index',$data);
			}else{
				$this->load->view('admin/index',$data);
			}
		}
		function l_wsa(){
			$this->load->view('admin/content/l_wsa');
		}
		function l_ps(){
			$this->load->view('admin/content/l_ps');
		}
		function simpan_siswa(){
				$ary=array(
					'tgl_daftar'		=>date('Y-m-d'),
					'nama_lengkap'		=>$this->input->post('nama_lengkap'),
					'tempat_lahir'		=>$this->input->post('tempat_lahir'),
					'tanggal_lahir'		=>$this->input->post('tanggal_lahir'),
					'jenis_kelamin'		=>$this->input->post('jenis_kelamin'),
					'agama'				=>$this->input->post('agama'),
					'alamat'			=>$this->input->post('alamat'),
					'no_hp'				=>$this->input->post('no_hp'),
					'nama_ortu'			=>$this->input->post('nama_ortu'),
					'no_hportu'			=>$this->input->post('no_hportu'),
					'asal_smp'			=>$this->input->post('asal_smp')
					);
					$this->Model_sekolah->simpan_siswa('pendaftaran',$ary);
					redirect('Control/page/siswa');
		}
		function sws(){
				$data['sis']=$this->Model_sekolah->qw("*","pendaftaran","ORDER BY nama_lengkap ASC")->result();
				$this->load->view('admin/export/export',$data);
		}
		function edit_siswa(){
				$id_pendaftaran=$this->input->post('id_pendaftaran');
				$ary=array(
					'tgl_daftar'		=>date('Y-m-d'),
					'nama_lengkap'		=>$this->input->post('nama_lengkap'),
					'tempat_lahir'		=>$this->input->post('tempat_lahir'),
					'tanggal_lahir'		=>$this->input->post('tanggal_lahir'),
					'jenis_kelamin'		=>$this->input->post('jenis_kelamin'),
					'agama'				=>$this->input->post('agama'),
					'alamat'			=>$this->input->post('alamat'),
					'no_hp'				=>$this->input->post('no_hp'),
					'nama_ortu'			=>$this->input->post('nama_ortu'),
					'no_hportu'			=>$this->input->post('no_hportu'),
					'asal_smp'			=>$this->input->post('asal_smp')
					);
					$this->Model_sekolah->edit_siswa('pendaftaran',$id_pendaftaran,$ary);
					redirect('Control/page/siswa');
		}
		function hapus_siswa($id){
			$this->Model_sekolah->hapus_siswa('pendaftaran',$id);
			redirect('Control/page/siswa');
		}
	}
?>