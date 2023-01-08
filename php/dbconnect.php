
<?php

    //password: 3a2zE!GVB>J
    //username: u248663554_dbmywebsite
    //database: u248663554_db_mywebsite
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_mywebsite";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_select_db($conn, $database);

    // Check connection
    if (!$conn) {
        trigger_error(mysqli_connect_error());
        echo 'not connected';
        } //else echo 'Successfully Connected';
?>