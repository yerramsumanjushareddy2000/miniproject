<?php
session_start();
if(isset($_POST['submit1']))
{
$n=$_POST['t1'];
$un=$_POST['t2'];
$p=$_POST['t3'];
$cp=$_POST['t4'];
$g=$_POST['t12'];
$con=new mysqli("localhost","root","","project");
$sql="insert into register values('$n','$un','$p','$cp','$e','$g');";
if($con->query($sql)===true)
{
	header('location:log.php');
}
else
{
	
	header('location:nologin.php');
}
$con->close();
}
?>