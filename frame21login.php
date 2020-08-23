<?php
session_start();
if(!isset($_SESSION['uname']))
{
header('Location: log.html#popup');
}
else
{
echo "<h1>welcome  ".$_SESSION['uname']."</h1>";
}
?>
<!--<html>
<head>
<style>
h3
{
margin-top:12px;
margin-left:1000px;
overflow:hidden;
}
</style>
</head>
<body>

<h3 style="float:left;">WELCOME</h3>
<input type="text" name="t11" id="text11" style="margin-top:12px;width:300px;">
</body>
</html>-->