<?php
session_start();
$username=$_SESSION['username'];
$organization_name = $_POST['organization_name'];
$organization_type= $_POST['organization_type'];
$phone = $_POST['phone'];
$admin_name=$_POST['admin_name'];

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
            $sql="Update admin set organization_name='$organization_name',organization_type='$organization_type',phone='$phone' ,admin_name='$admin_name' where username='$username'";
            if ($conn->query($sql)) 
            {
                header("Location:adminpro.php");
            } 
            else
            {
                 echo "Error: ". $sql ." ". $conn->error;
            }
            $conn->close();
           
        }
?>