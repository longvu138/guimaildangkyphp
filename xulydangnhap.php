<?php

if (isset($_POST["dangnhap"])) {

    //lấy thông tin từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password == "") {
        echo " <script> alert(' username hoặc password bạn không được để trống!') </script>";
       header('location:login.php');
    } else {
        require_once "config.php";
        $sql = "SELECT * FROM users where email ='$username' and password = '$password' ";
        $query = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 0) {
            echo " <script> alert(' tài khoản hoặc mật khẩu không chính xác!') </script>";
          require"login.php";
        } else {
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: trangchu.php');
        }
    }
}
?>