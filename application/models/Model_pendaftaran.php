<?php
class Model_pendaftaran extends CI_model{

    public function __construct()
    {
        parent:: __construct();
    }

    // view data on database
    public function getAlldata()
    {
        $query = $this->db->get('pendaftaran1');
        return $query->result_array();
    }
    // close view data on database

    // input data
    public function StorePendaftaran1()
    {
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

        $status = '0';
        $rata_bing = $this->input->post('rata_bing');
        $rata_mat = $this->input->post('rata_mat');
        $rata_ips = $this->input->post('rata_ips');
        $rata_ipa = $this->input->post('rata_ipa');
        $totalRataRata = $this->input->post('totalRataRata');
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
                echo "gagal disimpan code UE835"; die();
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
                echo "gagal disimpan code UE836"; die();
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
                echo "gagal disimpan code UE837"; die();
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
                echo "gagal disimpan code UE838"; die();
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
        // update
        // $status = $this->input->post('status');


        // echo $rata_bing.' - '.$rata_mat.' - '.$rata_ips.' - '.$rata_ipa.' - '.$totalRataRata;die();

        if ($totalRataRata < 80) {
            echo "Rata Rata tidak memebuhi kriteria";
            die();
        }

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
            'rata_bing'         => $rata_bing,
            'rata_mat'          => $rata_mat,
            'rata_ips'          => $rata_ips,
            'rata_ipa'          => $rata_ipa,
            'totalRataRata'   => $totalRataRata,
            'status' => $status,
        );

        $this->db->insert('pendaftaran1', $data);
    }
    // close input data


    // update data
    public function update()
    {
        // true untuk menghindari sqlinject
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
                echo "gagal disimpan code UE831"; die();
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
                echo "gagal disimpan code UE832"; die();
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
                echo "gagal disimpan code UE833"; die();
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
                echo "gagal disimpan code UE834"; die();
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
        // update
        $status = $this->input->post('status');

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
                'status' => $status,
            );
  
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendaftaran1', $data);
    }
    // close update data

    // delete data
    public function destroyPendaftaran($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pendaftaran1');
    }
    // close delete data

    // get data by id
    public function getpendaftaran1ById($id)
    {
        return $this->db->get_where('pendaftaran1', ['id' => $id])->row_array(); //menampilkan data berdasarkan id
    }

    public function getid_pendaftaranById($id)
    {
        return $this->db->get_where('pendaftaran1',['id_pendaftaran' => $id])->row_array();
    }
    // close get data by id

    // get code
    public function kode()
    {
        $this->db->select('RIGHT(pendaftaran1.id_pendaftaran,2) as id_pendaftaran', FALSE);
        $this->db->order_by('id_pendaftaran','DESC');
        $this->db->limit(1);
        $query = $this->db->get('pendaftaran1');
        if($query->num_rows() <> 0){
            $data = $query->row();
            $kode = intval($data->id_pendaftaran) + 1;
        } 
        else{
            $kode = 1;
        }
       
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "U"."2021".$batas;
        return $kodetampil;
    }
    // close get code
    
    // get

    public function cek_data($table, $where){
        return $this->db->get_where($table, $where);
    }

    public function edit_status($id)
    {
        $status  = $this->input->post('status');
        $this->input->post('id');
        $data = array(
            'status' => $status,
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendaftaran1', $data);
    }



}


?>