<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile Page</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="civic/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="civic/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="civic/css/flaticon.css"/>
	<link rel="stylesheet" href="civic/css/owl.carousel.css"/>
	<link rel="stylesheet" href="civic/css/magnific-popup.css"/>
	<link rel="stylesheet" href="civic/css/prostyle1.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
	#log{
    float: right;
   
    
}
#pro{
    float: right;
}
#pro1{
	float:right;
}
	</style>
</head>
<body>
	<!-- Page Preloder -->
	<!--<div id="preloder">
		<div class="loader"></div>
	</div>-->
	<nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li style="margin-left:30%">Administrator Profile<li>
			<li id="log"><a href="index.html">Logout</a></li>
			<li id="pro1"><a href="admin.html">Add Event</a></li>
			<li id="pro"><a href="updproadm.html">Edit Profile</a></li>
			
        </ul>
        
    </nav>
  
	<!-- PHP CODE -->	
	<?php
	session_start();
	$host = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
	$dbname = "voluntaria";
	$username= $_SESSION['username'];
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }

    else
    {
		$sql="SELECT * from admin where username='$username'";
		//$result=$conn->query($sql);
		$result=mysqli_query($conn,$sql);
	   // $row=$result->fetch_assoc();
	   $row  = mysqli_fetch_array($result);
	   //$url = $_SESSION["image"];
		$conn->close();
	}

echo '
	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero-text">
							
								<h2>';echo ucfirst($row["organization_name"]); echo '</h2>
							</div>
							
							<div class="hero-info">
								<h2>About The Organisation:</h2>
								<ul>
												
									<li><span>Organization Name :  </span>'; echo $row["organization_name"] ; echo '</li>
									<li><span>Organization Type :  </span>'; echo $row["organization_type"] ; echo '</li>
									
									<li><span>Est. Date :  </span>August 25, 1988</li>
									<li><span>Admin Name        :  </span>'; echo $row["admin_name"]; echo '</li>
									<li><span>E-mail            :  </span>'; echo $row["email"]; echo '</li>
									<li><span>Phone             :  </span>'; echo $row["phone"]; echo '</li>
									<li><span>Username          : </span>'; echo $row["username"]; echo '</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								
								<img src="civic/img/boy.png" height="700px" width="700px" alt="5">
							</figure> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	';
	?>
	<!--====== Javascripts & Jquery ======-->
	<script src="civic\js/\query-2.1.4.min.js"></script>
	<script src="civic\js\bootstrap.min.js"></script>
	<script src="civic\js\owl.carousel.min.js"></script>
	<script src="civic\js\magnific-popup.min.js"></script>
	<script src="civic\js\circle-progress.min.js"></script>
	<script src="civic\js\main.js"></script>
</body>
</html>