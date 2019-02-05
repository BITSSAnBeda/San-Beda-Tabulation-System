<?php

session_start();

$con = mysqli_connect("localhost","root","mysql","SanBedaTab");

if(mysqli_connect_errno()){
    echo "Database Error".mysqli_connect_error();
}


?>