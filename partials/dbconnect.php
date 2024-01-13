<?php
$servername = "localhost";
$username = "root";
$password = "kishori108";
$database = "Project";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die(mysqli_connect_errno()."not connected");
}
else{
    // echo "connected";
}
?>