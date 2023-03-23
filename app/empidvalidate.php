
<?php
include "index.php";

$empid=$_POST['vid'];
//echo '$empid';

$sql="select employee_ID from nba_employee where employee_ID='$empid'" ;
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{

     	echo '<script>alert("'.$empid.' is already entered please change the employee ID")</script>';	

//header("refresh:0;url=appli_form.php");

}
else
{
	return 0;
}

?>