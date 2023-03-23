<?php

include "index.php";

$num=$_POST["number"];
$id=$_POST["id"];
$pass=$_POST["pass"];
$passwordmd5 = md5($pass);

$sql="INSERT INTO ulogin(Adhar_number,
Password
) VALUES('$num','$passwordmd5')";

if(!mysqli_query($conn,$sql))
{
 echo "not inserted";
 
 }else
{
	
header ('location:user_sign_log.html');
echo "\ninserted";
}

CloseCon($conn);

?> 