<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="chetanajr";

if(!$con= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
   die("Failed to connect!");
}