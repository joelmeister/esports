<?php

/*
Title:	Login
Author:	Dylan Boltz
Date:	11/16/2013

The purpose of this code is to return a user their authorization token if the
correct login credentials were provided.

*/

include 'commonfunctions.php';

$admin_email = 'joelmeister1209@gmail.com'; // Your Email
$message_min_length = 5; // Min Message Length

class Login_Form{
	function __construct($details){
		$this->username = test_input(stripslashes($details['username']));
		$this->password = hash('sha256', $details['password']);
	
		$this->response_status = 1;
		$this->response_html = '';
	}

	private function validateEmail(){
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
		if($this->email == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $this->email);
		}
		return empty($string) ? true : false;
	}
	function dbConnect($servername="localhost",
		$username="joelmeis_joel",
		$db_pass="Spiderman0",
		$dbname="joelmeis_test_create_DB"){

		// Create connection
		$con = new mysqli($servername, $username, $db_pass, $dbname);
		if (mysqli_connect_errno($con)){
			output_error('Could not connect to database');
		}
		return $con;
	}
	function getProfile(){
		$db_field = 'EMAIL,PASSWORD';
		$db_table = 'ESPORTS_USERS';
		
		/**/
		$con=$this->dbConnect();
		/**/
		if ($this->validateEmail()){
			$result = mysqli_query($con, "SELECT ".$db_field." FROM ".$db_table." WHERE EMAIL = '" . $this->username . "'");
		}else {
			$db_field = 'USERNAME,PASSWORD';
			$result = mysqli_query($con, "SELECT ".$db_field." FROM ".$db_table." WHERE USERNAME = '" . $this->username . "'");
		}
		
		if($row = mysqli_fetch_array($result)){
			$hash_password = $row['PASSWORD'];
			if ($hash_password == $this->password){
				$this->response_status = 1;
				$this->response_html = "<p>Success!</p>";
			} else {
				$this->response_status = 0;
				$this->response_html = "<p>Password incorrect</p>";
			}
		} else {
			$this->response_status = 0;
			$this->response_html = "<p>Username or email does not exist</p>";
		}
		mysqli_close($con);
	}
	function validateFields(){
		// Check that parameters are not null
		if(empty($this->username) || empty($this->password)){
			$this->response_status = 0;
			$this->response_html = "<p>Insufficient parameters provided</p>";
		} else {
			$this->getProfile();
		}
	}
	function sendRequest(){
		header('Content-Type: application/json');
		$response['username'] = '';
		$this->validateFields();
		
		$response = array();
		$response['status'] = $this->response_status;	
		$response['html'] = $this->response_html;
		if ($this->response_status){
			$response['username'] = $this->username;
		} else {
			$response['username'] = '';
		}
		
		echo json_encode($response);
	}
}

$login_form = new Login_Form($_POST, $admin_email, $message_min_length);
$login_form->sendRequest();

die();

?>