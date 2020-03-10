<?php
session_start();
$email_ID=$_SESSION['email_ID'];
$event_id=$_SESSION['event_id'];
$vname=$_SESSION['vname'];

$host = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbname = "voluntaria";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) 
{
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} 
else 
{
    $sql="INSERT Into volunteers 
    (event_id,email_ID,vname) 
    values('$event_id', '$email_ID','$vname')";
    if ($conn->query($sql)) 
    {
        echo "Registered Succesfully";
    }
    else
    {
        echo "Sorry!! You are Already Registered";
    }
}
?>