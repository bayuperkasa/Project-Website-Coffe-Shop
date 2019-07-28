<?php
	$conn = mysqli_connect('localhost','root','','ngopiin');
	$query =  mysqli_query($conn,"SELECT * FROM `data_login_ngopi` WHERE Create_Username='".$_POST["username"]."' AND Password='".md5($_POST["password"])."'");
	$hasil = mysqli_fetch_assoc($query);
	if ($hasil != NULL){
	 header("location:dashboard.php");
	} else {
	 header("location:index.php");
	}
?>