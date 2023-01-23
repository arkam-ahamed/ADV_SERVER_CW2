<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Question_Model extends CI_Model
{

    public function getAllQuestions()
    {
        $query = $this->db->get('questions');
        return $query->result();
    }

    public function getAnswers($question_id)
    {
        $sql = "SELECT * FROM answers WHERE id = '" . $question_id . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insertQuestion($data)
    {
        return $this->db->insert('questions', $data);
    }
}