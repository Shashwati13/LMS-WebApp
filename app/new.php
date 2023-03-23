<?php
include "index.php ";
session_start();
$status=$_POST["shubham"];
$target = "images/" . basename($_FILES["fileToUpload"]["name"]);
$target1 = "images/" . basename($_FILES["doc"]["name"]);
$photo= basename($_FILES["fileToUpload"]["name"],".jpg");
$docc= basename($_FILES["doc"]["name"],".jpg");
 
 $sql1="INSERT INTO toilet(status,hnum) VALUES('$status','{$_SESSION["s"]}')";
 if((!mysqli_query($conn,$sql1)))
{
 echo "not inserted";

 }
  

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target)) {
       echo " uploaded ";
    }
	else
	{
		echo "not uploaded";
	}
	

 //==================
  if (move_uploaded_file($_FILES["doc"]["tmp_name"], $target1)) {
      // echo " uploaded";
    }
	else
	{
		echo "not uploaded";
	}
	
		$target = "images/" . basename($_FILES["fileToUpload"]["name"]);	


$target1 = "images/" . basename($_FILES["doc"]["name"]);



$sql5="INSERT INTO report(photos,documents,hnum) VALUES('$photo','$docc','{$_SESSION["s"]}')";
if((!mysqli_query($conn,$sql5)))
{
 echo "not inserted";

 }
	
header ('location:reportdone.html');
 
?> 
