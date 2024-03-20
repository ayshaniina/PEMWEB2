<?php
$email = $_POST['email'];
$password = $_POST['password'];

if($email == 'ays@gmail.com' && $password == 'dualapan'){
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}