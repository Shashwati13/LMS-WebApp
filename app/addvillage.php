
<?php

include "index.php";

$v_name=$_POST["village"];
$sql3="insert into village(village_name) values ('$v_name')";
if(!mysqli_query($conn,$sql3))
{
 echo "not inserted";
 
 }else
{
	
echo "\ninserted";
}
CloseCon($conn);

?> 