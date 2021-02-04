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
			$id_pendaftaran = $this->input->post('id_pendaftaran');
			$nm_lengkap = $this->input->post('nama_lengkap');
			$tmp_lahir = $this->input->post('tempat_lahir');
			$tgl_lahir = $this->input->post('tanggal_lahir');
			$jns_kelamin = $this->input->post('jenis_kelamin');
			$agm = $this->input->post('agama');
			$no_hp = $this->input->post('no_hp');
			$nm_ortu = $this->input->post('nama_ortu');
			$no_hp_ortu  = $this->input->post('no_hportu');
			$asl_sekolah = $this->input->post('asal_smp');
			$email = $this->input->post('email');
			$almt = $this->input->post('alamat');
			$data = array(
				'id_pendaftaran' => $id_pendaftaran,
				'nm_lengkap' => $nm_lengkap,
				'tmp_lahir' => $tmp_lahir,
				'tgl_lahir' => $tgl_lahir,
				'jns_kelamin' => $jns_kelamin,
				'agm' => $agm,
				'no_hp' => $no_hp,
				'nm_ortu' => $nm_ortu,
				'no_hp_ortu' => $no_hp_ortu,
				'asl_sekolah' => $asl_sekolah,
				'email' => $email,
				'almt' => $almt,
			);
		
			$this->db->where('id_pendaftaran',$id);
			$this->load->library('pdf');
			$this->pdf->setPaper('A4','potrait');
			$this->filename = "percobaan.pdf";
			// $this->pdf->load_view('percobaan1, $data');
			$this->pdf->load_view('percobaan1', $data);
			// $this->load->view('percobaan1');
		}

		function cetak_kartu($id)
		{
			$data['isi'] = $this->Model_pendaftaran->getid_pendaftaranById($id);
			$this->load->view('percobaan1',$data);
		}

		// simpan data on controller
		public function simpan_data()
		{
			$this->load->database();
			        // vardat
					$id_pendaftaran = $this->input->post('id_pendaftaran');
					$nm_lengkap = $this->input->post('nama_lengkap');
					$tmp_lahir = $this->input->post('tempat_lahir');
					$tgl_lahir = $this->input->post('tanggal_lahir');
					$jns_kelamin = $this->input->post('jenis_kelamin');
					$agm = $this->input->post('agama');
					$no_hp = $this->input->post('no_hp');
					$nm_ortu = $this->input->post('nama_ortu');
					$no_hp_ortu  = $this->input->post('no_hportu');
					$asl_sekolah = $this->input->post('asal_smp');
					$email = $this->input->post('email');
					$almt = $this->input->post('alamat');
					// save file(upload)
			
					$nm_file = $_FILES['file_upload'];
					if($nm_file=''){}else{
						$config['upload_path']          = './upload/rapot/';
						$config['allowed_types']        = 'pdf|jpg|png';
						// $config['file_name']            = $this->id_pendaftaran;
						$config['overwrite']			= true;
						$config['max_size']             = 5024; // 1MB
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$this->load->library('upload',$config);
						if(! $this->upload->do_upload('file_upload')){
							echo "gagal disimpan"; die();
						}else{
							$nm_file=$this->upload->data('file_name');
						}
					};
			
					$nm_file_kk = $_FILES['file_upload_kk'];
					if($nm_file_kk=''){}else{
						$config['upload_path']          = './upload/kk/';
						$config['allowed_types']        = 'pdf|jpg|png';
						// $config['file_name']            = $this->id_pendaftaran;
						$config['overwrite']			= true;
						$config['max_size']             = 5024; // 1MB
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$this->load->library('upload',$config);
						if(! $this->upload->do_upload('file_upload_kk')){
							echo "gagal disimpan"; die();
						}else{
							$nm_file_kk=$this->upload->data('file_name');
						}
					};
			
					$nm_file_ak = $_FILES['file_upload_ak'];
					if($nm_file_ak=''){}else{
						$config['upload_path']          = './upload/ak/';
						$config['allowed_types']        = 'pdf|jpg|png';
						// $config['file_name']            = $this->id_pendaftaran;
						$config['overwrite']			= true;
						$config['max_size']             = 5024; // 1MB
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$this->load->library('upload',$config);
						if(! $this->upload->do_upload('file_upload_ak')){
							echo "gagal disimpan"; die();
						}else{
							$nm_file_ak=$this->upload->data('file_name');
						}
					};
			
					$nm_file_foto = $_FILES['file_upload_foto'];
					if($nm_file_foto=''){}else{
						$config['upload_path']          = './upload/foto/';
						$config['allowed_types']        = 'pdf|jpg|png';
						// $config['file_name']            = $this->id_pendaftaran;
						$config['overwrite']			= true;
						$config['max_size']             = 5024; // 1MB
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$this->load->library('upload',$config);
						if(! $this->upload->do_upload('file_upload_foto')){
							echo "gagal disimpan"; die();
						}else{
							$nm_file_foto=$this->upload->data('file_name');
						}
					};
			
					// close save file(upload)
			
					$jurusan = $this->input->post('jurusan');
					$sem3_nl1 = $this->input->post('sem3_nl1');
					$sem3_nl2 =$this->input->post('sem3_nl2');
					$sem3_nl3 =$this->input->post('sem3_nl3');
					$sem3_nl4 =$this->input->post('sem3_nl4');
					$sem4_nl1 =$this->input->post('sem4_nl1');
					$sem4_nl2 =$this->input->post('sem4_nl2');
					$sem4_nl3 =$this->input->post('sem4_nl3');
					$sem4_nl4 =$this->input->post('sem4_nl4');
					$sem5_nl1 =$this->input->post('sem5_nl1');
					$sem5_nl2 =$this->input->post('sem5_nl2');
					$sem5_nl3 =$this->input->post('sem5_nl3');
					$sem5_nl4 =$this->input->post('sem5_nl4');
					// close vardat
			
					$data = array(
						'id_pendaftaran' => $id_pendaftaran,
						'nm_lengkap' => $nm_lengkap,
						'tmp_lahir' => $tmp_lahir,
						'tgl_lahir' => $tgl_lahir,
						'jns_kelamin' => $jns_kelamin,
						'agm' => $agm,
						'no_hp' => $no_hp,
						'nm_ortu' => $nm_ortu,
						'no_hp_ortu' => $no_hp_ortu,
						'asl_sekolah' => $asl_sekolah,
						'email' => $email,
						'almt' => $almt,
						'nm_file' => $nm_file,
						'nm_file_kk' => $nm_file_kk,
						'nm_file_ak' => $nm_file_ak,
						'nm_file_foto' => $nm_file_foto,
						'jurusan' => $jurusan,
						'sem3_nl1' => $sem3_nl1,
						'sem3_nl2' => $sem3_nl2,
						'sem3_nl3' => $sem3_nl3,
						'sem3_nl4' => $sem3_nl4,
						'sem4_nl1' => $sem4_nl1,
						'sem4_nl2' => $sem4_nl2,
						'sem4_nl3' => $sem4_nl3,
						'sem4_nl4' => $sem4_nl4,
						'sem5_nl1' => $sem5_nl1,
						'sem5_nl2' => $sem5_nl2,
						'sem5_nl3' => $sem5_nl3,
						'sem5_nl4' => $sem5_nl4,
					);
			$this->db->insert('pendaftaran1', $data);
			redirect('Mastercontrol');
		}
		// ./simpan data on controller

		// cek data

		// ./cek data



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