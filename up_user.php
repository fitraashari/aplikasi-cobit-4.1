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
if(!empty($password)){
$exc= mysqli_query($conn,"UPDATE user Set kd_user = '$username', password = '$password', email = '$email', nama_user = '$nm_user', jenkel = '$jenkel', lvl = '$lvl' Where kd_user = '$username';");
}else{
$exc= mysqli_query($conn,"UPDATE user Set kd_user = '$username', email = '$email', nama_user = '$nm_user', jenkel = '$jenkel', lvl = '$lvl' Where kd_user = '$username';");
}
if($exc){
echo "berhasil menyimpan";
header("location:index.php?page=edit_user&kd_user=$username&act=insert&status=success");
} else {	
echo "gagal menyimpan";
header("location:index.php?page=edit_user&kd_user=$username&act=insert&status=failed");
}
?>