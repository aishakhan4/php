
<html>
<head>
<title>registration</title>
<style type="text/css">
body{
background-image:url("photo/main.jpg");
}
.main
{
	position:absolute;
	box-sizing:border-box;
	height:500px;
	width:35%;
	margin-left:300px;
	margin-top:37px;
	padding:2px;
	text-align:center;
background-color:#cccccc;
border-radius:20% 2% 2% 20%;
}
.main h1
{
	margin:0;
	padding:0;
	font-size:22px;
}
.main  p
{
	width:100%
	margin-top:10px;
	font-weight:bold;
}
.main input[type="text"],input[type="password"]
{
	border:none;
	border-bottom:1px solid #000000;
	background:transparent;
	outline:none;
	height:40px;
	color:#000000;
	font-size:16px;
	margin-top:0px;
}
.main input
{
	width:95%;
	margin:bottom:10px;
}
.main input:focus
{
	box-shadow:2px 2px 6px 5px #333399;font-size:20px;
}
.main input[type="submit"]
{
	border:none;
	outline:none;
	height:40px;
	width:30%;
	background:#333399;
	color:#ffffff;
	font-size:18px;
	border-radius:20px;
	margin-top:35px;
}
.main input[type="submit"]:focus
{
	box-shadow:2px 2px 6px 5px #3333ff;
}
.main input[type="submit"]:hover
{
	cursor:pointer;
	background:#39dc79;
	color:#000;
}

</style>
</head>
<body>
<div class ="main">
<center><h1>Registration</h1><br/><br/>
<form id="frm" name="frm" action="" method="post">
<p>User name</p>
<input type="text" id="tname"  name="tname" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter user name"/>
<br/><br/>
<p>Password</p>
<input type="password" id="tpwd" name="tpwd" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter password"/>
<br/><br/>
<p>Email</p>
<input type="text" id="temail" name="temail" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Email"/>
<br/><br/>
<input type="submit" id="btn1" name="btn1" value="sign up"/><a href='login.php'>login from here</a>
</form><br/><br/>
<?php
if(isset($_POST["btn1"]))
{
	$con=mysqli_connect("localhost","root","","registration");
$name=$_POST['tname'];
$pass=$_POST['tpwd'];
$email=$_POST['temail'];
$qry="Insert into sign(name,password,email) values('$name','$pass','$email')";
if (!mysqli_query($con,$qry)) {
	echo("Error description: " . mysqli_error($con));
  }
else
{
	echo"<br/>record inserted";
}
}
?>
</center>
</div>
</body>
</html>