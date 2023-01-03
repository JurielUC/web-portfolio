<?php
    require_once 'dbconnect.php';

    //Data from ../dashboard/blog.php
    $category=$_REQUEST["category"];
    $title=$_REQUEST["title"];
    $blog=$_REQUEST["blog"];

    //Date and time when blog submitted
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");

    //unique id for specific blog
    $ran_id = rand(time(), 100000000);

    if(isset($_REQUEST["submit_blog"])) {
        $sql = "INSERT INTO tb_blogs(blog_id, title, category, blog, datetime) 
                VALUES('$ran_id', '$title', '$category', '$blog', '$timestamp')";

        if (mysqli_query($conn, $sql)) {
            $alert = "New Blog Published!";
            header("location: ../dashboard/blog.php?message=$alert");
                exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>