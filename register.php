<?php
require "config.php";

$name = $_POST["t1"];
$address = $_POST["t2"];
$mobile = $_POST["t3"];
$uname = $_POST["t5"];
$passwd = $_POST["t6"];

$sql = "SELECT * FROM user_details where uname='$uname' ";

$result = $conn->query($sql);

if (!$result->num_rows>0) 
{
	$target_path = "photo/";  
	$target_path = $target_path.basename( $_FILES['t4']['name']);   
	
	if(move_uploaded_file($_FILES['t4']['tmp_name'], $target_path)) 
	{  
			echo "File uploaded successfully!";  
	} 
	else
	{  
			echo "Sorry, file not uploaded, please try again!";  
	}  
    
	$sql = "insert into user_details(uname,passwd,name,address,mobile,photo)values('$uname','$passwd','$name','$address',$mobile,'$target_path') ";
    if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} 
else 
{
   echo "Username already Exist";
}

$conn->close();
?>
<h2><a href = "index.html">HOME</a></h2>