<?php

include "index.php";
session_start();
$_SESSION["user"]=$_POST["adhar"];
echo $_SESSION["user"];

$name=$_POST["Name"];
$address=$_POST["Address"];
$number=$_POST["Number"];
$house=$_POST["House"];
$attach=$_POST["Attach"];
$number=$_POST["number"];
$bpl=$_POST["BPL"];
$toilet=$_POST["name"];
$contact=$_POST["Number"];
$v_name=$_POST["shash"];
$adhar=$_POST["adhar"];
$Maharashtra=$_POST["Maharashtra"];
$Pune=$_POST["Pune"];
$Haveli=$_POST["Haveli"];
$zipcode=$_POST["zipcode"];

$sql5="select employee_ID from nba_employee where villagename='$v_name' and designation='supervisor'";

if($result = mysqli_query($conn,$sql5))
{
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_array($result))
  {
     $sid=$row['employee_ID'];
	

}  
	
}
//echo $sid;


$sql1="INSERT INTO villager(house_no,bpl_certificate,name,no_of_house_members,address,toilet,adhar_card,bpl_no,v_name,adhar_no,contact,emp
) VALUES('$house','$bpl','$name','$number','$address','$toilet','$attach','$number','$v_name','$adhar','$contact','$sid')";
//$sql3="insert into village(zilla,taluka,village_name,state,zipcode) values ('$Pune','$Haveli','$v_name','$Maharashtra','$zipcode')";


if(!mysqli_query($conn,$sql1))
{
	
	echo "not inserted employee";
	
}else{
	
	echo "inserted employee";
}
 }




if($toilet=='no')
	
{
$sql="update villager set loan_status='in progress' where house_no='$house'"; 
	
 if((!mysqli_query($conn,$sql)))
{
 echo "not inserted";
 
 }else
{
	
header ('location:user_pass.html');
echo "\ninserted";
}	
}

if($toilet=='yes')
	
{

header ('location:thank.html');	
}

CloseCon($conn);

?> 