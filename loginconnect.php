<?php
session_start();
if(isset($_POST['submit']))
{
$username=(trim($_POST['username']));
$pass=(trim($_POST['pass']));

if (!empty($username) ||!empty($pass)) 
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "voluntaria";
    echo "hi";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    $username = stripslashes($username);
    $pass = stripslashes($pass);
    $username = mysql_real_escape_string($username);
    $pass = mysql_real_escape_string($pass);
    if (mysqli_connect_error()) 
    {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
        
        $sql="SELECT * FROM admin where username= '$username' and pass= '$pass'";
        $result= mysqli_query($conn,$sql);
        $count= mysqli_num_rows($result);
        if($count==1)
        {
            echo "Logged in";
            $_SESSION['login_user']=$username; // Initializing Session
           // header("location: profile.php");
        }
        else
        {
            echo "error";
        }
    }
  }
}

    /*function onLogin($user) {
    $token = GenerateRandomToken(); // generate a token, should be 128 - 256 bit
    storeTokenForUser($user, $token);
    $cookie = $user . ':' . $token;
    $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
    $cookie .= ':' . $mac;
    setcookie('rememberMe()', $cookie);
    }*/

   /*function rememberMe() {
        $cookie = isset($_COOKIE['rememberme']) ? $_COOKIE['rememberme'] : '';
        if ($cookie) {
            list ($user, $token, $mac) = explode(':', $cookie);
            if (!hash_equals(hash_hmac('sha256', $user . ':' . $token, SECRET_KEY), $mac)) {
                return false;
            }
            $usertoken = fetchTokenByUserName($user);
            if (hash_equals($usertoken, $token)) {
                logUserIn($user);
            }
        }
    }*/
    
    ?>
