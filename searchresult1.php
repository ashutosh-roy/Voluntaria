<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="css/resultcss.css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="news.html">News</a></li>
          <li id="log"><a href="vlogin1.html">Logout</a></li>
      </ul>
  </nav>
  <!--<div class='s002'> -->
      <?php 
      $host = "localhost";
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
        $result= mysqli_query($conn,"SELECT * FROM event_info");
        while($row = mysqli_fetch_array($result))
        {
          
            echo " <div class='create'>";
              echo "<div id='t' align='center'>";
                echo " Event Name :  ";
                echo $row['event_name'];
                echo " </div>";

                echo " <p>Event Type:</p>";
                echo $row['event_type'];

                echo " <p>Date:</p>";
                echo $row['event_date'];

                echo " <p>Time:</p>";
                echo $row['event_time'];

                echo " <p>Location:</p>";
                echo $row['location'];
                
                echo "<br><br>";
                echo " <button id='b' align='center'> Join Event </button>";
            echo " </div>";
        }
      }
    ?>
    <br><br><br>
 <!-- </div> -->
    
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
