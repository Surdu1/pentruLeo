<?php
session_start();
include 'connect.php';
if(isset($_SESSION['numar'])&& isset($_SESSION['idd'])){
  echo $_SESSION['idd'];
$id = $_SESSION['idd'];
$_SESSION['nume_id'] = $id;
$produs = $_POST['id_produs'];
$sq = "SELECT * FROM user";
$r = mysqli_query($connect,$sq);
$row = $r -> fetch_assoc();
$numar = $row['numar'];
$numar = $numar + 1;
$_SESSION['numar'] = $numar;
echo $numar;
echo $produs;
$sql = "UPDATE user SET numar = '$numar' WHERE id = '$id'";
$result = mysqli_query($connect,$sql);
$pentru = "INSERT INTO cumparaturi (client_id,produs_id) VALUES('$id','$produs')";
$k = mysqli_query($connect, $pentru);
}
header('Location: index.php');
 ?>
