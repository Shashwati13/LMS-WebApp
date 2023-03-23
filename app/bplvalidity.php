<?php

include "index.php";

$number=$_POST["Number"];
$number=$_POST["Number"];

$sql="INSERT INTO village(zipcode) VALUES('$number')";
$sql1="INSERT INTO villager(house_no) VALUES('$number')";

if(!mysqli_query($conn,$sql)&&!mysqli_query($conn,$sql1))
{
 echo "not inserted";
 
 }else
{
	
//header ('location:4.html');
echo "\ninserted";
}

CloseCon($conn);

?> 