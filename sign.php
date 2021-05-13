<?php
if(empty($_POST['username'])){
    header('Location: sign-up.php?info=nousername');
    die();
}
if(empty($_POST['password'])){
    header('Location: sign-up.php?info=nopassword');
    die();
}
if(empty($_POST['email'])){
    header('Location: sign-up.php?info=noemail');
    die();
}
require 'connect.php';
$nume = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO user (username,password,email) VALUES('$nume','$password','$email')";
$result = mysqli_query($connect,$sql);
header('Location: index.php');
?>
