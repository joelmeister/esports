<?php
require_once("DBReader.php");
$admin_email = 'joelmeister1209@gmail.com'; // Your Email
$message_min_length = 5; // Min Message Length

class LoginReader extends DBReader
{
	function __construct($details){
		$this->username = test_input(stripslashes($details['username']));
		$this->password = hash('sha256', $details['password']);
	
		$this->response_status = 1;
		$this->response_html = '';
	}

	private function validateEmail(){
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
		if(!$this->email) { 
			return false;
		} else {
			$string = preg_replace($regex, '', $this->email);
		}
		return empty($string) ? true : false;
	}
	function getProfile(){
		$db_table = 'users';
		$db_field = 'email,username,password';
		
		$con=$this->db_connect();
        $sql = "SELECT ".$db_field." FROM ".$db_table." WHERE ";
		if ($this->validateEmail())
        {
			$sql .= " email = '" . $this->username . "'";
		}
        else 
        {
			$sql .= " username = '" . $this->username . "'";
		}
        $result = mysqli_query($con, $sql);
		
		if($row = mysqli_fetch_array($result)){
			$hash_password = $row['password'];
			if (!strcmp($hash_password,$this->password))
            {
				$this->response_status = 1;
				$this->response_html = "<p>Success!</p>";
			} 
            else 
            {
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

$login_form = new LoginReader($_POST, $admin_email, $message_min_length);
$login_form->sendRequest();

die();

?>
