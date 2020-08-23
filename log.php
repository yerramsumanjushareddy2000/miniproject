<html lang="en">
<head>
<title>Contact Us</title>
<style>
.the-legend {
    border-style: none;
    border-width: 0;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 0;
    width: auto;
    padding: 0 10px;
    border: 1px solid #e0e0e0;
}
.the-fieldset {
    border: 1px solid #e0e0e0;
    padding: 10px;
}</style>
<meta name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<form name="f1" action="valids.php" method="post">
<fieldset class="the-fieldset">
                            <legend class="the-legend">login form</legend>

<div class="form-group">
<label for="yourName" class="col-sm-3 control-label" style="float:left">UserName
<font color="red"><sup>*</sup></font>
</label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon glyphicon glyphicon-user">
</span>
<input type="text" class="form-control" name="t2"
placeholder="Your name please" style="width:200px;" required><span id="yourName" style="color:green;"></span>
</div>
</div>
</div>
<div class="form-group">
<label for="yourName" class="col-sm-3 control-label">Password<font color="red"><sup>*</sup></font>
</label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon glyphicon glyphicon-eye-open">
</span>
<input type="password" class="form-control"
placeholder="enter password" style="width:200px;" name="t3" required><span id="pass" style="color:green;"></span>
</div>
</div>
</div>
<div class="form-group">
<label for="yourName" class="col-sm-3 control-label">
</label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon glyphicon glyphicon-log-in">
</span>
<button class="form-control" name="submit"style="width:200px;align:center;"><a name="login">login</a></button>
</div>
</div>
</div>
</form>
</body>
</html>