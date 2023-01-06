<?php
    require_once 'dbconnect.php';

    //Data from ../dashboard/blog.php
    $category=$_REQUEST["category"];
    $title=$_REQUEST["title"];
    $blog=$_REQUEST["blog"];

    //Blog ID from ../dasboard/viewblog.php
    $blog_id=$_REQUEST['blog_id'];

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

    if(isset($_REQUEST["update_blog"])) {
        $updquery = "UPDATE tb_blogs SET category='$category', title='$title', blog='$blog' WHERE blog_id='$blog_id'";

        if (mysqli_query($conn, $updquery)) {
            $alert = "Blog Updated!";
            header("location: ../dashboard/viewblog.php?message=$alert & blog_id=$blog_id");
                exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>