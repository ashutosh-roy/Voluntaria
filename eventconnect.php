<style>
<?php session_start(); 
 ?>
</style>
<?php
$event_name = $_POST['ename'];
$event_type = $_POST['etype'];
$event_time = $_POST['etime'];
$event_date = $_POST['edate'];
$location = $_POST['eloc'];
$admin_name = $_POST['adminfname'];
$admin_email = $_POST['adminemail'];
$admin_phone= $_POST['adminphone'];
$address = $_POST['address'];
$noofcomm=$_POST['noofcomm'];
$noofvol=$_POST['noofvol'];
$username = $_SESSION['username'];
if (!empty($event_name) ||!empty($event_type) || !empty($event_time) || !empty($event_date) || !empty($location)) 
{
    $host = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "voluntaria";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
        $sql="INSERT into event_info 
        (event_name,event_type,event_time, event_date, location,admin_name,admin_email,admin_phone,address,username) 
        values('$event_name', '$event_type', '$event_time', '$event_date', '$location', '$admin_name', '$admin_email', '$admin_phone', '$address','$username')";
        if ($conn->query($sql)) 
        {
            $result = mysqli_query($conn,"SELECT * FROM event_info where event_name='$event_name' && location='$location'");
            $row  = mysqli_fetch_array($result);
            $event_id=$row['event_id'];
            $admin_name=$row['admin_name'];
            $_SESSION["eventid"] = $event_id; 
            

            while($noofcomm!=0)
            {
                echo($event_name);
            $sql1="INSERT Into committe (com_id,event_name,event_id,no_of_vol) values('$noofcomm','$event_name','$event_id','$noofvol')";
            $noofcomm=$noofcomm-1;
            if ($conn->query($sql1)) 
                {
                    header ("Location:admin.html");
                    
                }
            }
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