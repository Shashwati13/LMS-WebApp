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
<h3><center>SECTION OFFICER HOMEPAGE</center></h3>
 </center>
 <form  action="subsidy.php" method="POST">
 <center>
  <h4><br>Enter House ID:
	<select name="houseid" class="form-control" id="houseid">
    <option value="pick">---------------------</option></br>
  <?php
include "index.php";
$sql = mysqli_query($conn,"SELECT house_no from villager where toilet='no' and loan_status='in progress'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='".$row['house_no']."'>".$row['house_no']."</option>" ;
}
?>
 <br><input id="sub1" type="submit" value="VIEW REPORT"></br>
 
 
   <a href="http://localhost/app/allreports.html"><input id="sub" type="button" value="ANALYSIS"></a> 
   
   <a href="http://localhost/app/addvillage.html"><input id="sub" type="button" value="Add Village"></a> 
    <a href=""><input id="sub" type="button" value="Remove an employee"></a> 
  </form>	
      
	</center>

		  