<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "creditials";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    die("Couldn't connect ");
}
