<?php

require_once("commonfunctions.php");
debug_to_console('got here');
//getnewsoflegends();
die();

function getnewsoflegends(){
	$data = file_get_contents('http://www.newsoflegends.com/');
	$regex = '/class="post"/';
	preg_match($regex,$data,$match);
	var_dump($match); 
	echo $match[1];
//	echo json_encode(array('username' => $row['USERNAME']));
}
?>