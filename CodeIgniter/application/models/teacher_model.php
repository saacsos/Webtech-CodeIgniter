<?php
class Teacher_Model extends CI_Model{
    
    public $table_name = 'teachers';
    
    function __construct() {
        parent::__construct();
    }
    
    function get_all(){
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    
    function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }
    
    function get_list(){
        $query = $this->db->get($this->table_name);
        $query_results = $query->result();
        $result = array(
            '' => '=== Select Teacher ==='
        );
        foreach($query_results as $q):
            $result[$q->id] = $q->firstname . ' ' . $q->lastname;
        endforeach;
        return $result;
    }
    
    function create($data){
        $data['created'] = date('Y-m-d H:i:s');
        $data['modified'] = date('Y-m-d H:i:s');
        
        return $this->db->insert($this->table_name, $data);
    }
    
    function edit($data, $id){
        $data['modified'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        return $this->db->update($this->table_name, $data);
    }
    
    function delete($id){
        return $this->db->delete($this->table_name, array(
                     'id' => $id
               ));
    }
}
?>
