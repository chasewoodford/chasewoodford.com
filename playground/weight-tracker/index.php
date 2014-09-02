<html>
<head>
    <title>Weight Tracker</title>
    <link rel="stylesheet" type="text/css" href="weight-tracker.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
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

<div id="chart_div" style="width: 100%; height: 400px;"></div>

<!-- the php -->
<?php
if(isset($_POST['add']))
{
    $username = "dbo541682804";
    $password = "8s3IAftWzK5BWPL";
    $hostname = "db541682804.db.1and1.com";
    $dbhandle = mysql_connect($hostname, $username, $password);
    if(! $dbhandle )
    {
        die('Could not connect: ' . mysql_error());
    }

    if(! get_magic_quotes_gpc() )
    {
        $date = addslashes ($_POST['date']);
        $weight = addslashes ($_POST['weight']);
    }
    else
    {
        $date = $_POST['date'];
        $weight = $_POST['weight'];
    }

    $sql = "INSERT INTO weight_tracker ".
        "(date,weight) ".
        "VALUES('$date','$weight')";
    mysql_select_db('weigth_tracker');
    $retval = mysql_query( $sql, $dbhandle );
    if(! $retval )
    {
        die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysql_close($dbhandle);
}
else
{
?>

<!-- the html -->
<form method="post" action="<?php $_PHP_SELF ?>">
    <fieldset>
        <label for="date">Date</label>
        <input type="datetime" id="date" class="form-text" required/>
        <p class="form-help">Enter date of entry in YYYY-MM-DD format.</p>
    </fieldset>

    <fieldset>
        <label for="weight">Weight</label>
        <input type="text" id="weight" class="form-text" maxlength="3" size="3" required/>
        <p class="form-help">Enter weight on date of entry.</p>
    </fieldset>

    <div class="clearfix"></div>

    <fieldset class="form-actions">
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
}
?>

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

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#date" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>

</body>
</html>