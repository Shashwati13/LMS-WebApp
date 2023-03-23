<html>
<head><TITLE>NIRMAL BHARAT ABHIYAN </TITLE>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</HEAD>
<BODY>
<div class="header">
<div class="nba">
<img src="v.jpg" style="width:115px;height:115px;">
</div>
<H1>Welcome to Nirmal Bharat Abhiyan's IHHL</h1>
</div>
<center>
<H2>Analysis</H2>
</center>
<?php
include "index.php";


   
   session_start();
   
$sql = "SELECT count(toilet) FROM villager WHERE toilet='yes' ";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){  
	while($row = mysqli_fetch_array($result)){
            echo "<div id=\'output'\>"."<br>"."<tr>";
            echo  "Toilet exist " ."<td>" . $row['toilet'] . "</td>" ."<br>";
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