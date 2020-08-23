<?php

  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }

if(isset($_POST['submit2']))
{
$u=$_POST['t2'];
$x=$_SESSION['uname'];
$con=new mysqli("localhost","root","","project");

$sql1="select * from scholarship where acadamicyear='$u'";
$result1=$con->query($sql1);
if($result1->num_rows>=1)
{
	echo "<table border=6 align=center style='width:400px'>";
	echo "<tr><th>name</th><th>username</th><th>state</th><th style='width:100px;'>date of birth</th><th>mobile no</th><th>ifsc</th><th>account no</th><th>marks</th></tr>";
	while($row=$result1->fetch_assoc())
	{
		echo "<tr><td>".$row['name']."</td><td>".$row['username']."</td><td>".$row['state']."</td><td>".$row['dob']."</td><td>".$row['mobileno']."</td><td>".$row['ifsc']."</td><td>".$row['account']."</td><td>".$row['marks']."</td></tr>";
	
	}
	echo "</table>";
}

	

else
{
	echo "<h1 align=center>noresults</h1>";
}
}
?>