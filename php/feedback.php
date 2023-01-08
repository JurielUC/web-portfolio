<!--Feedback form for website viewers-->
<?php
    require_once 'dbconnect.php';

    //Data from ../dashboard/blog.php
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $message=$_REQUEST["message"];

    //Blog ID from ../dasboard/viewblog.php
    $blog_id=$_REQUEST['blog_id'];

    //Date and time when blog submitted
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");

    //unique id for specific blog
    $ran_id = rand(time(), 100000000);

    if(isset($_REQUEST["submit_message"])) {
        $sql = "INSERT INTO tb_feedback(feedback_id, name, email, message, datetime) 
                VALUES('$ran_id', '$name', '$email', '$message', '$timestamp')";

        if (mysqli_query($conn, $sql)) {
            $alert = "Message Sent! Thank you!";
            header("location: ../index.php?message=$alert");
                exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>