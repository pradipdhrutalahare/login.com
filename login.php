<?php
session_start();
//connet to database
include 'db_connection.php';

//variable teken from form 

$username=Trim(stripslashes($_POST['username']));
$password=Trim(stripslashes($_POST['password']));
$hour = time() + 3600;
setcookie('remember_me', $_POST['username'],$hour);
//Accessing account from database 
$sql = "SELECT* FROM users  WHERE username='$username'";

//getting result from database

$result = mysqli_query($mysqli,$sql);

//counting amount of records
$count = MYSQLI_NUM_ROWS($result);
//if theres one record carry one

if ($count==1) {
    //convert db result array into text

    while ($row = mysqli_fetch_array($result)) {
        //Assinging variable to password record
        $dbpass=$row['password'];

    }
    //verifying password
    if (password_verify($password,$dbpass)) {
        $_SESSION['login_user'] = $username;
        header("location:profile.php");
    }else{
        header("location:index.php");
    }
}
?>