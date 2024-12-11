<?php
class Pengguna_model extends CI_Model{
    public function getAll(){
	    $query = $this->db->get('pengguna')->result();
	    return $query;
}
    public function create($data1){
        $query = $this ->db->insert('pengguna', $data1);
        return $query;
}
    public function update($data, $id){
        $this->db->where('user_id',$id);
        $query = $this ->db->update('pengguna',$data);
        return $query;
    }

    public function delete($id){
        $this->db->where('user_id',$id);
        $query = $this->db->delete('pengguna');
        return $query;
    }
}