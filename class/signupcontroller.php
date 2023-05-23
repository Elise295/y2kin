<?php
include('connect.php');
$connect = new connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin từ biểu mẫu đăng ký
    $name = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Kiểm tra nếu các trường không trống
    if (!empty($name) && !empty($password) && !empty($repassword)) {
        $conn = $connect->ketnoi();

        // Kiểm tra xem tên người dùng đã tồn tại hay chưa
        $checkUsernameQuery = "SELECT * FROM tbl_account WHERE username = '$name'";
        $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);
        if (mysqli_num_rows($checkUsernameResult) > 0) {
            // Tên người dùng đã tồn tại, chuyển hướng đến trang đăng ký lại
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        }

        // Thực hiện câu truy vấn để thêm người dùng vào cơ sở dữ liệu
        $insertUserQuery = "INSERT INTO tbl_account (username, password) VALUES ('$name', '$password')";
        $insertUserResult = mysqli_query($conn, $insertUserQuery);

        if ($insertUserResult) {
            // Đăng ký thành công, chuyển hướng đến trang đăng nhập
            header("Location: ../page/login.php");
            exit();
        } else {
            // Đăng ký thất bại, chuyển hướng đến trang đăng ký lại
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        }
    } else {
        // Nếu có trường bị bỏ trống, chuyển hướng đến trang đăng ký lại
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
}
?>
