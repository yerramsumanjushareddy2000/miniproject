<?php
	if (isset($_POST['submit1']))
	{
	$con=new mysqli("localhost","root","","mydb");
			$sql2="create table manjudruvi(UserName varchar(100),Password varchar(100),Emailid varchar(30),state varchar(100),dateofbirth date,mobileno number,ifsc varchar(100),acno varchar(100),marks int,gender varchar(10));";
			if($con->query($sql2)===true)
			{
			echo "<h1>success</h1>";
			}
			else
			{		
				echo "Error:".$sql2."<br>".$con->error;
			}
	}
?>