<?php
$login=$_POST['login'];
$password=$_POST['password'];
$k=$_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$db="meet_me_db";

    $conn = mysqli_connect($servername, $username, $password, $db);
    echo$password;
    if($result=$conn->query("SELECT * FROM users WHERE login='$login' AND password='$k'")){
        $i=mysqli_num_rows($result);
        if($i>0){
            echo"true";
        }else{
            echo"You've typed incorrect password, try again.";
        }
    }
?>