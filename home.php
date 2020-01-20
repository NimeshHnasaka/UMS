<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {

	background-image:url("welcome2.jpg");
	background-repeat:
	background-position: cover;
	
    
	
	font-family: Arial, Helvetica, sans-serif;
}
form {
	border: 4px solid #f1f1f1;
}
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}
button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}
button:hover {
	opacity: 0.8;
}
.cancelbtn {
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}
img.avatar {
	width: 40%;
	border-radius: 50%;
}
.container {
	padding: 16px;
}
span.psw {
	float: right;
	padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
 span.psw {
 display: block;
 float: none;
}
 .cancelbtn {
 width: 100%;
}
}
</style>
</head>
<body style="background-color: #333333">
<center>
  <div class="row" style="margin-top:50PX" >
    <div class="col-xs-3 col-sm-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-lg-6">
      <form   name="logf" action="login.php">
        <div style="font-size:24px; color: #FFFFFF  "> DINA SPORTS CLUB </div>
        <button type="button"  style="margin-top:40px">
        <A  href="signUP.php" style="text-decoration:none; color:#FFFFFF;">Register</A>
        </button>
        <button type="submit" name="logf">Login</button>
      </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-lg-3"></div>
  </div>
</center>
</body>
</html>
