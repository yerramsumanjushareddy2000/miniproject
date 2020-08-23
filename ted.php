<?php
session_start();
if(isset($_POST['submit4']))
{
$s=$_POST['t6'];
$d=$_POST['t7'];
$m=$_POST['t8'];
$i=$_POST['t9'];
$acn=$_POST['t10'];
$ma=$_POST['t11'];
$y=$_POST['t12'];
$x=$_SESSION['uname'];
$n=$_SESSION['name'];
$con=new mysqli("localhost","root","","project");
$sql="insert into scholarship values('$s','$d','$m','$i','$acn','$ma','$y','$x','$n');";
if($con->query($sql)===true)
{
	echo "<h1 align='center'>succesfully registered for scholarship</h1>";
}
else
{
	
	echo "<h1>not registered</h1>";
}
$con->close();
}
?>