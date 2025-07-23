<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND user_pass='$password'";
$result = $conn->query($sql); 
$row = mysqli_fetch_array($result);
if ($result->num_rows >= 1) {
    $_SESSION['username'] = $row['username'];
    $_SESSION['user_fullname'] = $row['user_fullname'];
    header('location:dist/index.php');
} elseif($username == "" and $password == "") {
    echo "<script>
            alert('กรุณากรอกข้อมูล username และ password');
            location.href='login.php';
        </script>";
} elseif($password == "") {
    echo "<script>
            alert('ยังไม่ได้ใส่ password');
            location.href='login.php';
        </script>";
} elseif($username == "") {
    echo "<script>
            alert('ยังไม่ได้ใส่ username');
            location.href='login.php';
        </script>";
} else {
    echo "<script>
            alert('failed login');
            location.href='login.php';
        </script>";
}

