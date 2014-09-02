<html>
<head>
    <title>Weight Tracker</title>
</head>
<body>
<?php
$username = "dbo541682804";
$password = "8s3IAftWzK5BWPL";
$hostname = "db541682804.db.1and1.com";

//connect to database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select database
$selected = mysql_select_db("db541682804",$dbhandle)
or die("Could not select examples");

//execute query
$result = mysql_query("SELECT id, date, weight FROM weight_tracker ORDER BY Date ASC");

//fetch data
while ($row = mysql_fetch_array($result)) {
    $entry .= "['".$row{'date'}."',".$row{'weight'}."],";
}

//close the connection
mysql_close($dbhandle);
?>

<div id="chart_div" style="width: 100%; height: 500px;"></div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Date',	'Weight'],
        <?php echo $entry ?>
    ]);

        var options = {
            title: 'Weight Tracker',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
</body>
</html>