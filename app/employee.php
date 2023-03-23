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
$sql2="INSERT INTO villager(employee_number) values ('$employee_ID') where v_name='$villagename' ";
if((!mysqli_query($conn,$sql)) and (!mysqli_query($conn,$sql2)))
{
 echo "not inserted";
 }else
{
	
header ('location:sup_login.html');
echo "\ninserted";
}

$sql1="INSERT INTO supervisor_login(userName,Password) VALUES('$user','$passwordmd5')";

if((!mysqli_query($conn,$sql1)))
{
 echo "not inserted";
 }else
{
	
echo "\ninserted";
}

CloseCon($conn);

?> 