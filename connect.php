<?php
$organization = $_POST['organization'];
$type = $_POST['type'];
$first_name = $_POST['first_name'];
$username = $_POST['username'];
$password = $_POST['cpassword'];
$email = $_POST['email'];
$gender= $_POST['gender'];
$phone = $_POST['phone'];
if (!empty($company) ||!empty($type) || !empty($first_name) || !empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phone)) 
{
    $host = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $db = "voluntaria";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $db);
    
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
        $sql="INSERT Into admin 
        (organization_name,organization_type,admin_name, gender, username, pass, phone,email) 
        values('$organization', '$type', '$first_name', '$gender', '$username', '$password', '$phone', '$email')";
        if ($conn->query($sql)) 
        {
            echo "New record inserted sucessfully";
        } 
        else
        {
            echo "Error: ". $sql ."
            ". $conn->error;
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
