<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

include("connection.php");

//getting id of the data from url
$id = $_GET['id'];


$result=mysqli_query($mysqli, "DELETE FROM products WHERE id=$id");


header("Location:view.php");
?>
