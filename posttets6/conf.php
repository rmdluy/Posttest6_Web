<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "eskrim";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("Gagal terhubung");
}