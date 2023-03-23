<html>
<head>
<title>UPDATE RECORDS</title>  
</head>
<body>

<?php
include "index.php ";
//$user=$_POST['$usr'];
session_start();
$submit=$_POST["submit"];
if($submit)
{
$sql="Select * from villager where adhar_no={$_SESSION["user"]}";
$records=mysqli_query($conn,$sql);
}
?>
<table>
  <tr>
    <th>house_no</th> 
	<th>bpl_certificate</th>
	<th>name</th>
	<th>no_of_house_members</th>
	<th>address</th>
	<th>toilet</th>
	<th>adhar_card</th>
	<th>bpl_no</th>
	<th>v_name</th>
	<th>adhar_no</th>
   </tr>
   <?php
   while($row=mysqli_fetch_array($records))
   {
	   echo "<tr><form action=update1.php method=POST>";
	   echo "<td><input type=text  name=house_no1 value='".$row['house_no']."'></td>";
	   echo "<td><input type=text  name=bpl_certificate1 value='".$row['bpl_certificate']."'></td>";
       echo "<td><input type=text  name=name1 value='".$row['name']."'></td>";
       echo "<td><input type=text  name=no_of_house_members1 value='".$row['no_of_house_members']."'></td>";
	   echo "<td><input type=text  name=address1 value='".$row['address']."'></td>";
	   echo "<td><input type=text  name=toilet1 value='".$row['toilet']."'></td>";
	   echo "<td><input type=text  name=adhar_card1 value='".$row['adhar_card']."'></td>";
	   echo "<td><input type=text  name=bpl_no1 value='".$row['bpl_no']."'></td>";
	   echo "<td><input type=text  name=v_name1 value='".$row['v_name']."'></td>";
	   echo "<td><input type=text  name=adhar_no1 value='".$row['adhar_no']."'></td>";
	   echo "<td><input type=submit>";
	   echo"</form></tr>";
	   
	}
    ?>   
</body>
</html>