<?php
require "config.php";

$t1 = $_POST["t1"];
$t2 = $_POST["t2"];

$sql = "SELECT * FROM user_details where uname='$t1' ";

$result = $conn->query($sql);

if ($result->num_rows>0) 
{
    
    while($row = $result->fetch_assoc()) 
	{
        if ($row["passwd"]==$t2) 
			{
				 session_start();
				 $_SESSION['user'] = $row["name"];
				 $_SESSION['photo'] = $row["photo"];
				 header("location: welcome.php");
			} 
		else
			{
				echo "Password is Incorrect";
			} 	
    }
} 
else 
{
   echo "Username is Incorrect";
}
$conn->close();
?>