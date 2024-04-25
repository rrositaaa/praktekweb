<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur =$_POST[ 'umur'];
if($email == "rosita@gmail.com" && $password == "123" && $umur >= 16 && $umur <= 44){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb-main/dashboard.php');
}else{
    header('Location: http://localhost/praktekweb-main/index.php?error=Login Gagal');
}