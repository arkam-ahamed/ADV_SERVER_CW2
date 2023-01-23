<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Answer_Model extends CI_Model
{

    public function getAnswers($question_id)
    {
        $this->db->where('id', $question_id);
        $query = $this->db->get('answers');
        return $query->result();
    }

    public function insertAnswer($data)
    {
        return $this->db->insert('answers', $data);
    }
}
