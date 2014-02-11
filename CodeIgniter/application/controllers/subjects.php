<?php
class Subjects extends CI_Controller{
    
    public $validation_config = array(
        array(
            'field' => 'subject_code',
            'label' => 'Subject Code',
            'rules' => 'required'
        ),
        array(
            'field' => 'name',
            'label' => 'Subject Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'teacher_id',
            'label' => 'Teacher',
            'rules' => 'required'
        )
    );
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('html', 'url', 'form'));
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="panel panel-danger"><div class="panel-heading">', '</div></div>');
        $this->load->database();
        $this->load->model('subject_model');
        $this->load->model('teacher_model');
    }
    
    public function index(){
        $subjects = $this->subject_model->get_all_subjects();
        $teacher_list = $this->teacher_model->get_list();
        $data_set = array(
            'subjects' => $subjects,
            'teacher_list' => $teacher_list
        );
        $this->load->view('layout/header');
        $this->load->view('subjects/index', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function add(){
        $data = array();
        if($this->input->post('add')){
            $this->form_validation->set_rules($this->validation_config);
            $data = array(
                'subject_code' => trim($this->input->post('subject_code')),
                'name' => trim($this->input->post('name')),
                'teacher_id' => $this->input->post('teacher_id')
            );
            
            if($this->form_validation->run()){
                if($this->subject_model->create_subject($data)){
                    redirect('subjects/index');
                }
            }
        }
        
        $teacher_list = $this->teacher_model->get_list();
        $data_set = array(
            'teacher_list' => $teacher_list,
            'post_data' => $data
        );
        $this->load->view('layout/header');
        $this->load->view('subjects/add', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function edit($id){
        $data = array();
        if($this->input->post('edit')){
            $this->form_validation->set_rules($this->validation_config);
            $data = array(
                'subject_code' => trim($this->input->post('subject_code')),
                'name' => trim($this->input->post('name')),
                'teacher_id' => $this->input->post('teacher_id')
            );
            if($this->form_validation->run()){
                if($this->subject_model->edit_subject($data, $id)){
                    redirect('subjects/index');
                }
            }
        }
        
        $subject = $this->subject_model->get_subject($id);
        $teacher_list = $this->teacher_model->get_list();
        
        $data_set = array(
            'subject' => $subject,
            'teacher_list' => $teacher_list,
            'post_data' => $data
        );
        $this->load->view('layout/header');
        $this->load->view('subjects/edit', $data_set);
        $this->load->view('layout/footer');
    }
    
    public function delete($id){
        if($this->subject_model->delete_subject($id)){
            redirect('subjects/index');
        }
    }
}
?>
