<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AnswersController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Answer_Model');
    }

    public function index()
    {
        $userid = $this->session->userdata('uid');
        $this->load->model('User_Profile_Model');
        $this->load->model('Question_Model');
        $questions['questions'] = $this->Question_Model->getAllQuestions();
    }



    public function view($question_id)
    {
        $data['answers'] = $this->Question_Model->getAnswers($question_id);
        $this->load->view('questions/questions_view', $data);
    }


    public function ask()
    {
        $question_id = $this->uri->segment(4);
        $id = $this->uri->segment(5);
        $data = array(
            'answer' => $this->input->post('answer_title'),
            'user_id' => $id,
            'id' => $question_id
        );

        $answer = $this->Answer_Model->insertAnswer($data);

        redirect("questions/QuestionsController");

    }
}