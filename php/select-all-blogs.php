<?php 
    include 'dbconnect.php';

    $query = "SELECT * FROM tb_blogs ORDER BY datetime DESC";
    $result = mysqli_query($conn, $query);
?>
