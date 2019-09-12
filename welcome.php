<?php
session_start();
if(!isset($_SESSION['user']))
	{
      header("location:index.html");
      die();
	}
$x = $_SESSION['user'];
$y = $_SESSION['photo'];
?>

<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> Welcome PAGE </TITLE>
	</HEAD>
	<BODY>
		 <H1> Welcome <?php echo $x; ?> </H1>.
		 <img src="<?php echo $y; ?>" />
		 
		 <h2><a href = "logout.php">Sign Out</a></h2>
		 
		 
	</BODY>
</HTML>



