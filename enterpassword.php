<html lang="en">
<?php
  session_start();
  if(!isset($_SESSION["uname"])){
    header('Location: log.html#popup');
  }
?>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
function validate()
{
var p=f1.t2.value;
if(p=='')
alert('enter old password');
}
</script>
</head>
<body>
<form name="f1" action="pret.php" method="post">
<div class="form-group">
<label for="yourName" class="col-sm-3 control-label" style="float:left">old password
<font color="red"><sup>*</sup></font>
</label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon glyphicon glyphicon-user">
</span>
<input type="password" class="form-control" name="t2"
placeholder="Your name please" style="width:200px;">
</div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="col-sm-12 text-center">
<button type="submit" class="btn btn-primary btn-lg" name="submit2" onclick="validate()">&nbsp;SUBMIT</button>
</div>

</form>
</body>
</html>