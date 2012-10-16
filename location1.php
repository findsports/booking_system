<?php
$con = mysql_connect("localhost","root","");
if (!$con)
    {
        die('could not connect: ' . mysql_error());
    }
mysql_select_db("booking_form", $con);
$locator = $_POST["location"];

$sql = mysql_query("SELECT * FROM `activities` WHERE `Location` = \"$locator\"");


/*$result2 = mysql_query("SELECT `Location` FROM `activities` WHERE `id` = 1");*/

while($row = mysql_fetch_array($sql))
    { 
        echo $row['Activity'] . " " . $row['Centre']. " " . $row['Location'];
        echo "<br />";
        
    }
mysql_close($con);
?>