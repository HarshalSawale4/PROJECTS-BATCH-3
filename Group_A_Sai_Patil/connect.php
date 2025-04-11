<?php
$host="localhost";
$user="root";
$pass="";
$db="jobprovider";
$conn= new mysqli($host,$user,$pass,$db);
if($conn->connext_error){
    echo " failed to connect DB" .$conn->connect_error;
}


?>