<?php
$servername="localhost";
$username="root";
$password="";
$database="project";
$connect= mysqli_connect($servername,$username,$password,$database);
if (!$connect) {
    # code...
    die("sorry not connect : ".mysqli_connect_error());
}
else{
    // echo"database successfully connect";
}
?>