<?php
include "index.php";
   
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['vid']);
     // $mypassword = mysqli_real_escape_string($conn,md5($_POST['password'])); 
      
      $sql = "SELECT userName FROM supervisor_login WHERE userName = '$myusername'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count!= 1) {
        
         echo '<script>alert("Your username is wrong")</script>';
      }




?>