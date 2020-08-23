<?php
  session_start();
  
if(isset($_POST['submit']))
{
$un=$_POST['t2'];
$p=$_POST['t3'];
$con=new mysqli("localhost","root","","project");
$sql="select * from register where username='$un' and password='$p'";
$result=$con->query($sql);
if($result->num_rows==1)
{
	echo "<h1>sucess</h1>";
	
      $row=$result->fetch_assoc();
      $_SESSION["name"]=$row['name'];
      $_SESSION["uname"]=$un;
	header('Location: openl.php');
}
else
{
	echo "<h1>wrong details.it is better to register</h1>";
}
$con->close();
}
?>