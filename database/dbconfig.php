<?php

$uname="root";
$password="";
$host="localhost";
$db="experd";
$conn=mysqli_connect($host,$uname,$password,$db);
if(!$conn)
{
    echo "connection failed";
}
?>