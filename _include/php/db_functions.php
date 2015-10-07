<?php
/*
Title:	Datebase Functions
Author:	Joel Meister
Date:	9/20/2015
*/
get_profile();
/*connect to database*/
function db_connect($servername="localhost",
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

/* function get_profile
This is inteded to get the main profile fields from the database
*/
function get_profile(){
	require_once("commonfunctions.php");
	if(!isset($_GET["username"]) || empty($_GET["username"])) {
		echo 'Select a profile';
		die();
	}
	$username = test_input($_GET["username"]);
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
}
?>