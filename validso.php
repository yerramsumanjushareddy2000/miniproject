<?php
  session_start();
  
if(isset($_POST['submit']))
{
$un=$_POST['t2'];
$p=$_POST['t3'];
	echo "<h1>sucess</h1>";
if($un=='admin'&&$p=="admin")
{

	
      $_SESSION["uname"]=$un;
	header('Location: open2.php');
}
else
{
	echo "<h1>wrong details.it is better to register</h1>";
}
$con->close();
}
?>