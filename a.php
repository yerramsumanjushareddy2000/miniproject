<?php
if(isset($_POST['submit1']))
{
$v=$_POST['bt'];
$c=1;
while($c<10)
{
	$val=$v*$c;
	echo "".$v."*".$c."=".$val;
	echo "<br>";
	$c=$c+1;
}
}
?>