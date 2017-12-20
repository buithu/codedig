<?php
class Model_table_post_admin extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function count_table_data(){
        $data1 = $this->db->get('post')->num_rows();
        return $data1;
    }
    public function listdata($limit,$start){
        $query = $this->db->get('post',$limit, $start);
        $data = $query->result();
        return $data;
    }
    public function delete($id){
        $this->db->where('stt',$id);
        $this->db->delete('post');
        return true;
    }
    public function insert($data_insert){
        $this->db->insert('post',$data_insert);
    }
    public function getById($id){
        $this->db->where("stt", $id);
        return $this->db->get('post')->result();
   }
   public function update($data_update, $id){
        $this->db->where("stt", $id);
        $this->db->update('post', $data_update);
        
    }
}
?>