<?php
$n=$_POST['bt'];
$f=1;
while($n > 0)
{
$f=$f*$n;
$n=$n-1;
}
echo " ".$f;
?>