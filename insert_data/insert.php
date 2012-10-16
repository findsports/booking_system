<?php
$con = mysql_connect("localhost","root","");
if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
mysql_select_db("booking_form",$con);
$sql="INSERT INTO `activities`(`Id`, `Activity`, `Location`, `Centre`) VALUES ('$_POST[id]','$_POST[activity]','$_POST[location]','$_POST[centre]')";
if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    }
    echo "1 record added";
    
mysql_close($con);
?>
