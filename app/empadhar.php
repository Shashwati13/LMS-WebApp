
<?php
include "index.php";

$empid=$_POST['vid'];
//echo '$empid';

$sql="select adhar_no from nba_employee where adhar_no='$empid'" ;
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{

     	echo '<script>alert("'.$empid.' is already entered please change the Adhar Number")</script>';	

//header("refresh:0;url=appli_form.php");

}
else
{
	return 0;
}

?>