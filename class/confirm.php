<?php
 include('connect.php');
 $connect = new connect();
 session_start();
 if(isset($_SESSION['name']) && $_SESSION['pass'])
 {
    $name = $_SESSION['name'];
    $password = $_SESSION['pass'];
    $sql = "SELECT * FROM `login` WHERE username = '$name' and password = '$password'";
    $login = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($login);
    if($count== 0)
    {
       header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
 }
?>