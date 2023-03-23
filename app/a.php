<?php
include "index.php";

echo "images";

$sql = "SELECT bpl_certificate FROM villager";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){  
	while($row = mysqli_fetch_array($result))
        {
		$imge=$row['bpl_certificate'];	
        echo  "<img src='images/$imge.jpg' height='150px' width='300px'>";
		echo "<br>";
		echo "<br>";
	               
				
        }

 } 
}
?>