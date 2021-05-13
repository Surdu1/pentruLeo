<?php
session_start();
require 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql ="SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($connect,$sql);
$row = $result->fetch_assoc();
$pass = $row['password'];
if($row['email']== $email){
if($pass == $password){
    $_SESSION['idd']=$row['id'];
    $_SESSION['name']=$row['username'];
    $_SESSION['password']=$row['password'];
    $_SESSION['id']=$row['id_produs_cumparat'];
    $_SESSION['numar']=$row['numar'];
    $_SESSION['email']=$row['email'];
}
else{
    header('Location: login.php?info=nugasit');
}
header('Location: index.php');
}
else{
    header('Location: login.php?info=noemail');
}
?>
