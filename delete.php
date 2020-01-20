<?php


// Create connection
$conn = mysqli_connect("localhost","root","","umw");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM user_info WHERE user_code=$_POST[uid]";

if ($conn->query($sql) === TRUE) {
    echo "<div class='a'>User Account Deleted Successfully</div>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.a {
	color:#FFFFFF;
	font-size:18px;
}
.grid2 {
	border:groove;
	font-size:20px;
	background-color: #66FFCC;
	height:40px;
	color: #666666;
}
.grid1 {
	margin-top:50px
}
.grid {
	border:groove;
	font-size:20px;
	background-color: #FFFF66;
	height:50px;
	color: #000000;
}
</style>
</head>
<body style="background-color:#333333">
<div><A href="login.php" style="color:#000066;text-decoration:none; font-size:23px; color: #FFFFFF"> &#171; back</A> </div>
<center>
<table  class='grid1' >
<tr>
  <td class='grid' style='width:80px'>User ID</td>
  <td class='grid' style='width:100px'>User Name</td>
  <td class='grid' style='width:150px'>User Password</td>
  <td class='grid' style='width:200px'>User First Name</td>
  <td class='grid' style='width:200px'>User Last Name</td>
  <td class='grid' style='width:200px'>User E-MAIL</td>
  <td class='grid' style='width:150px'>User Phone No:</td>
  <td class='grid' style='width:50px'>Gender</td>
</tr>
<?php
   $conn = mysqli_connect("localhost","root","","umw");

    $sql = "SELECT * FROM  user_info";
   $result = mysqli_query($conn,$sql) or die("no record");
   
  
 
  while($row = mysqli_fetch_array($result)) {
   
 
   $te_usernam   =  $row['user_nam'];
   $te_userpsw  =  $row['user_psw'];
   $te_userfnam   =  $row['user_fnam'];
   $te_userlname   =  $row['user_lnam'];
   $te_useremil   =  $row['user_emil'];
   $te_usertel   =  $row['user_tel'];
   $te_usermof   =  $row['user_mof'];
   $te_usercode   =  $row['user_code'];
    
         
		 
		echo "<tr>";
		 echo "<td class='grid2' style='width:80px'>$te_usercode</td>
	     <td class='grid2' style='width:100px'>$te_usernam</td>
         <td class='grid2' style='width:150px'>$te_userpsw</td>
		<td class='grid2' style='width:200px'>$te_userfnam</td>
		<td class='grid2' style='width:200px'>$te_userlname</td>
		 <td class='grid2' style='width:200px'>$te_useremil</td>
		 <td class='grid2' style='width:150px'>$te_usertel</td>
		<td class='grid2' style='width:50px'>$te_usermof</td>";
		echo "</tr>";
		 
		 
    }

 

		$conn->close();

	
      ?>
</center>
</body>
</html>
