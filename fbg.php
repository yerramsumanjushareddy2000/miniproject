<?php
$col=$_POST['fc'];
$fsize=$_POST['fs'];
$uname=$_POST['uname'];
echo "<html>";
echo "<body bgcolor=$col text="."'green'>";
echo "<p style='font-size:$fsize'>";
echo "Welcome to $uname</p>";
echo "</body>";
echo "</html>";
?>