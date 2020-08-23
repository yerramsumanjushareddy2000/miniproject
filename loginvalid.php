<?php

  $us=$_POST['t2'];
  $pwd=$_POST['t3'];
session_start();
if(isset($_SESSION['us']))
{
  $us=$_POST['t2'];
  $pwd=$_POST['t3'];
  $con=new mysqli("localhost","root","","project");
  $sql="select * from register where uername='$us' and password='$pwd'";
  $result=$con->query($sql);
  echo "this id".$result."name";
  if($result->num_rows==1)
  { 
      $row=$result->fetch_assoc();
      $_SESSION["name"]=$row['name'];
      $_SESSION["uname"]=$us;
    header('Location: openl.php');
	echo "<h1>welcome ".$_SESSION['name'];
  }
  else
  {
    echo "<h1>wrong login credentials</h1>";
  }
  $con->close();
}
?>

