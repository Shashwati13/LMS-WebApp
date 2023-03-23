<?php

include "index.php";

session_start();
$id=$_SESSION["xyz"];


$sql="UPDATE villager set loan_status='rejected' where  house_no='$id'";
if((!mysqli_query($conn,$sql)))
{
 echo "not inserted";
 }else
{	
header ('location:report_subsidy.php');
echo "\ninserted";
}
CloseCon($conn);

?> 