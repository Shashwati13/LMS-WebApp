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
</div>
<H3><center>	EMPLOYEE DETAILS</center></h3>
 <center><h6 style="color:red;" >*All Fields are mandatory to be filled</h6></center>
	<form name="details" action="secemployee.php" method="POST" align="center" >
<center>
	<h4><br>1. Name of EMPLOYEE <input type="text" name="Name"></br>
	<br>2. Contact <input type="text" name="Number"></br>
    <br>3. Designation <select name="designation"> <option value="supervisor"> 	SUPERVISOR </option> <option value="section officer"> 	SECTION OFFICER  </option> </select> </br>
	<br>4. Aadhar Number <input type="text" name="adhar_no"> </br>
	<br>5. Attach the copy of Adhar Card <input type="text" name="adhar_card"> </br>
	<br>6. EMPLOYEE ID<input type="text" name="id"></br>
	<br>7.Village<select name="shash" class="form-control" id="shash">
    <option value="pick">---------------------</option>
	<?php
     include "index.php";
     $sql = mysqli_query($conn,"SELECT village_name from village ");
     $row = mysqli_num_rows($sql);
     while ($row = mysqli_fetch_array($sql)){
         echo "<option value='". $row['village_name'] ."'>" .$row['village_name'] ."</option>" ;
         }
    ?>
</select></br>

    <br>8. Enter username(new):<input type="text" name="user"></br>
	<br>9. Enter password<input type="password" name="password"></br>
  <h2><input id="sub" type="submit" value="SUBMIT"> <input id="sub" type="reset" value="RESET">
</center>	
	</form>