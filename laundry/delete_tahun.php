<?php
session_start();
include 'db.php';
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

$delete = mysqli_query($conn, "DELETE FROM data_tahun WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tahun.php');
}
else{
	echo 'Gagal upload';
}
