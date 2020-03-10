<?php
session_start();
if(isset($_SESSION['email_ID']))
{
  $email_ID=$_SESSION['email_ID'];
  $vname=$_SESSION['vname'];
  echo '
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="css/searchstyle.css" rel="stylesheet" />
  </head>
  <body>
    <nav>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          
          <li id="log"><a href="newvlogin1.html">Logout</a></li>
      </ul>

  </nav>
    <div class="s002">
      <form name="f1" method="POST" action="searchresult2.php">
        <fieldset>
          <legend style="color:white">SEARCH AND FILTER EVENTS</legend>
        </fieldset>
        <div class="inner-form">
        <div class="input-field first-wrap">
            <select name="location" id="location" class="fa">

            <option value="">&#xf124; Location of the Event </option>
';

      $host = "localhost:3308";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "voluntaria";
      $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      if (mysqli_connect_error())
        {
        die("Connect Error(". mysqli_connect_errno().")". mysqli_connect_error());
        }
      else
        {
          $sql = mysqli_query($con, "SELECT location From event_info");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql))
          {
          echo "<option value='". $row["location"] ."'>" .$row["location"] ."</option>" ;
          }
          $_SESSION['email_ID']=$email_ID;
          $_SESSION['event_id']=$row['event_id'];
          $_SESSION['vname']=$vname;
        }
  echo '
              </option>
            </select>

          </div>

          <div class="input-field second-wrap">
            <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"></path>
              </svg>
            </div>
            <input class="datepicker" id="event_date" name="event_date" type="date" />
          </div>

          <div class="input-field fourth-wrap">
            <select id="event_type" name="event_type" data-trigger="" name="choices-single-default" class="fa">
             <option value="" id="event_type">&#xf0c0; Event Type</option>
              <option value="FundRaiser">Fund Raiser</option>
              <option value="Food Drive">Food Drive</option>
              <option  value="Charity Event">Charity Event</option>
              <option value="Entertainment Programme">Entertainment Programme</option>
              <option value="Donation Drive">Donation Drive</option>
            </select>
          </div>

          <div class="input-field fifth-wrap">
            <input class="btn-search" type="SUBMIT" value="SEARCH">
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script src="js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker",{});

    </script>
    <script>
      const choices = new Choices("[data-trigger]",
      {
        searchEnabled: false,
        itemSelectText: "",
      });

    </script>
  </body>
</html>
';
}
?>