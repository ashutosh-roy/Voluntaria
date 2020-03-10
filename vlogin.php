<?php
    session_start();
    $message="";
        if(count($_POST)>0)
        {
            $con = mysqli_connect('localhost:3308','root','','voluntaria') or die('Unable To connect');
            $result = mysqli_query($con,"SELECT * FROM volunteer_info WHERE email_ID='". $_POST["email_id"]."' and pass = '". $_POST["pass"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) 
            {
                $_SESSION["email_ID"] = $row['email_ID'];
                $_SESSION["pass"] = $row['pass'];
                $_SESSION["image"] = $row['image'];
                if(isset($_SESSION["email_ID"]))
                {
                    header("Location:civic\profile.php");
                }
            }
            else
           {
            echo "<script>alert('Invalid login details');</script>";
           }
        }


    ?>
