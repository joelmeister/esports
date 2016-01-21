<?php

class Profile{
	/*Get main profile info for profile.php page*/
	function get_profile(){
		require_once("commonfunctions.php");
		require_once("db_functions.php");	
		if(!isset($_GET["username"]) || empty($_GET["username"])) {
			echo 'Select a profile';
			die();
		}
		$username = test_input($_GET["username"]);
		$sql = "SELECT * FROM ESPORTS_PROFILE WHERE USERNAME = '" . $username . "'";
		/**/
		$con = db_connect();
		/**/
		$result = mysqli_query($con, $sql);
		
		if($row = mysqli_fetch_array($result)){
			$profileData = $this->parse_data($row);
			echo json_encode($profileData);
		}else{
			output_error('Invalid user');
		}
	}
	function parse_data($info){
		return array(
				'username' => $info['USERNAME'],
				'about' => $info['ABOUT'],
				'actualname' => $info['ACTUALNAME'],
				'email' => $info['EMAIL'],
				'twitter' => $info['TWITTER'],
				'facebook' => $info['FACEBOOK'],
				'google' => $info['GOOGLE'],
				'linkedin' => $info['LINKEDIN'],
				'lol' => $info['LOL'],
				'dota' => $info['DOTA'],
				'csgo' => $info['CSGO'],
				'avatar' => $info['AVATAR']
			);
	}
}

$profile = new Profile;
$profile->get_profile();

?>