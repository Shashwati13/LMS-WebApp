<html>
<head><TITLE>NIRMAL BHARAT ABHIYAN </TITLE>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="jquery.min.js"></script>
</HEAD>
<BODY>
<div class="header">
<div class="nba">
<img src="v.jpg" style="width:115px;height:115px;">
</div>
<H1>Welcome to Nirmal Bharat Abhiyan's IHHL</h1>
</div>
<H3><center>APPLICATION FORM FOR IHHL</center></h3>
 <center>
  <h6 style="color:red;">*All Fields are mandatory to be filled</h6>
 <center><h4>ENTER APPLICANT'S DETAILS</h4>
	<form name="application" action="user_insert.php" method="POST" >
	<h5><br>1. Name of Applicant: <input type="text" name="Name" pattern= "[A-Za-z]+" title= "Please enter alphabets only" required></br>
	<br>2. Address: <input type="text" name="Address" required></br>
	<br>3.State: <input type="text" value="Maharashtra" readonly></br>
	<br>4.Zilla: <input type="text" value="Pune" readonly></br>
	<br>5.Taluka: <input type="text" value="Haveli" readonly></br>
	<br>6.zipcode: <input type="text" value="411023" readonly></br>
<br>7.Village:
<select name="shash" class="form-control" id="shash">
<option value="pick">---------------------</option>
<?php
include "index.php";
$sql = mysqli_query($conn,"SELECT village_name from village");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['village_name'] ."'>" .$row['village_name'] ."</option>" ;
}
?>
</select>
</br>
	<br>4. Number of house members: <input type="text" name="Number" pattern= "[0-9]+" title= "Please enter digits only" required></br>
    <br>5. Contact: <input type="text" name="Number" pattern= "[0-9]{10}"  title= "Please enter 10 digits"required></br>
	<br>6. House Number: <input type="text" name="House" id="house" pattern= "[0-9]+" title= "Please enter digits only" required></br><div id="abc" name="abc"></div>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('#house').change(function(){
		var vid=$('#house').val();
		          
			  		$('#abc').load('validate.php',{'vid':vid})
	});
	});
	</script>
	
	<br>7. Attach the copy of Adhar Card: <input type="text" name="Attach" required></br>
	<br>8. BPL Certificate Number: <input type="text" name="number" id="number" required></br>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('#number').change(function(){
		var vid=$('#number').val();
		          
			  		$('#abc').load('bplvalidate.php',{'vid':vid})
	});
	});
	</script>
	<br>9. Attach the copy of BPL Certificate: <input type="text" name="BPL" required ></br>
	<br>10. Adhar number: <input type="text" name="adhar" id="adhar" pattern= "[0-9]+" title= "Please enter digits only" required></br>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('#adhar').change(function(){
		var vid=$('#adhar').val();
		          
			  		$('#abc').load('adharvalidate.php',{'vid':vid})
	});
	});
	</script>
	
	<br>  Is toilet already existing?(yes/no) <input type="text" name="name" ></br>
  </h5><center> <input id="sub" type="submit" value="SUBMIT" name="submit"></h5><input id="sub" type="reset" value="RESET">
	
	
	</center>
</form>

















