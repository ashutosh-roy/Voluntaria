<?php
session_start();
$vname = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email_ID = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$city= $_POST['city'];
$profession = $_POST['profession'];
$bloodgrp=$_POST['bgrp'];
$pass=$_POST['pass'];
// IMAGE FILES STORED WITH TIME STAMP TO MAKE IT UNIQUE
$image = time().'_'.$_FILES['pic']['name'];

/*
$imgContent = addslashes(file_get_contents($image));*/
 
if (!empty($vname) ||!empty($dob) || !empty($gender) || !empty($email_ID) || !empty($phone) || !empty($state) || !empty($city) || !empty($profession) || !empty($bloodgrp) || !empty($image)) 
{

    $host = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "voluntaria";
    $target = 'profile pictures/'. $image;
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 

    else 
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],$target);
        $sql="INSERT Into volunteer_info(vname,dob,gender,email_ID,phone,state,city,profession,bloodgrp,pass,image)values('$vname', '$dob', '$gender', '$email_ID', '$phone', '$state','$city', '$profession', '$bloodgrp','$pass','$target')";
        if ($conn->query($sql)) 
        {
            header("Location:newvlogin1.html");
            $_SESSION['user']=$email_ID; // Initializing Session
        } 
        else
        {
            echo "<script>alert('Invalid login details');</script>";
        }

       $conn->close();
    }
} 

else 
{
    echo "All field are required";
    die();
}
?>

 