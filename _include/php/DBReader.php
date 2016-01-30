<?php
include("commonfunctions.php");
class DBReader
{
		function db_connect($servername="localhost",
			$username="joelmeis_jrm",
			$db_pass="Spiderman0",
			$dbname="joelmeis_esports"){

			// create connection
			$con = new mysqli($servername, $username, $db_pass, $dbname);
			if (mysqli_connect_errno($con)){
				$this->output_error('could not connect to database');
			}
			return $con;
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

		function output_error($errormessage){
			http_response_code(400);
			echo json_encode(array('error' => $errormessage));
			exit;
		}

		function return_success(){
			echo json_encode(array('result' => 'success'));
		}

		function get_day_num($day){
			$day_nums = array('s' => 0, 'm' => 1, 't' => 2, 'w' => 3, 
				'r' => 4, 'f' => 5, 'a' => 6);
			return $day_nums[$day];
		}

		function debug_to_console($data) {
			if(is_array($data) || is_object($data)) {
				echo("<script>console.log('php: ".json_encode($data)."');</script>");
			} else {
				echo("<script>console.log('php: $data');</script>");
			}
		}
}
?>
