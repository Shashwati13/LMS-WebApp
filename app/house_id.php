
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="header">
<div class="nba">
<img src="v.jpg" style="width:115px;height:115px;">
</div>
<H1>Welcome to Nirmal Bharat Abhiyan's IHHL</h1>
</div>
<br><h3><center>REPORT</center></h3></br>
<center><h4><b>
<?php
include "index.php";
session_start();
$_SESSION["s"]=$_POST["house"];
$house=$_POST["house"];
$sql = "SELECT * FROM villager WHERE house_no='$house' ";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){  
	while($row = mysqli_fetch_array($result)){
            echo "<div id=\'output'\>"."<br>"."<tr>";
                echo  "Owner's Name: " ."<td>" . $row['name'] . "</td>" ."<br>";
                echo "Address:" ."<td>" . $row['address'] . "</td>"."<br>";
                echo "Toilet Existing?:". "<td>" . $row['toilet'] . "</td>"."<br>";
				echo "Adhar Number:". "<td>" . $row['adhar_no'] . "</td>"."<br>";
				echo "BPL number:"."<td>" . $row['bpl_no'] . "</td>"."<br>";
				echo "BPL certificate:". "<td>" . $row['bpl_certificate'] . "</td>"."<br>";
				echo "House Number:". "<td>" . $row['house_no'] . "</td>"."<br>";
				echo "Number of House Members:". "<td>" . $row['no_of_house_members'] . "</td>"."<br>";
				echo "Adhar Card:". "<td>" . $row['adhar_card'] . "</td>"."<br>";
				echo "Village:". "<td>" . $row['v_name'] . "</td>"."<br>";
            echo "</tr>"."</div>";
        }
		 mysqli_free_result($result);
 } else{
        echo "No records matching your query were found.";
    }
}
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</center></h4></br>
<form action="new.php" method="POST" enctype="multipart/form-data" >
<center>
    <h4>Construction Status
	<select name="shubham"  id="shubham">
	<option>---------</option>
   <option value="Not Started">Not Started</option>
   <option value="Halfway">Halfway</option>
   <option value="Completed">Completed</option>
   </select>
   </h4>
	<h4><br>Upload Submitted Photographs<input type="file" name="fileToUpload" size="10">
   <h4><br>Upload the verified Documents<input type="file" name="doc" size="20">
	 <br><br><input id="sub1" type="submit" value="Generate Report"></br></br>
</center>
</form>
		</html>
		
