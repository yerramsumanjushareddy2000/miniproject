<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
  $u=$_POST['t2'];
  $un=$_SESSION['uname'];
  $con=new mysqli("localhost","root","","project");
$sql="select * from scholarship where acadamicyear='$u' and username='$un'";
if($con->query($sql))
{
	header('location:updatemarks.php');
}
else
{
	echo "<h1>you are not allowed to change marks for this year </h1>";
}
?>
