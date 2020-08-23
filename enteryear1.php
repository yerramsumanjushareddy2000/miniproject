<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
?>
<html lang="en">
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<form name="f1" action="ret1.php" method="post">
<div class="form-group">
<label for="yourName" class="col-sm-3 control-label" style="float:left">acadamicyear
<font color="red"><sup>*</sup></font>
</label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">year
</span>
<select name="t2" value="years" style="height:26px;"><option value="18-19">2018-2019</option>
<option value="19-20">2019-2020</option></select>
</div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="col-sm-12 text-center">
<button type="submit" class="btn btn-primary btn-lg" name="submit2" >&nbsp;SUBMIT</button>
</div>

</form>
</body>
</html>