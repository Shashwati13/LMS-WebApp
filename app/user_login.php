<html>
<head><TITLE>NIRMAL BHARAT ABHIYAN </TITLE> <link rel="stylesheet" type="text/css" href="stylesheet.css"></head>
<body>
<div class="header">
<div class="nba">
<img src="v.jpg" style="width:115px;height:115px;">
</div>
<H1>Welcome to Nirmal Bharat Abhiyan's IHHL</h1>
</div>
<h3><center> User Details </center></h3>
</body>
<center>
<?php
include "index.php";
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST")
	   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['usr']);
      
      $mypassword = mysqli_real_escape_string($conn,md5($_POST['pass'])); 
      
      $sql = "SELECT Adhar_number FROM ulogin WHERE Adhar_number = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
        header("location: user_profile.php");
        // echo "success";
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo "Your Login Name or Password is invalid";
      }
   }
?>
</html>
