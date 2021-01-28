<?php
	class Mastercontrol extends CI_Controller{
		function __construct(){
			parent:: __construct();
			// $this->load->model('Model_mastercontrol');
			$this->load->model('Model_pendaftaran');
			$this->load->library('form_validation');
		}
		// view tampilkan index
		function index(){
			$this->load->view('index');
		}
		// tampilkan form_pendaftaran dan simpan data
		function fpd(){

			$this->form_validation->set_rules('jurusan','jurusan','required');
			if($this->form_validation->run() == FALSE){
				// $this->load->view('form_pendaftaran');
				$data['kode'] = $this->Model_pendaftaran->kode();
				$this->load->view('form_pendaftaran', $data);
			} else{
				$data['kode'] = $this->Model_pendaftaran->kode();
				$this->Model_pendaftaran->StorePendaftaran1();
				$this->session->set_flashdata('flash','Berhasil di tambah');
				// redirect('Mastercontrol/fpd');
				redirect('Mastercontrol/fpd', $data);
			}
		}

		// function fpd(){
		// 	$data['kode'] = $this->Model_pendaftaran->kode();
		// 	$this->load->view('form_pendaftaran', $data);
		// }

		// simpan pdf dari form_pendaftaran
		// function simpan_pdf(){
		// 	$ar=array(
		// 	    'tgl_daftar'=>date('Y-m-d'),
		// 		'nama_lengkap'=>$this->input->post('nama_lengkap'),
		// 		'tempat_lahir'=>$this->input->post('tempat_lahir'),
		// 		'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
		// 		'jenis_kelamin'=>$this->input->post('jk'),
		// 		'agama'=>$this->input->post('agama'),
		// 		'alamat'=>$this->input->post('alamat'),
		// 		'no_hp'=>$this->input->post('no_hp'),
		// 		'nama_ortu'=>$this->input->post('nama_ortu'),
		// 		'no_hportu'=>$this->input->post('no_hportu'),
		// 		'asal_smp'=>$this->input->post('asal_smp')
		// 	);
		// 	$simpan=$this->Model_mastercontrol->simpan_pdf('pendaftaran',$ar);
		// 	if($simpan){
		// 		echo "Berhasil";
		// 	}else{
		// 		echo "Gagal";
		// 	}

		// }

		// upload_simpan_data
		// public function upload_tambah()
		// {
		// 	$id_pendaftaran = $this->input->post('id_pendaftaran');
		// 	$nama_lengkap = $this->input->post('nama_lengkap');
		// 	$tempat_lahir = $this->input->post('tempat_lahir');
		// 	$tanggal_lahir = $this->input->post('tanggal_lahir');
		// 	$jenis_kelamin = $this->input->post('jenis_kelamin');
		// 	$agama = $this->input->post('agama');
		// 	$no_hp = $this->input->post('no_hp');
		// 	$nama_ortu = $this->input->post('nama_ortu');
		// 	$no_hportu = $this->input->post('no_hportu');
		// 	$email = $this->input->post('email');
		// 	$asal_smp = $this->input->post('asal_smp');
		// 	$alamat = $this->input->post('alamat');
		// 	$jurusan = $this->input->post('jurusan');
		// 	$file_upload_kk = $this->input->post('file_upload_kk');
		// 	$file_upload_ak = $this->input->post('file_upload_ak');
		// 	$file_upload_oto = $this->input->post('file_upload_oto');
		// 	$file_upload = $_FILES['file_upload'];
		// 	if($file_upload=''){}else{
		// 		$config['upload_path'] = './assets/uploads';
		// 		$config['allowed_types'] = 'pdf|png|jpg|gif';
		// 		$this->load->library('upload',$config);
		// 		if(! $this->upload->do_upload('file_upload')){
		// 			echo "gagal menyimpan"; die();
		// 		}else{
		// 			$file_upload= $this->upload->data('file_name');
		// 		}
		// 	}
		// 	$sem3_nl1 = $this->input->post('sem3_nl1');
		// 	$sem3_nl2 = $this->input->post('sem3_nl2');
		// 	$sem3_nl3 = $this->input->post('sem3_nl3');
		// 	$sem3_nl4 = $this->input->post('sem3_nl4');
		// 	$sem4_nl1 = $this->input->post('sem4_nl1');
		// 	$sem4_nl2 = $this->input->post('sem4_nl2');
		// 	$sem4_nl3 = $this->input->post('sem4_nl3');
		// 	$sem4_nl4 = $this->input->post('sem4_nl4');
		// 	$sem5_nl1 = $this->input->post('sem5_nl1');
		// 	$sem5_nl2 = $this->input->post('sem5_nl2');
		// 	$sem5_nl3 = $this->input->post('sem5_nl3');
		// 	$sem5_nl4 = $this->input->post('sem5_nl4');

		// 	$data = array(
		// 		'id_pendaftaran' => $id_pendaftaran,
		// 		'nm_lengkap' => $nama_lengkap,
		// 		'tmp_lahir' => $tempat_lahir,
		// 		'tanggal_lahir' => $tanggal_lahir,
		// 		'jns_kelamin' => $jenis_kelamin,
		// 		'agm' => $agama,
		// 		'no_hp' => $no_hp,
		// 		'nm_ortu' => $nama_ortu,
		// 		'no_hp_ortu' => $no_hportu,
		// 		'asl_sekolah' => $asal_smp,
		// 		'almt' => $alamat,
		// 		'nm_file' => $file_upload,
		// 		'jurusan' => $jurusan,
		// 		'sem3_nl1' => $sem3_nl1,
		// 		'sem3_nl2' => $sem3_nl2,
		// 		'sem3_nl3' => $sem3_nl3,
		// 		'sem3_nl4' => $sem3_nl4,
		// 		'sem4_nl1' => $sem4_nl1,
		// 		'sem4_nl2' => $sem4_nl2,
		// 		'sem4_nl3' => $sem4_nl3,
		// 		'sem4_nl4' => $sem4_nl4,
		// 		'sem5_nl1' => $sem5_nl1,
		// 		'sem5_nl2' => $sem5_nl2,
		// 		'sem5_nl3' => $sem5_nl3,
		// 		'sem5_nl4' => $sem5_nl4,
		// 	);
		// 	$this->Model_pendaftaran->input_data($data,'pendaftaran1');
		// 	redirect('Mastercontrol/fpd');
		// }



	}
?>