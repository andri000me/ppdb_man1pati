<?php
class Model_gelombang extends CI_model{
    private $_table = "gelombang";
    public $date_gelombang;

    public function __construct()
    {
        parent:: __construct();
    }
    public function getAlldata()
    {
        $query = $this->db->get('gelombang');
        return $query->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->date_gelombang = $post["date_gelombang"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->date_gelombang = $post["date_gelombang"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

}


?>