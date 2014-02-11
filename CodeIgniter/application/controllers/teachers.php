<?php
class Teachers extends CI_Controller{
    
    public $validation_config = array(
        array(
            'field' => 'firstname',
            'label' => 'Firstname',
            'rules' => 'required'
        ),
        array(
            'field' => 'lastname',
            'label' => 'Lastname',
            'rules' => 'required'
        )
    );
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'url', 'form'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="panel panel-danger"><div class="panel-heading">', '</div></div>');
        $this->load->database();
        $this->load->model('teacher_model');
    }
    
    public function index(){
        $teachers = $this->teacher_model->get_all();
        $data_set = array(
            'teachers' => $teachers
        );
        $this->load->view('layout/header');
        $this->load->view('teachers/index', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function add(){
        $data = array();
        if($this->input->post('add')){
            $this->form_validation->set_rules($this->validation_config);
            $data = array(
                'firstname' => trim($this->input->post('firstname')),
                'lastname' => trim($this->input->post('lastname'))
            );
            if($this->form_validation->run()){
                if($this->teacher_model->create($data)){
                    redirect('teachers/index');
                }
            }
        }
        
        $data_set = array(
            'post_data' => $data
        );
        
        $this->load->view('layout/header');
        $this->load->view('teachers/add', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function edit($id){
        $data = array();
        if($this->input->post('edit')){
            $this->form_validation->set_rules($this->validation_config);
             $data = array(
                'firstname' => trim($this->input->post('firstname')),
                'lastname' => trim($this->input->post('lastname'))
            );
            if($this->form_validation->run()){
                if($this->teacher_model->edit($data, $id)){
                    redirect('teachers/index');
                }
            }
        }
        
        $teacher = $this->teacher_model->get($id);
        
        $data_set = array(
            'teacher' => $teacher,
            'post_data' => $data
        );
        $this->load->view('layout/header');
        $this->load->view('teachers/edit', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function delete($id){
        if($this->teacher_model->delete($id)){
            redirect('teachers/index');
        }
    }
}
?>
