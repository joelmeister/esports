<?php
buildPlayersTable();
function buildPlayersTable(){
	/*

	<td class="center">
	<a href="profile.php?username=lessthanwaffles">View Profile</a>
	</td>
	*/
	require_once("commonfunctions.php");
	/**/
	$con=db_connect();
	$SQLCommand = "SELECT * FROM ESPORTS_RECRUIT_USER";
	/**/
	$result = mysqli_query($con, $SQLCommand);
	// loop to give you the data in an associative array so you can use it however.
	while($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		
		echo "<td class='center'>";
		echo "<a href='profile.php?username=";
		echo $row['username']."'>".$row['username']."</a></td>";
		
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['state']."</td>";
		echo "<td>".$row['country']."</td>";
		echo "<td>".$row['team']."</td>";
		echo "<td>".$row['looking']."</td>";
		echo "<td>".$row['game']."</td>";
		echo "</tr>";
	}
}
?>