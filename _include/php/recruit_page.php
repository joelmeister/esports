<?php
require_once('DBReader.php');
class RecruitReader extends DBReader
{
    function buildPlayersTable(){
        /*
           <td class="center">
           <a href="profile.php?username=lessthanwaffles">View Profile</a>
           </td>
         */
        $con=$this->db_connect();
        $sql = "SELECT * FROM recruit_users";
        /**/
        if($result = mysqli_query($con, $sql))
        {
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
        else
        {
			$this->output_error(mysqli_error($con));
        }
    }
}

$recruitReader = new RecruitReader();
$recruitReader->buildPlayersTable();
?>
