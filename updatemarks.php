<?php
session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
if(isset($_POST['submit1']))
{
	$m=$_POST['t1'];
	$u=$_POST['t2'];
	$con=new mysqli("localhost","root","","project");
$x=$_SESSION['uname'];

$sql="update scholarship set marks='$m' where username='$x' and acadamicyear='$u'";
if($con->query($sql))
{
	echo "<h1>succesfully changed marks</h1>";
}
else
{
	echo "<h1>not updated</h1>";
}
$con->close();
}
?>