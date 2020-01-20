<?php
session_start();
$conn = mysqli_connect("localhost","root","","umw");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM user_info WHERE user_nam='" . $_POST["uname"] . "' and user_psw = '". $_POST["upsw"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_code"] = $row['user_code'];
	} else {
	$message = "Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["user_code"] = "";
	session_destroy();
}
?>
<html>
<head>
<title>User Login</title>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
#frmLogin {
	padding: 20px 60px;
	background: #B6E0FF;
	color: #555;
	display: inline-block;
	border-radius: 4px;
}
.field-group {
	margin:15px 0px;
}
.input-field {
	padding: 8px;
	width: 200px;
	border: #A3C3E7 1px solid;
	border-radius: 4px;
}
.form-submit-button {
	background: #65C370;
	border: 0;
	padding: 8px 20px;
	border-radius: 4px;
	color: #FFF;
	text-transform: uppercase;
}
.member-dashboard {
	padding: 40px;
	background: #CCCCCC;
	color: #555;
	border-radius: 4px;
	display: inline-block;
	text-align:center;
}
.logout-button {
	background: #B6E0FF;
	color: #0000FF;
	display: inline-block;
	border-radius: 4px;
	font-size:24px
}
.error-message {
	text-align:center;
	color:#FF0000;
}
.demo-content label {
	width:auto;
}
</style>
</head>
<body background="SPORT.jpg"  style="background-color:#666666">
<div>
  <div style="display:block;margin:0px auto;">
    <?php if(empty($_SESSION["user_code"])) { ?>
    <!--LOG IN-->
    <center>
      <form action="" method="post" id="frmLogin" style=" background-color:#66FF99; margin-top:200px">
        <div><A  href="home.php"style="color:#000066;text-decoration:none; font-size:18p; color:#00006"> &#171; back</A> </div>
        <div class="error-message">
          <?php if(isset($message)) { echo $message; } ?>
        </div>
        <div class="field-group">
          <div>
            <label for="login" style=" color:#000066; font-size:24px">Username</label>
          </div>
          <div>
            <input name="uname" type="text" class="input-field">
          </div>
        </div>
        <div class="field-group">
          <div>
            <label for="password" style=" color:#000066; font-size:24px">Password</label>
          </div>
          <div>
            <input name="upsw" type="password" class="input-field">
          </div>
        </div>
        <div class="field-group">
          <div style="color:#000066">
            <input type="submit" name="login" value="Login" class="form-submit-button">
          </div>
        </div>
      </form>
    </center>
    <!--END LOG IN-->
    <!--LOG OUT-->
    <?php 
} else { 
$result = mysqlI_query($conn,"SELECT * FROM user_info WHERE user_code='" . $_SESSION["user_code"] . "'");
$row  = mysqli_fetch_array($result);
?>
    <div class="row">
      <div class="col-2">
        <div style=" font-size:20px; color: RED;font-family:italic,bold"> DINA SPORT CLUB</div>
      </div>
      <div class="col-8">
        <center>
          <div class="member-dashboard" style=" font-size:30px; color: #0000FF"> Welcome <?php echo ucwords($row['user_fnam']); ?>, You have successfully logged in! </div>
        </center>
      </div>
      <div class="col-2" >
        <form action="" method="post" id="frmLogout">
          <input type="submit" name="logout" value="Logout" class="logout-button">
        </form>
      </div>
    </div>
    <!--end log out-->
    <div class="row">
      <div class="col-1"></div>
      <div class="col-4">
        <div style="color:#FFFFFF; font-size:25px">Edit User Account </div>
        <div>
          <form   action="edit.php"  method="post" name="edit">
            <input type="text" name="uid" placeholder="User ID" required/>
            <input type="submit" value="Edit" name="edit"/>
          </form>
        </div>
      </div>
      <div class="col-4">
        <div style="color:#FFFFFF; font-size:25px">Delete a User Account </div>
        <div>
          <form  action="delete.php" method="post" name="delete">
            <input type="text" name="uid" placeholder="User ID"required/>
            <input type="submit" value="Delete" />
          </form>
        </div>
      </div>
      <div class="col-2">
        <div style="color:#FFFFFF; font-size:25px">Add User Account </div>
        <A href="signUP2.php"><img src="media/add-user-icon.png" style="width:50px;"></A></div>
    </div>
  </div>
  <div class="col-1"></div>
  <!--dashbors-->
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
    
  </table>
  <!--end dashbord-->
</div>
</div>
<?php } ?>
</body>
</html>
