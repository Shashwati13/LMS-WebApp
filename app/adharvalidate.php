
<?php
include "index.php";

$house=$_POST['vid'];


$sql="select adhar_no from villager where adhar_no='$house'" ;
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{

     	echo '<script>alert("'.$house.' is already entered please change the Adhar number")</script>';	

//header("refresh:0;url=appli_form.php");

}
else
{
	return 0;
}

?>