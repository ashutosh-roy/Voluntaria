<?php
session_start();
$event_id= $_COOKIE['e'];
if(isset($_SESSION['username']))
{

    $conn = new mysqli("localhost:3308", "root", "", "voluntaria");
if($conn->connect_error)
{
  exit('Could not connect');
}
else
{
$username = $_SESSION['username'];
$_SESSION['username']=$username;
$sql = "SELECT * FROM event_info WHERE username = '$username'";
$result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {   
        $row = mysqli_fetch_assoc($result);
       
echo '    
<!DOCTYPE html>
<html>
    <head>
        <title>Event Profile</title>
        <link rel="stylesheet" type="text/css" href="css/ep.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                
                <li id="log"><a href="index.html">Logout</a></li>
                <li id="pro">
                    <a href="adminpro.php"><img src="images/makefg.png" height="20px" width="20px" alt="profile page"></a>
                </li>
            </ul>
    
        </nav>
        <h1 align= "center">'; echo $row['event_name']; echo '</h1>
        <h2 align="center"> '; echo $row['event_type']; echo ' </h2>
        <img src="images/vevent.jpg" height="600px" width="1400px" style="margin-left:60px;">
        
        <div id="vol">
          <h2 align="center">Volunteer Attendance</h2>
          ';
             $sql1 = "SELECT * FROM volunteers WHERE event_id = '$event_id'";
             $result1 = mysqli_query($conn,$sql1);
             if(mysqli_num_rows($result1)>0)
                {   
                    echo '
                    <table>
                       <tr>
                          <th>Volunteer Name</th>
                          <th>Email</th>
                          <th>Attendance</th>
                        </tr>
                    ';
                    while($row1 = mysqli_fetch_assoc($result1))
                    {
                        echo '
                        <tbody>
                        <tr>
                        <td><strong>'; echo $row1['vname']; echo '</strong></td>
                        <td>'; echo $row1['email_ID']; echo '</td>';
                        $email_ID=$row1['email_ID'];
                        echo '
                        <td> <button id="present" value="present" onclick="pre(\'' . $email_ID . '\')" >Present</button> <button id="absent" value="absent" onclick="abs(\'' . $email_ID . '\')">Absent</button> </td>
                        </tr>
                        </tbody>';

                    }


                }
                echo '
              </table>
        </div>

        <script> 
        function abs(email)
        { 
          
            "email_ID = " + email;
            ';
        $sql3="Update volunteers set attendance='absent' where email_ID='$email_ID' and event_id='$event_id'";
        if ($conn->query($sql3)) 
        {
            echo '
            document.getElementById("present").style.visibility = "visible";
            document.getElementById("absent").style.visibility = "hidden";
            ';
        }
        else
        {
            echo "alert('error');";
        }
       echo '}

        function pre(email)
        { 
         
            "email_ID = " + email;
            ';
        $sql2="Update volunteers set attendance='present' where email_ID='$email_ID' and event_id='$event_id'";
        if ($conn->query($sql2)) 
        {
            echo '
            document.getElementById("present").style.visibility = "hidden";
            document.getElementById("absent").style.visibility = "visible";
            ';
        }
        else
        {
            echo "alert('error');";
        }
       echo '}
       </script>
    </body>
</html>
';
}
}
}
?>