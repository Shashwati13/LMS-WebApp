<?php

include "index.php";
$name=$_POST["Name"];
$number=$_POST["Number"];
$designation=$_POST["designation"];
$adhar_no=$_POST["adhar_no"];
$employee_ID=$_POST["id"];
$villagename=$_POST["shash"];
$adhar_card=$_POST["adhar_card"];
$user=$_POST["user"];
$password=$_POST["password"];
$passwordmd5=md5($password);

$sql="INSERT INTO nba_employee(name,employee_ID,villagename,adhar_no,adhar_card,designation,contact) VALUES('$name','$employee_ID','$villagename','$adhar_no','$adhar_card','$designation','$number')";


if((!mysqli_query($conn,$sql)))
{
 echo "not inserted";
 }else
{
	
header ('location:sec_login.html');
echo "\ninserted";
}

$sql1="INSERT INTO login(userName,Password) VALUES('$user','$passwordmd5')";

if((!mysqli_query($conn,$sql1)))
{
 echo "not inserted";
 }else
{
	
//header ('location:emp1.php');
echo "\ninserted";
}

CloseCon($conn);

?> 