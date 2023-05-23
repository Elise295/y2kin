<?php
include('connect.php');
$connect = new connect();
session_start();

$name = $_POST['username'];
$password = $_POST['password'];

if (!empty($name) && !empty($password)) {
    $conn = $connect->ketnoi();
    $sql = "SELECT * FROM tbl_account WHERE username = '$name' and password = '$password'";
    $login = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($login);

    if ($count == 1) {
        $_SESSION['name'] = $name;
        $_SESSION['pass'] = $password;
        header("Location: ../page/home.php");
        exit();
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
} else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
