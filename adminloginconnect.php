<?php
    session_start();
    $message="";
        if(count($_POST)>0)
        {
            $con = mysqli_connect('localhost:3308','root','','voluntaria') or die('Unable To connect');
            $result = mysqli_query($con,"SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and pass = '". $_POST["pass"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) {
            $_SESSION["organization_id"] = $row['organization_id'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["image"] = $row['image'];
            if(isset($_SESSION["organization_id"]))
            {
                header("Location:adminpro.php");
            }
            }
            else
           {
               header("Location:adminlogin.html");
               
           }
        }
    ?>