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
<script language="javascript">
function yourmarks()
{
var mar=f1.t11.value;
var dm=/\D/;
if(!(dm.test(mar)&&mar>=980))
{
var x=document.getElementById(ymar);
x.innerHTML="YOU ARE NOT ELIGIBLE";
}
}
function mnvalidate()
{
  var m=f1.t8.value;
  var re_md=/\D/;
  var re_ms=/^9|^8|^7|^6/;
  if(m.length<10)
  {    
     var x=document.getElementById("last");
     x.innerHTML="mobile number should be exactly 10 digits";
     flag=1;
  }
  if(re_md.test(m)|| !re_ms.test(m))
  {
       var x=document.getElementById("last");
       x.innerHTML="Mobile Number Should be Digits and starts with 6/7/8/9";
  }
}
function emvalidate()
{
       var e=f1.t5.value;
       var atpos=e.indexOf("@");
	   //alert(atpos);
       var dotpos=e.lastIndexOf(".");
       if(atpos<1 || dotpos<atpos+3 || dotpos+2>=e.length)
          {
       var x=document.getElementById("eid");
       x.innerHTML="Invalid Mail Id";
  }
}
function unvalidate()
{
  var u=f1.t2.value;
  var re_un1=/\d/;
  var re_un2=/[a-z]|[A-Z]/;
  var re_un3=/_/;
  var re_un=/\W/;
    if(u.length<8)
  {
    var x=document.getElementById("uid");
     x.innerHTML="enter More than 8 characters";
flag=1; 
 }
  if(!(re_un1.test(u)&&re_un2.test(u)&&re_un3.test(u))||re_un.test(u))
   {
         var x=document.getElementById("uid");
         x.innerHTML="user name should contains alphanumerics and _";
         flag=1;  
 }
}
 function pwdvalidate()
{
  var p=f1.t3.value;
  var re2=/[A-Z]/;
  var re3=/\W/;
      if(!(p.length>8&&re2.test(p)&&re3.test(p)))
   {
         var x=document.getElementById("pswd");
     x.innerHTML="password should be greater than 8 and Should have Uppercase and Special Symbol";
      flag=1;  
   }
}
function validate()
{
var flag=0;
var n=f1.t1.value;
var u=f1.t2.value;
var p=f1.t3.value;
var cp=f1.t4.value;
var em=f1.t5.value;
var s=f1.t6.value;
var dob=f1.t7.value;
var mn=f1.t8.value;
var i=f1.t9.value;
var acno=f1.t10.value;
var m=f1.t11.value;
var g=f1.t12.value;
if(n==''||u==''||p==''||cp==''||em==''||s==''||dob==''||mn==''||i==''||acno==''||m==''||g=='')
{
alert("please fill all details");

flag=1;
} 
if(flag==0)
{
 document.writeln("<html><body bgcolor=cyan>Welcome to"+f+"  "+l+"</body></html>");
}
}
</script>
</head>
<body>
<form name="f1" action="ted.php" method="post">
<div class="container">
<br>
<br>
<br><br>
<form class="form-horizontal">
<div class="form-group">
<label for="yourComments" class="col-sm-3 control-label">
state<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon ">s</span>
<input type="text" class="form-control" name="t6"
placeholder="Your State" style="width:210px;" required>
</div>
</div>
</div>
<div class="form-group">
<label for="yourState" class="col-sm-3 control-label">
date of birth<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">dmy
</span>
<input type="date" class="form-control" name="t7"
placeholder="enter date of birth" style="width:190px;" required>
</div>
</div>
</div>
<div class="form-group">
<label for="yourmn" class="col-sm-3 control-label">
mobile number<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon glyphicon-phone-alt">
</span>
<input type="number" class="form-control" name="t8"
placeholder="Your name please" onblur="mnvalidate()" style="width:200px;" required><span id="last" style="color:green;"></span>

</div>
</div>
</div>
<div class="form-group">
<label for="yourbn" class="col-sm-3 control-label">
Bank IFSC Code<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">IFSC
</span>
<input type="text" class="form-control" name="t9"
placeholder="enter bank number" style="width:170px;" required>
</div>
</div>

</div>
<div class="form-group">
<label for="yourban" class="col-sm-3 control-label">
Bank A/C name<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">A/C
</span>
<input type="text" class="form-control" name="t10"
placeholder="enter bank number" style="width:170px;" required>
</div>
</div>
</div>
<div class="form-group">
<label for="yourmarks" class="col-sm-3 control-label">
marks<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">MARKS
</span>
<input type="number" class="form-control" name="t11" style="width:200px;"placeholder="enter number" required>
<span id="ymar" style="color:green;"></span>
</div>
</div>
</div>
<div class="form-group">
<label for="yourmarks" class="col-sm-3 control-label">
year<font color="red" size="4px"><sup>*</sup></font></label>
<div class="col-sm-9">
<div class="input-group">
<span class="input-group-addon">
</span>
<select name="t12" value="year"><option value="18-19">2018-2019</option>
<option value="19-20">2019-2020</option></select>
</div>
</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="col-sm-12 text-center">
<button type="submit" class="btn btn-primary btn-lg" name="submit4" >&nbsp;SUBMIT</button>
</div>
</form>
</div>
</form>
</body>
</html>
