<html>
<head>
<!--    <script type="text/javascript" src="https://www.google.com/jsapi"></script>-->
<!--    <script type="text/javascript">-->
<!--        google.load("visualization", "1", {packages:["corechart"]});-->
<!--        google.setOnLoadCallback(drawChart);-->
<!--        function drawChart() {-->
<!--            var data = google.visualization.arrayToDataTable([-->
<!--                ['Date',	'Weight'],-->
<!--                ['8/18/2010',	159.0],-->
<!--                ['8/29/2010',	159.5],-->
<!--                ['9/15/2010',	158.0],-->
<!--                ['11/20/2010',	155.5],-->
<!--                ['1/21/2011',	149.5],-->
<!--                ['4/16/2011',	150.5],-->
<!--                ['5/7/2011',	147.0],-->
<!--                ['5/25/2011',	143.0],-->
<!--                ['6/2/2011',	138.0],-->
<!--                ['7/1/2011',	132.5],-->
<!--                ['8/7/2011',	134.0],-->
<!--                ['8/18/2011',	130.5],-->
<!--                ['9/18/2011',	131.0],-->
<!--                ['10/25/2011',	133.0],-->
<!--                ['11/21/2011',	132.5],-->
<!--                ['12/18/2011',	129.5],-->
<!--                ['1/19/2012',	131.5],-->
<!--                ['2/20/2012',	132.5],-->
<!--                ['3/26/2012',	134.5],-->
<!--                ['4/25/2012',	135.5],-->
<!--                ['5/22/2012',	134.0],-->
<!--                ['6/28/2012',	134.5],-->
<!--                ['7/28/2012',	137.5],-->
<!--                ['8/30/2012',	134.5],-->
<!--                ['9/29/2012',	131.0],-->
<!--                ['10/27/2012',	132.5],-->
<!--                ['11/28/2012',	136.0],-->
<!--                ['12/30/2012',	134.5],-->
<!--                ['1/30/2013',	135.5],-->
<!--                ['2/28/2013',	135.0],-->
<!--                ['3/28/2013',	134.5],-->
<!--                ['4/28/2013',	135.0],-->
<!--                ['5/28/2013',	135.0],-->
<!--                ['6/30/2013',	136.5],-->
<!--                ['7/30/2013',	139.0],-->
<!--                ['8/30/2013',	139.0],-->
<!--                ['9/30/2013',	140.5],-->
<!--                ['10/30/2013',	138.5],-->
<!--                ['11/30/2013',	139.5],-->
<!--                ['12/31/2013',	139.0],-->
<!--                ['1/31/2014',	140.0],-->
<!--                ['2/31/2014',	140.0],-->
<!--                ['3/31/2014',	140.0],-->
<!--                ['4/30/2014',	144.5],-->
<!--                ['6/30/2014',	143.0],-->
<!--                ['7/31/2014',	144.0]-->
<!--            ]);-->
<!---->
<!--            var options = {-->
<!--                title: 'Weight Tracker',-->
<!--                curveType: 'function',-->
<!--                legend: { position: 'bottom' }-->
<!--            };-->
<!---->
<!--            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));-->
<!--            chart.draw(data, options);-->
<!--        }-->
<!--    </script>-->
</head>
<body>
<?php
$username = "dbo541682804";
$password = "8s3IAftWzK5BWPL";
$hostname = "db541682804.db.1and1.com";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("weight_tracker",$dbhandle)
or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT id, date, weight FROM weight_tracker");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
    echo "ID:".$row{'id'}." Date:".$row{'date'}."Weight: ". //display the results
        $row{'weight'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>
<!--<div id="chart_div" style="width: 100%; height: 500px;"></div>-->
</body>
</html>