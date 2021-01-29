<?php
class Model_pendaftaran extends CI_model{

    public function __construct()
    {
        parent:: __construct();
    }

    public function getAlldata()
    {
        $query = $this->db->get('pendaftaran1');
        return $query->result_array();
    }

    public function StorePendaftaran1()
    {
        // $berkas = $_FILES['file_upload'];
        // if($berkas = ''){}else{
        //     $config['upload_path'] = './upload/';
        //     $config['allowed_type'] = 'pdf|img|png|excl';
        //     $config['file_name'] = $this->id;
        //     $config['overwrite'] = true;
        //     $config['max_size'] = 100024;

        //     $this->load->library('upload', $config);
        //     if(! $this->upload->do_upload('file_upload')){
        //         echo "<script>alert('upload batal')</script>"; die();
        //     }else{
        //         $berkas=$this->upload->data('file_name');
        //     }
        // }
        $data = [
            "id_pendaftaran" => $this->input->post('id_pendaftaran',true),
            "nm_lengkap" => $this->input->post('nama_lengkap',true),
            "tmp_lahir" => $this->input->post('tempat_lahir',true),
            "tgl_lahir" => $this->input->post('tanggal_lahir',true),
            "jns_kelamin" => $this->input->post('jenis_kelamin',true),
            "agm" => $this->input->post('agama',true),
            "no_hp" => $this->input->post('no_hp',true),
            "nm_ortu" => $this->input->post('nama_ortu',true),
            "no_hp_ortu" => $this->input->post('no_hportu',true),
            "asl_sekolah" => $this->input->post('asal_smp',true),
            "email" => $this->input->post('email',true),
            "almt" => $this->input->post('alamat',true),
            // "nm_file" => $this->input->post('file_upload',true),
            "nm_file" => $this->_uploadFile(),
            // "nm_file" => $berkas,
            "jurusan" => $this->input->post('jurusan',true),
            "sem3_nl1" => $this->input->post('sem3_nl1',true),
            "sem3_nl2" => $this->input->post('sem3_nl2',true),
            "sem3_nl3" => $this->input->post('sem3_nl3',true),
            "sem3_nl4" => $this->input->post('sem3_nl4',true),
            "sem4_nl1" => $this->input->post('sem4_nl1',true),
            "sem4_nl2" => $this->input->post('sem4_nl2',true),
            "sem4_nl3" => $this->input->post('sem4_nl3',true),
            "sem4_nl4" => $this->input->post('sem4_nl4',true),
            "sem5_nl1" => $this->input->post('sem5_nl1',true),
            "sem5_nl2" => $this->input->post('sem5_nl2',true),
            "sem5_nl3" => $this->input->post('sem5_nl3',true),
            "sem5_nl4" => $this->input->post('sem5_nl4',true)

        ];
        $this->db->insert('pendaftaran1', $data);
    }
    public function update()
    {
        // true untuk menghindari sqlinject
        $data = [
            "id_pendaftaran" => $this->input->post('id_pendaftaran',true),
            "nm_lengkap" => $this->input->post('nama_lengkap',true),
            "tmp_lahir" => $this->input->post('tempat_lahir',true),
            "tgl_lahir" => $this->input->post('tanggal_lahir',true),
            "jns_kelamin" => $this->input->post('jenis_kelamin',true),
            "agm" => $this->input->post('agama',true),
            "no_hp" => $this->input->post('no_hp',true),
            "nm_ortu" => $this->input->post('nama_ortu',true),
            "no_hp_ortu" => $this->input->post('no_hportu',true),
            "asl_sekolah" => $this->input->post('asal_smp',true),
            "email" => $this->input->post('email',true),
            "almt" => $this->input->post('alamat',true),
            // "nm_file" => $this->input->post('file_upload',true),
            "nm_file" => $this->_uploadFile(),
            // "nm_file" => $berkas,
            "jurusan" => $this->input->post('jurusan',true),
            "sem3_nl1" => $this->input->post('sem3_nl1',true),
            "sem3_nl2" => $this->input->post('sem3_nl2',true),
            "sem3_nl3" => $this->input->post('sem3_nl3',true),
            "sem3_nl4" => $this->input->post('sem3_nl4',true),
            "sem4_nl1" => $this->input->post('sem4_nl1',true),
            "sem4_nl2" => $this->input->post('sem4_nl2',true),
            "sem4_nl3" => $this->input->post('sem4_nl3',true),
            "sem4_nl4" => $this->input->post('sem4_nl4',true),
            "sem5_nl1" => $this->input->post('sem5_nl1',true),
            "sem5_nl2" => $this->input->post('sem5_nl2',true),
            "sem5_nl3" => $this->input->post('sem5_nl3',true),
            "sem5_nl4" => $this->input->post('sem5_nl4',true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendaftaran1', $data);
    }
    

    public function destroyPendaftaran($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pendaftaran1');
    }

    public function getpendaftaran1ById($id)
    {
        return $this->db->get_where('pendaftaran1', ['id' => $id])->row_array(); //menampilkan data berdasarkan id
    }

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


    
    public function _uploadFile()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_type'] = 'pdf|img|png|excl';
        $config['file_name'] = $this->id;
        $config['overwrite'] = true;
        $config['max_size'] = 10002400;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('nm_file')){
            return $this->upload->data("file_upload");
        }else{
            return "default.pdf";
        }

    }

}


?>