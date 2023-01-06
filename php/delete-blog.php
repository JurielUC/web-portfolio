<?php 
    require_once 'dbconnect.php';

    $blog_id=$_GET['blog_id'];

    $sql = "DELETE FROM tb_blogs WHERE blog_id = '$blog_id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../dashboard/blog.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>