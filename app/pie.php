<?php

include "index.php";



// Get data from database
$sql = "SELECT toilet,count(*) as number FROM villager group by toilet";
$result = mysqli_query($conn, $sql)
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://localhost/app/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['toilet', 'yes'],
      <?php
while($row=mysqli_fetch_array($result))
{
	echo"['".$row["toilet"]."',".$row["number"]."],";
}
      ?>
    ]);
    
    var options = {
        title: 'Existing Toilet',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>
</body>
</html>