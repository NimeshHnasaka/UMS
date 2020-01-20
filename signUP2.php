<?php

	if(isset($_POST["reg"])){

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "umw";
		$username = $_POST["uname"];
		$userpaswd = $_POST["upsw"];
		$ufirstname = $_POST["ufname"];
        $ulastname = $_POST["ulname"];
        $useremail = $_POST["uemail"];
        $usertel = $_POST["uphone"];
        $umof = $_POST["umof"];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql="INSERT INTO user_info (user_nam,user_psw,user_fnam,user_lnam,user_emil,user_tel,user_mof)
                VALUES ('$username','$userpaswd','$ufirstname','$ulastname','$useremail','$usertel ','$umof')";

		if ($conn->query($sql) === TRUE) {
			echo "<p class='AA'>your account created successfully</p>";
		} else {
			echo "<p class='AA'>your account creation request failed.try again</p>" . $conn->error;
		}

		$conn->close();

	}
	
	


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function validateform(){  
var name=document.regf.uname.value;  
var password=document.regf.upsw.value;
var fnam=document.regf.ufname.value;
var lnam=document.regf.ulname.value;
var email=document.regf.uemail.value;
var emailval = document.regf.uemail.value;
var atpos = emailval.indexOf("@");
var dotpos =emailval.lastIndexOf(".");
var tel=document.regf.uphone.value;
var pattern = new RegExp("([^\d])\d{10}([^\d])");


if (name==null || name==""){  
  alert("User Name can't be blank");  
  return false;
  } 
if(fnam==null || fnam==""){  
  alert("First Name can't be blank");  
  return false;  
}   

if(lnam==null || lnam==""){  
  alert("Last Name can't be blank");  
  return false;  
}


if(email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
}

if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailval.length) {
        alert("Not a valid e-mail address");
        return false;
    }


if (tel==null || tel==""){  
  alert("Phone No: can't be blank");  
  return false;
  } 
  
if(isNaN(tel) || tel.indexOf(" ")!=-1)
  {
     alert("Enter Valid  Phone No:");
     return false;
  }

 

 if(  password==null || password.length<6){  
  alert("Password can't be blank & must be at least 6 characters long.");  
  return false;  
  }  
 
if(regf.upsw2.value == regf.upsw.value)
{
	return true;
	}
	   else  {
	alert("pls enter your Repeat  password again correctly");
	    return false;

}
 
 
}  
</script>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: black;
}
* {
	box-sizing: border-box;
}
/* Add padding to containers */
.container {
	padding: 16px;
	background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
	background-color: #ddd;
	outline: none;
}
/* Overwrite default styles of hr */
hr {
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
	background-color: #4CAF50;
	color: white;
	padding: 16px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.9;
}
.registerbtn:hover {
	opacity: 1;
}
/* Add a blue text color to links */
a {
	color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
	background-color: #f1f1f1;
	text-align: center;
}
.AA {
	color:#FFFFFF;
	font-size:24px
}
</style>
<title>Register</title>
</head>
<body>
<form  action="signUP.php" method="post" name="regf" onSubmit="return validateform()">
  <div class="container">
    <div><A href="login.php" style="color:#000066;text-decoration:none; font-size:18p; color:#00006"> &#171; back</A> </div>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="uname"  value=""/>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="upsw"  value="" />
    <label ><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="upsw2"  />
    <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter User First Name" name="ufname" />
    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter User Last Name" name="ulname"  />
    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter User Email" name="uemail"  />
    <label ><b>Phone No:</b></label>
    <input type="text" placeholder="Enter User Phone no:" name="uphone"  />
    <label ><b>Gender</b></label>
    <input type="radio" name="umof" value="M" >
    Male
    <input type="radio" name="umof" value="F" checked>
    Female <br />
    <br />
    <button type="submit" class="registerbtn" name="reg">Register</button>
  </div>
</form>
</body>
</html>
