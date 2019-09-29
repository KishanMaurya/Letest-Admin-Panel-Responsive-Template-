<?php
session_start();
	include 'Includes/dbcon.php';
	if (isset($_POST['update'])) {
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$Query="UPDATE user SET name='$name', email='$email', pass='$pass' WHERE id='$id'";
		$run=mysqli_query($Query);
		if ($run) {
			$SESSION['success']="Your Data Is Updated";
			header('location:register.php');
		}else{
			$SESSION['success']="Your Data Is Not Updated";
			header('location:register.php');
		}
	}
?>