<?php

//could wrap in function then call function insead of $mysqli-query($var).

$servername = "localhost";
$username=   "root";
$password = "";
$dbname = "php_login";

//create connection 
$mysqli = new mysqli($servername,$username,$password,$dbname);

//check connection

if ($mysqli->connect_error) {
    die("Connection Failed : " . $mysqli->connect_error );
}
 echo "connected successfully";

?>