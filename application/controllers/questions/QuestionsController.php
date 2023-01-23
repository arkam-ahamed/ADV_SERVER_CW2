<?php
defined('BASEPATH') or exit('No direct script access allowed');
class QuestionsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Question_Model');
    }

    public function index()
    {
        $userid = $this->session->userdata('uid');
        $this->load->model('User_Profile_Model');
        $profiledetails = $this->User_Profile_Model->getprofile($userid);
        $questions['questions'] = $this->Question_Model->getAllQuestions();
        $question_id = $this->input->post('question_id');
        $answers['answers'] = $this->Question_Model->getAnswers($question_id);
        $this->load->view('questions/questions_view', ['profile' => $profiledetails, 'questions' => $questions, 'answers' => $answers]);
    }


    public function ask()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('question_title', 'questionTitle', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('questions/QuestionsController');
        } else {
            $id = $this->uri->segment(4);
            $data = array(
                'questionTitle' => $this->input->post('question_title'),
                'user_id' => $id,
            );

            $this->Question_Model->insertQuestion($data);

            redirect("questions/QuestionsController");
        }
    }
}