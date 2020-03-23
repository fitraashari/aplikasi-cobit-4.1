<?php
session_start();
include "koneksi.php";
		$nm_user = $_POST['nm_user']; 
		$jenkel = $_POST['jenkel']; 
		$username = $_POST['nick']; 
		$email = $_POST['email']; 
		$password = md5($_POST['password']);
		$lvl = $_POST['lvl'];
	
//$conn = mysqli_connect($host,$user,$pass,$db);

$exc= mysqli_query($conn,"INSERT INTO user VALUES('$username','$password','$email','$nm_user','$jenkel','$lvl');");

if($exc){
echo "berhasil menyimpan";
header("location:index.php?page=form_user&act=insert&status=success");
} else {	
echo "gagal menyimpan";
header("location:index.php?page=form_user&act=insert&status=failed");
}
?>