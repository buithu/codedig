<?php
class Model_list extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function test(){
    	
	   
	    $data1 = $this->db->get('post')->num_rows();
	    return $data1;
    }
    public function listUser($limit,$start){
	    $query = $this->db->get('post',$limit, $start);
      	$data = $query->result();
        return $data;
    }
    public function del($id){
        $this->db->where('stt',$id);
        $this->db->delete('post');
        return true;
    }
    public function insertp($data_insert){
        $this->db->insert('post',$data_insert);
    }
    public function getUserById($id){
        $this->db->where("stt", $id);
        return $this->db->get('post')->result();
   }
   public function update($data_update, $id){
        $this->db->where("stt", $id);
        $this->db->update('post', $data_update);
        
    }
}
?>