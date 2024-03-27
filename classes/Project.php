<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}


	//check username availability
	public function check_user($username){
		$sql = "SELECT * FROM tbl_user WHERE username='$username'";
		$result = $this->db->select($sql);

		//return true if matched any username
		if($result){
			return true;
		}else{
			return false;
		}
	}

	//autocomplete textbox
	public function autocomplete_textbox($skill){
		$sql = "SELECT * FROM tbl_skill WHERE skill LIKE '%$skill%'";
		$result = $this->db->select($sql);

		if($result){
			return $result;
		}else{
			return false;
		}
			
		
	}


	//insert message withput page refresh
	public function insert_message($message){
		$sql = "INSERT INTO tbl_message(message) VALUES('$message')";
		$result = $this->db->insert($sql);

		if($result){
			return true;
		}
	}


	//get all message without any refresh
	public function get_all_messages(){
		$sql = "SELECT * FROM tbl_message";
		$result = $this->db->select($sql);
		if($result){
			return $result;
		}else{
			return false;
		}
	}


	//live search functionality with PHP and ajax
	public function live_search($key){
		$sql = "SELECT * FROM tbl_search WHERE username LIKE '%$key%' OR name LIKE '%$key%' OR email LIKE '%$key%'";

		$result = $this->db->select($sql);
		if($result){
			return $result;
		}else{
			return false;
		}
	}

	
}
?>