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



		public function simpan_pdf($id)
		{
			// $data = array(
			// 	'nama_lengkap' => $this->input->post('nama_lengkap'),
			// 	'id_pendaftaran' => $this->input->post('id_pendaftaran')
			// 	);
			$data['data'] = $this->Model_pendaftaran->getpendaftaran1ById($id);
				$this->load->library('pdf');
				$this->pdf->setPaper('A4','potrait');
				$this->filename = "percobaan.pdf";
				// $this->pdf->load_view('percobaan1, $data');
				$this->pdf->load_view('percobaan1', $data);
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





	}
?>