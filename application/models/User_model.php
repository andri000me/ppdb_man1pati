<?php 

class User_model extends CI_model{
    function __construct()
    {
        parent:: __construct();
    }
    public function getAllUser()
    {
        // echo "ok";
        // return $this->db->get('user')->result_array();
        $query = $this->db->get('user');
        return $query->result_array();
    }
    public function StoreUser()
    {
        // true untuk menghindari sqlinject
        $data = [
            "username" => $this->input->post('username', true),
            "level" => $this->input->post('level', true),
            "password" => $this->input->post('password', true)
        ];
        $this->db->insert('user', $data);
    }

    public function destroyUser($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}



?>