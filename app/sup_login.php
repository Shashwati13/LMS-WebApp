<?php
include "index.php";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,md5($_POST['password'])); 
      
      $sql = "SELECT userName FROM supervisor_login WHERE userName = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         header("location:house_ret.php");
         echo "success";
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo "Your Login Name or Password is invalid";
      }
   }




?>