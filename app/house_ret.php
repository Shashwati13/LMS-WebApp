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
<h3><center>GENERATE REPORT</center></h3>
<form name="report" action="house_id.php" method="POST">
<center>
	<h4><br>Enter House ID:
	<select name="house" class="form-control" id="house">
    <option value="pick">---------------------</option>
	
<?php
include "index.php";

$sql = mysqli_query($conn,"SELECT house_no from villager where toilet='no'and loan_status='in progress' and house_no not in(select hnum from report)");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='".$row['house_no']."'>".$row['house_no']."</option>" ;
}
?>
</select>
	<br><input id="sub" type="submit" value="NEXT"></br>
	</center>
	</form>