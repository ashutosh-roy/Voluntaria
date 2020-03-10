<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <!--<link href="css/resultcss.css" rel="stylesheet" />-->

    <style>
    html {
  line-height: 1.15;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}

article,
aside,
footer,
header,
nav,
section
{
  display: block;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}


.s002 {
  min-height: 100vh;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;


  font-family: 'Poppins', sans-serif;
  background-image: url("images/vevent.jpg");
  background-size: cover;
  background-position: center center;
  padding: 15px;
}


nav {
  background:
  linear-gradient(rgb(5, 4, 12), rgb(0, 0, 0));
  margin: 0;
  overflow: hidden;
}
nav ul{
  margin: 0px;
  padding: 0px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  color:white;
}
nav ul li {
  display: inline-block;
  list-style-type: none;
}

nav > ul > li > a {
  color: rgb(255, 255, 255);
  background:
  linear-gradient(rgb(5, 4, 12), rgb(0, 0, 0));
  display: block;
  font-size: 18px;
  line-height: 2em;
  padding: 0.5em 0.5em;
  margin-left: 20px;
  margin-right: 10px;
  text-decoration: none;
}
#log{
  float: right;
  margin-right: 20px;
}
.create{
  width:700px;
  height: 600px;
  background-color: rgb(255, 255, 255);
  float:left;
  margin-top:40px;
  margin-left:50px;
  margin-right:30px;
  border-radius: 20px;
  border-style: none;
  font-size:22px;
  font-weight:bold;
  opacity: 0.7;
}
#t{
    color:black;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bolder;
    font-size:33px;

}
p{
    color:black;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bolder;
    font-size:30px;
    margin-left:20px;

}
#b{
    height: 50px;
    width: 200px;
    opacity: 1;
    background-color: black;
    color:white;
    font-size:22px;
    margin-left:27%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: bolder;
    border-radius: 20px;
}

#b:hover{
    background-color:#b90028;
    }
    </style>
  </head>
  <body>
    <nav>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
         
          <li id="log"><a href="newvlogin1.html">Logout</a></li>
      </ul>
  </nav>

  <div class='s002'>
  <br><br>
      <?php
      session_start();
      $event_id=$_SESSION['event_id'];
      $email_ID=$_SESSION['email_ID'];
      $location=$_POST['location'];
      $type=$_POST['event_type'];
      $date=$_POST['event_date'];
      $count =0;
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
        if($location !="" && $date =="" && $type =="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where location='$location'");
        }
        else if($location == "" && $date !="" && $type =="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where event_date='$date'");
        }
        else if($location == "" && $date =="" && $type !="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where event_type='$type'");
        }
        else if($location != "" && $date !="" && $type =="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where event_date='$date' AND location='$location' ");
        }
        else if($location != "" && $date =="" && $type !="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where location='$location' AND event_type='$type' ");
        }
        else if($location == "" && $date !="" && $type !="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where event_date='$date' AND event_type'$type'");
        }
        else if($location != "" && $date !="" && $type !="" )
        {
          $result= mysqli_query($conn,"SELECT * FROM event_info where event_date='$date' AND event_type'$type' AND location='$location' ");
        }
        if(mysqli_num_rows($result)==0)
        {
          echo "Sorry no events";
        }
        else
        {
        while($row = mysqli_fetch_array($result))
            {
            echo "<br><br>";
            echo " <div class='create'>";
              echo "<div id='t' align='center'>";
                echo " Event Name :  ";
                echo $row['event_name'];
                echo " </div>";

                echo " <p>Event Type:   ".$row['event_type']."</p>";
                echo "<br>";

                echo " <p>Date:   ".$row['event_date']."</p>";
                echo "<br>";
                echo " <p>Time:   ".$row['event_time']."</p>";
                echo "<br>";
                echo " <p>Location:   ".$row['location']."</p>";

                echo "<br>";
                echo " <button id='b' align='center' onclick='j()'> Join Event </button>";
            echo " </div>";

            $_SESSION['event_id']=$row['event_id'];
            $_SESSION['email_ID']=$email_ID;

            $count++;
            if($count%3==0)
            {
                echo "<br><br>";
            }
           }
        }
      }
    ?>
    <br><br><br>
 </div>
 <script type="text/javascript">
            function j()
            {
              window.open("joinevent.php");
            }
            </script>
  </body>
</html>