<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
?>
<html>
<head bgcolor="gray">
<frameset border="1" rows="12%,8%,*" noresize="noresize" scrolling="no">
<frame name="f1" src="./top1.html">
<frame name="f2" src="frame2login.php" noresize="noresize">
<frameset border="1" cols="20%,*" noresize="noresize"> 
<frame name="f3" src="./divisio.html">
<frame name="f4" src="">
</frameset>
</head>
<body bgcolor="gray">
</body>
</html>