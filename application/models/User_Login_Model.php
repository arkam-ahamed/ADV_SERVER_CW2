<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_Login_Model extends CI_Model
{


	public function validatelogin($emailid, $password, $status)
	{

		$query = $this->db->where(['emailId' => $emailid, 'userPassword' => $password]);
		$account = $this->db->get('tblusers')->row();
		if ($account != NULL) {
			$dbstatus = $account->isActive;


			//verifying status
			if ($dbstatus == $status) {
				return $account->id;
			} else {
				return NULL;
				$this->session->set_flashdata('error', 'Your account is not active');
				redirect('user/login');
			}
		}
		return NULL;
	}
}