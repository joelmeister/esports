<?php

require_once('DBReader.php');
class ProfileReader extends DBReader
{
	/*Get main profile info for profile.php page*/
	function get_profile(){
		if(!isset($_GET["username"]) || empty($_GET["username"])) {
			echo 'Select a profile';
			die();
		}
		/**/
		$con = $this->db_connect();
		
		/**/
		$username = $this->test_input($_GET["username"]);
		$sql = "SELECT * FROM users WHERE username = '" . $username . "'";
		$result = mysqli_query($con, $sql);
		if($row = mysqli_fetch_array($result)){
				$sql = "SELECT * FROM profile WHERE user_id = '" . $row['id'] . "'";
				$result = mysqli_query($con, $sql);

			$profileData = $this->parse_data($row);
			echo json_encode($profileData);
		}else{
			$this->output_error('Invalid user');
		}
	}
	function parse_data($info){
		return array(
				'username' => $info['username'],
				'about' => $info['about'],
				'actualname' => $info['firstname'],
				'email' => $info['email'],
				'twitter' => $info['twitter'],
				'facebook' => $info['facebook'],
				'google' => $info['google'],
				'linkedin' => $info['linkedin'],
				'lol' => $info['lol'],
				'dota' => $info['dota'],
				'csgo' => $info['csgo'],
				'avatar' => $info['avatar']
			);
	}
}

$profile = new ProfileReader();
$profile->get_profile();

?>
