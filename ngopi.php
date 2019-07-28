<?php
	$conn = mysqli_connect('localhost','root','','ngopiin');
	 mysqli_query($conn,"INSERT INTO `data_login_ngopi`(`id_user`, `FIrst_Name`, `Your_Email`, `Create_Username`, `Password`) VALUES ('','".$_POST['fname']."','".$_POST['email']."','".$_POST['username']."','".md5($_POST['password'])."')");
	 header("location:index.php");
?>