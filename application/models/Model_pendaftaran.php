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
            "almt" => $this->input->post('alamat',true),
            // "nm_file" => $this->input->post('file_upload',true),
            "nm_file" => $this->_uploadFile(),
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

    public function destroyPendaftaran($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pendaftaran1');
    }

    // public function cekkode()
    // {
    //     $query = $this->db->query("SELECT MAX(id_pendaftaran) as ")
    // }
    // paling bawah
    
    private function _uploadFile()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_type'] = 'pdf|img|png|excl';
        $config['file_name'] = $this->id;
        $config['overwrite'] = true;
        $config['max_size'] = 10002400;

        $this->load->library('upload', $config);

        if($this->upload->do_upload('nm_file')){
            return $this->upload->data("file_upload");
        }
        return "default.pdf";
    }

}


?>