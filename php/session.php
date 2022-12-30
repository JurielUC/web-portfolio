
<?php 
    session_start();
    require 'dbconnect.php';
    
    $user_check=$_SESSION['email'];
    $ses_sql=mysqli_query($conn,"select * from tb_myacc where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $lgn_email=$row['email'];
    $lgn_id=$row['id'];
    $lgn_status=$row['status'];
    $lgn_uid=$row['unique_id'];
    $lgn_fname=$row['first_name'];
    $lgn_lname=$row['last_name'];
    $lgn_psw=$row['password'];
    $lgn_mf=$row['image'];

    if(!$_SESSION['email'])
    {  
        header("Location: ../sys-user/login-page/userlogin.php"); //redirect to the login page to secure the welcome page without login access.  
    }  
?>