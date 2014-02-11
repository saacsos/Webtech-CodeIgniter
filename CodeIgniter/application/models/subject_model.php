<?php
class Subject_Model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function get_all_subjects(){
        $query = $this->db->get('subjects');
        return $query->result();
    }
    
    function get_subject($id){
        $this->db->where('id', $id);
        $query = $this->db->get('subjects');
        return $query->row();
    }
    
    function get_subjects_by_teacher_id($teacher_id=null){
        $this->db->where('teacher_id', $teacher_id);
        $query = $this->db->get('subjects');
        return $query->result();
    }
    
    function create_subject($data){
        $data['created'] = date('Y-m-d H:i:s');
        $data['modified'] = date('Y-m-d H:i:s');
        
        return $this->db->insert('subjects', $data);
    }
    
    function edit_subject($data, $id){
        $data['modified'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        return $this->db->update('subjects', $data);
    }
    
    function delete_subject($id){
        return $this->db->delete('subjects', array(
                     'id' => $id
               ));
    }
}
?>
