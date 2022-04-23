<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
$connect = mysqli_connect('localhost','root','','website');
$sql = "insert into userinfor(userName, password) values ('$name', '$pass')";
// die($sql);
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:./dangnhap.php');