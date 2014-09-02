<?php

$pin = $_POST['pin'];

if($pin === '2212'){

    $username = "dbo541682804";
    $password = "8s3IAftWzK5BWPL";
    $hostname = "db541682804.db.1and1.com";

    //connect to database
    $dbhandle = mysql_connect($hostname, $username, $password)
    or die("Unable to connect to MySQL");
    echo "Connected to MySQL<br>";

    mysql_select_db("db541682804");

    // Get values from form
    $date = $_POST['date'];
    $weight = $_POST['weight'];

    //inserting data order
    $order = "INSERT INTO weight_tracker (date, weight)
                VALUES ('$date','$weight')";

    //declare in the order variable
    $result = mysql_query($order);	//order executes
    if($result){
        echo("Input data is succeed" . $date . " and " . $weight);
    } else {
        echo("Input data is fail");
    }
} else {
    echo "Incorrect pin.";
}

?>