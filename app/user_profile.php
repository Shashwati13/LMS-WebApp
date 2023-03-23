
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
<br>
<br>
<br>
<br>
<?php
include "index.php";
session_start();
$usr=$_SESSION["login_user"];
$sql = "SELECT * FROM villager WHERE adhar_no='$usr' ";
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
				echo "Contact:". "<td>" . $row['contact'] . "</td>"."<br>";
				echo "Loan Status:". "<td>" . $row['loan_status'] . "</td>"."<br>";
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

<form action="update.php" method="post">

<input type="submit" value="Edit" name="submit"></input>
</form>
</center>
</br>
</br></br></br>

</html>

