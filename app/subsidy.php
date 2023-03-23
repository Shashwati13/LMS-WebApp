<html>
<head><TITLE>NIRMAL BHARAT ABHIYAN </TITLE> <link rel="stylesheet" type="text/css" href="stylesheet.css"></head>
<body>
<div class="header">
<div class="nba">
<img src="v.jpg" style="width:115px;height:115px;">
</div>
<H1>Welcome to Nirmal Bharat Abhiyan's IHHL</h1>
</div>
<h3><center> User Details </center></h3>
</body>
<center>
<?php
include "index.php";
session_start();

$_SESSION["xyz"]=$_POST['houseid'];

$tex=$_POST['houseid'];
$sql = "SELECT v.bpl_certificate,v.name,v.no_of_house_members,v.address,v.adhar_no,v.adhar_card,v.bpl_no,v.v_name,v.contact,r.hnum,r.photos,r.documents FROM villager v,report r WHERE r.hnum=v.house_no and r.hnum='$tex' ";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){  
	while($row = mysqli_fetch_array($result)){
            echo "<div id=\'output'\>"."<br>"."<tr>";
				echo "House Number". "<td>" . $row['hnum'] . "</td>"."<br>";
				$imge=$row['photos'];	
				 echo  "Owner's Name: " ."<td>" . $row['name'] . "</td>" ."<br>";
                echo "Address:" ."<td>" . $row['address'] . "</td>"."<br>";
				echo "Adhar Number:". "<td>" . $row['adhar_no'] . "</td>"."<br>";
				echo "BPL number:"."<td>" . $row['bpl_no'] . "</td>"."<br>";
				echo "BPL certificate:". "<td>" . $row['bpl_certificate'] . "</td>"."<br>";
				echo "Number of House Members:". "<td>" . $row['no_of_house_members'] . "</td>"."<br>";
				echo "Adhar Card:". "<td>" . $row['adhar_card'] . "</td>"."<br>";
				echo "Village:". "<td>" . $row['v_name'] . "</td>"."<br>";
				echo "Contact:". "<td>" . $row['contact'] . "</td>"."<br>";
				echo "Photos:"."<br>";
                echo "<img src='images/$imge.jpg' height='150px' width='300px'>" ;
				$imges=$row['documents'];	
				echo "Documents:"."<br>";
				  echo "<img src='images/$imges.jpg' height='150px' width='300px'>" ;
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
<h4>	Is Subsidy Granted? </h4>
<a href="http://localhost/app/granted.php"><input id="sub1" type="button" value="GRANT SUBSIDY"></a></text>
	<a href="http://localhost/app/rejected.php"> <input id="sub1" type="button" value="REJECT SUBSIDY"></a></text>
</form>
</center>
</html>