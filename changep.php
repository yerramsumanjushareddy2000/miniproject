<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
if(isset($_POST['submit3']))
{
$p=$_POST['t1'];
$cp=$_POST['t2'];
$x=$_SESSION['uname'];

$con=new mysqli("localhost","root","","project");
$sql="update register set password='$p',confirmpassword='$cp' where username='$x'";
if($con->query($sql))
{
	echo "<h1>password changed succesfully</h1>";
}
else
{
	echo "error:".$con->error;
}
$con->close();
}
?>