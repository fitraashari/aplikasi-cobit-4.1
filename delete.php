<?php
include "koneksi.php";
$kd_user = $_GET['kd'];
$tabel = $_GET['tabel'];

if ($tabel == "ds1"){
	$ekse = mysqli_query($conn,"DELETE ds1ac,ds1gsm,ds1psp,ds1ra,ds1se,ds1ta from ds1ac INNER JOIN ds1gsm INNER JOIN ds1psp INNER JOIN ds1ra INNER JOIN ds1se INNER JOIN ds1ta 
	where ds1ac.kd_user = '$kd_user' AND ds1gsm.kd_user = '$kd_user' AND ds1psp.kd_user = '$kd_user' AND ds1ra.kd_user = '$kd_user' AND ds1se.kd_user = '$kd_user' AND ds1ta.kd_user = '$kd_user'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=ds1&act=delete&status=success');
	}
	else {
				header('location:index.php?page=ds1&act=delete&status=failed');
	}

}
if ($tabel == "ds5"){
	$ekse = mysqli_query($conn,"DELETE ds5ac,ds5gsm,ds5psp,ds5ra,ds5se,ds5ta from ds5ac INNER JOIN ds5gsm INNER JOIN ds5psp INNER JOIN ds5ra INNER JOIN ds5se INNER JOIN ds5ta 
	where ds5ac.kd_user = '$kd_user' AND ds5gsm.kd_user = '$kd_user' AND ds5psp.kd_user = '$kd_user' AND ds5ra.kd_user = '$kd_user' AND ds5se.kd_user = '$kd_user' AND ds5ta.kd_user = '$kd_user'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=ds5&act=delete&status=success');
	}
	else {
				header('location:index.php?page=ds5&act=delete&status=failed');
	}

}
if ($tabel == "ds10"){
	$ekse = mysqli_query($conn,"DELETE ds10ac,ds10gsm,ds10psp,ds10ra,ds10se,ds10ta from ds10ac INNER JOIN ds10gsm INNER JOIN ds10psp INNER JOIN ds10ra INNER JOIN ds10se INNER JOIN ds10ta 
	where ds10ac.kd_user = '$kd_user' AND ds10gsm.kd_user = '$kd_user' AND ds10psp.kd_user = '$kd_user' AND ds10ra.kd_user = '$kd_user' AND ds10se.kd_user = '$kd_user' AND ds10ta.kd_user = '$kd_user'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=ds10&act=delete&status=success');
	}
	else {
				header('location:index.php?page=ds10&act=delete&status=failed');
	}

}
if ($tabel == "user"){
	$ekse = mysqli_query($conn,"DELETE from user where kd_user = '$kd_user'") or die(mysql_error());
	if ($ekse == 1){
		header('location:index.php?page=user&act=delete&status=success');
	}
	else {
				header('location:index.php?page=user&act=delete&status=failed');
	}

}

?>