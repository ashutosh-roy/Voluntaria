<?php

$organization = $_POST['organization'];
$type = $_POST['type'];
$first_name = $_POST['first_name'];
$username = $_POST['username'];
$password = $_POST['cpassword'];
$email = $_POST['email'];
$gender= $_POST['gender'];
$phone = $_POST['phone'];  
//$i =time().'_'.$_FILES['f']['name'];

if (!empty($company) ||!empty($type) || !empty($first_name) || !empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phone)) 
{
    $host = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "voluntaria";
    //$t = 'adminpics/'.$i;
    //create connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 

    else 
    {
        /*$echeck="select email from admin where email=".$_POST['email'];
        $echk=mysqli_query($conn,$echeck);
        $ecount=mysqli_num_rows($echk);

        $echeck1="select phone from admin where phone=".$_POST['phone'];
        $echk1=mysqli_query($conn,$echeck1);
        $ecount1=mysqli_num_rows($echk1);
        
        if($ecount!=0)
        {
            echo "Email already exists";
        }
        if($ecount1!=0)
        {
            echo "Phone Number already exists";
        }
        else
        {*/
            //move_uploaded_file($_FILES['f']['tmp_name'],$t);
            $sql="INSERT Into admin(organization_name,organization_type,admin_name, gender, username, pass,phone,email) 
            values('$organization', '$type', '$first_name', '$gender', '$username', '$password', '$phone', '$email')";

            if ($conn->query($sql)) 
            {
                header("Location:adminlogin.html");
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

 