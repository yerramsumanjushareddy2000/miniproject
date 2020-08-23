<?php

  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.php#popup');
  }

if(isset($_POST['submit2']))
{
$u=$_POST['t2'];
$x=$_SESSION['uname'];
$con=new mysqli("localhost","root","","project");

$sql1="select * from scholarship where acadamicyear='$u' and username='$x'";
$result1=$con->query($sql1);
if($result1->num_rows>=1)
{
	echo "<table border=6 align=center style='width:300px'>";
	//echo "<tr><th>name</th><th>username</th><th>password</th><th>confirmpassword</th><th>email</th><th>state</th><th>dateofbirth</th><th>mobile</th><th>ifsc</th><th>acno</th><th>marks</th><th>gender</th></tr>";
	while($row=$result1->fetch_assoc())
	{
		echo "<tr><td>".'name'."</td><td>".$_SESSION['name']."</td></tr><tr><td>".'state'."</td><td>".$row['state']."</td></tr><tr><td>".'dateofbirth'."</td><td>".$row['dob']."</td></tr><tr><td>".'mobileno'."</td><td>".$row['mobileno']."</td></tr><tr><td>".'ifsc'."</td><td>".$row['ifsc']."</td></tr><tr><td>".'acno'."</td><td>".$row['account']."</td></tr><tr><td>".'marks'."</td><td>".$row['marks']."</td></tr>";
		
	}
	echo "</table>";
}

	

else
{
	echo "<h1 align=center>noresults</h1>";
}
}
?>