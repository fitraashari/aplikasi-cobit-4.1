<?php
session_start();
include "koneksi.php";
		$ACds51 = $_POST['ACds51']; 
		$ACds52 = $_POST['ACds52']; 
		$ACds53 = $_POST['ACds53']; 
		$ACds54 = $_POST['ACds54']; 
		$ACds55 = $_POST['ACds55']; 
		$ACds56 = $_POST['ACds56'];
		$ACds57 = $_POST['ACds57'];
		$ACds58 = $_POST['ACds58'];
		$ACds59 = $_POST['ACds59'];
		$ACds510 = $_POST['ACds510'];
		$ACds511 = $_POST['ACds511'];

		$PSPds51 = $_POST['PSPds51']; 
		$PSPds52 = $_POST['PSPds52']; 
		$PSPds53 = $_POST['PSPds53']; 
		$PSPds54 = $_POST['PSPds54']; 
		$PSPds55 = $_POST['PSPds55']; 
		$PSPds56 = $_POST['PSPds56'];
		$PSPds57 = $_POST['PSPds57'];
		$PSPds58 = $_POST['PSPds58'];
		$PSPds59 = $_POST['PSPds59'];
		$PSPds510 = $_POST['PSPds510'];
		$PSPds511 = $_POST['PSPds511'];		
		
		$TAds51 = $_POST['TAds51']; 
		$TAds52 = $_POST['TAds52']; 
		$TAds53 = $_POST['TAds53']; 
		$TAds54 = $_POST['TAds54']; 
		$TAds55 = $_POST['TAds55']; 
		$TAds56 = $_POST['TAds56'];
		$TAds57 = $_POST['TAds57'];
		$TAds58 = $_POST['TAds58'];
		$TAds59 = $_POST['TAds59'];
		$TAds510 = $_POST['TAds510'];
		$TAds511 = $_POST['TAds511'];

		$SEds51 = $_POST['SEds51']; 
		$SEds52 = $_POST['SEds52']; 
		$SEds53 = $_POST['SEds53']; 
		$SEds54 = $_POST['SEds54']; 
		$SEds55 = $_POST['SEds55']; 
		$SEds56 = $_POST['SEds56'];
		$SEds57 = $_POST['SEds57'];
		$SEds58 = $_POST['SEds58'];
		$SEds59 = $_POST['SEds59'];
		$SEds510 = $_POST['SEds510'];
		$SEds511 = $_POST['SEds511'];
		
		$RAds51 = $_POST['RAds51']; 
		$RAds52 = $_POST['RAds52']; 
		$RAds53 = $_POST['RAds53']; 
		$RAds54 = $_POST['RAds54']; 
		$RAds55 = $_POST['RAds55']; 
		$RAds56 = $_POST['RAds56'];
		$RAds57 = $_POST['RAds57'];
		$RAds58 = $_POST['RAds58'];
		$RAds59 = $_POST['RAds59'];
		$RAds510 = $_POST['RAds510'];
		$RAds511 = $_POST['RAds511'];
		
		$GSMds51 = $_POST['GSMds51']; 
		$GSMds52 = $_POST['GSMds52']; 
		$GSMds53 = $_POST['GSMds53']; 
		$GSMds54 = $_POST['GSMds54']; 
		$GSMds55 = $_POST['GSMds55']; 
		$GSMds56 = $_POST['GSMds56'];
		$GSMds57 = $_POST['GSMds57'];
		$GSMds58 = $_POST['GSMds58'];
		$GSMds59 = $_POST['GSMds59'];
		$GSMds510 = $_POST['GSMds510'];
		$GSMds511 = $_POST['GSMds511'];
		
//$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_autocommit($conn,FALSE);

$acds5= mysqli_query($conn,"INSERT INTO ds5ac VALUES('$_SESSION[kd_user]','$ACds51','$ACds52','$ACds53','$ACds54','$ACds55','$ACds56','$ACds57','$ACds58','$ACds59','$ACds510','$ACds511');");
$pspds5= mysqli_query($conn,"INSERT INTO ds5psp VALUES('$_SESSION[kd_user]','$PSPds51','$PSPds52','$PSPds53','$PSPds54','$PSPds55','$PSPds56','$PSPds57','$PSPds58','$PSPds59','$PSPds510','$PSPds511');");
$tads5= mysqli_query($conn,"INSERT INTO ds5ta VALUES('$_SESSION[kd_user]','$TAds51','$TAds52','$TAds53','$TAds54','$TAds55','$TAds56','$TAds57','$TAds58','$TAds59','$TAds510','$TAds511');");
$seds5= mysqli_query($conn,"INSERT INTO ds5se VALUES('$_SESSION[kd_user]','$SEds51','$SEds52','$SEds53','$SEds54','$SEds55','$SEds56','$SEds57','$SEds58','$SEds59','$SEds510','$SEds511');");
$rads5= mysqli_query($conn,"INSERT INTO ds5ra VALUES('$_SESSION[kd_user]','$RAds51','$RAds52','$RAds53','$RAds54','$RAds55','$RAds56','$RAds57','$RAds58','$RAds59','$RAds510','$RAds511');");
$gsmds5= mysqli_query($conn,"INSERT INTO ds5gsm VALUES('$_SESSION[kd_user]','$GSMds51','$GSMds52','$GSMds53','$GSMds54','$GSMds55','$GSMds56','$GSMds57','$GSMds58','$GSMds59','$GSMds510','$GSMds511');");

//echo $nganu;
if($acds5 && $pspds5 && $tads5 && $seds5 && $rads5 && $gsmds5){
mysqli_commit($conn);
echo "berhasil menyimpan";
header("location:index.php?page=form_ds5&act=insert&status=success");
} else {
	mysqli_rollback($conn);
echo "gagal menyimpan";
header("location:index.php?page=form_ds5&act=insert&status=failed");
}
mysqli_close($conn);
?>