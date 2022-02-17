<?php
session_start();
// echo $_SESSION['name'];

if(isset($_SESSION['name'])){
    echo "Welcome ".$_SESSION['name']."<br>";
    echo "Your details are here - <br>";
    echo "Name :- ".$_SESSION['name']."<br>";
    echo "Password :- ".$_SESSION['password']."<br>";
    echo "City :- ".$_SESSION['city']."<br>";
    echo "Gender :- ".$_SESSION['gender']."<br>";
    echo "Education :- ".$_SESSION['education']."<br>";
    echo "<br>";
    echo "<a href='destroy.php'>Logout</a>";
}else{
    header('location:index.php');
    die();
}


?>