<?php

    $conn = mysqli_connect('localhost:3308','root','');
    mysqli_select_db($conn,'voluntaria');
    
    $result = mysqli_query($conn,"SELECT * from volunteers");

    while($row = mysqli_fetch_array( $result )) {
    

        $frameworks=array();
        array_push($frameworks,$row['email_ID']);
        array_push($frameworks,$row['vname']);
        array_push($frameworks,$row['event_id']);
        $props[]=$frameworks;
} 
$hm = json_encode($props);
echo $hm;
?>
