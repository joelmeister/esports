<?php

require_once("commonfunctions.php");
require_once("db_functions.php");

/* function get_profile
This is inteded to get the main profile fields from the database
*/
echo 'test'.$_SERVER['QUERY_STRING'].'test2';

$username = test_input($_GET['username']);
if (IsNullOrEmptyString($username)){
	echo 'Select a profile';
}
$db_field = 'USERNAME,ABOUT,ACTUALNAME';
/**/
$con=db_connect();
/**/
$result = mysqli_query($con, "SELECT ".$db_field." FROM ocp_f_member_custom_fields WHERE USERNAME = '" . $username . "'");
if($row = mysqli_fetch_array($result)){
	//echo $row[$db_field];
	echo json_encode(array('username' => $row['USERNAME'],'about' => $row['ABOUT'],'actualname' => $row['ACTUALNAME']));
}else{
	output_error('Invalid user');
}

?>