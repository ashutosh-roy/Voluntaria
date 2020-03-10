<?php 
session_start();
 ?>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
    <style>
    .create{
  width:550px;
  height: 500px;
  background-color:white;
  float:left;
  margin-top:40px;
  margin-left:50px;
  margin-right:30px;
  margin-bottom:40px;
  border-radius: 20px;
  border-style: none;
  font-size:22px;
  font-weight:bold;
  background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);   
  }
  .create1{
     height:200px;
     width:550px;
     background: linear-gradient(to right, #004e92, #000428);
     border-bottom-left-radius: 20px;
     border-bottom-right-radius: 20px;
     margin-top: 30%;
    }
        
     #tt{
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    font-size:40px;
    margin-top: 0px;
    margin-bottom:20px;
    color: rgb(7, 52, 110);
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    padding:20px 0px;
    }
    p{
       font-size:28px;
    }
        span{
            float:left;
            margin-left:140px;
            padding-right:10px;
          
            font-family: 'Bree Serif';
            font-weight: lighter;
        }
        #s1{
            margin-left:10px;
            font-size:28px;
            margin-right:100px;
            margin-bottom:30px;
            
        }
        #eb {
    margin-top: 50px;
    width: 200px;
    height: 70px;
   
background: linear-gradient(to right, #004e92, #000428); 

    border-radius: 20px;
    box-sizing: border-box;
    text-decoration: none;
    font-family: times new roman;
    font-weight: bolder;
    font-size: 29px;
    color: white;
    text-align: center;
    transition: all 0.2s;
    border-color: #7d90ad;
}
#eb:hover{
    background-color:#48b0ec;

    font-size:32px;
}
a:hover{
    color:white;
}
        </style>
     
</head>
<body>
<?php

$conn = new mysqli("localhost:3308", "root", "", "voluntaria");
if($conn->connect_error) {
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
        while($row = mysqli_fetch_assoc($result))   
        {      
                $event_id=$row['event_id'];
                echo "<div class='create'>";
                echo "<div id='tt' align='center'>";
                
                echo ucfirst($row['event_name']);
                echo " </div>";

                echo " <p><span>Type:  </span>"."</p>"."<span id='s1'>".$row['event_type']."</span>";
                echo "<br>";

                echo " <p><span>Date:  </span>"."</p>"."<span id='s1'>".$row['event_date']."</span>";
                echo "<br>";
                echo " <p><span>Time:  </span>"."</p>"."<span id='s1'>".$row['event_time']."</span>";
                echo "  <div class='create1' id='c1'>";
                echo '  <button id="eb" onclick="ep(\'' . $event_id . '\')">View Details</button>';
                echo "</div>";
                echo "<br>";    
                echo "</div>";
        }
        }
    }
    echo '<script>
function ep(event_id)
{
	document.cookie="e = " + event_id;
	';
	echo '
	window.open("eventprofile.php");
}
</script>
';
?>
</body>
</html>