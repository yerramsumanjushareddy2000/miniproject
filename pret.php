<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
if(isset($_POST['submit2']))
{
$p=$_POST['t2'];
$con=new mysqli("localhost","root","","project");
$sql="select * from register where password='$p'";
$result=$con->query($sql);
if($result->num_rows==1)
{
	header('location:changepassword.php');
}
$con->close();
}
?>