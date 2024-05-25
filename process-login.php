<?php
$open_connect = 1;
require('connect.php');

if (isset($_POST['email_account']) && isset($_POST['password_account'])) {
    $email_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['email_account']));
    $password_account = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['password_account']));

    if (empty($email_account) || empty($password_account)) {
        echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน'); window.location.href='form-login.php';</script>";
        exit();
    } else {
        $query_check_email = "SELECT * FROM account WHERE email_account = '$email_account'";
        $result = mysqli_query($connect, $query_check_email);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $salt_account = $row['salt_account'];
            $stored_password = $row['password_account'];
            $password_account = $password_account . $salt_account;

            if (password_verify($password_account, $stored_password)) {
                // เริ่ม session และตั้งค่าตัวแปรของผู้ใช้
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email_account'] = $row['email_account'];
                $_SESSION['role'] = $row['role'];

                echo "<script>alert('เข้าสู่ระบบสำเร็จ'); window.location.href='dashboard.html';</script>";
                exit();
            } else {
                echo "<script>alert('รหัสผ่านไม่ถูกต้อง'); window.location.href='form-login.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('ไม่พบผู้ใช้งานนี้'); window.location.href='form-login.php';</script>";
            exit();
        }
    }
} else {
    header('Location: form-login.php');
    exit();
}
?>
