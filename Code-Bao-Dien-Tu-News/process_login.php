<?php

$email = $_POST['email'];
$pass = $_POST['pass'];
include 'connect.php';

$sql = "select * from userinfor
where userName = '$email' and password = '$pass'";
$_result = mysqli_query($connect,$sql);

$so_ket_qua = mysqli_num_rows($_result);
if($so_ket_qua == 1){
    session_start();
    $each = mysqli_fetch_array($_result);
    $_SESSION['iduser'] = $each['iduser'];
    $_SESSION['userName'] = $each['userName'];
    // $_SESSION['cap_do'] = $each['cap_do'];
    // $_SESSION['admin'] = 1;
    header("location:./index.php");
}
else{
    header("location:index.php?error=Ten dang nhap hoac mat khau sai");
}