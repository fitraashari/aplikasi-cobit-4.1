<?php
session_start();
include "koneksi.php";
		$ACds11 = $_POST['ACds11']; 
		$ACds12 = $_POST['ACds12']; 
		$ACds13 = $_POST['ACds13']; 
		$ACds14 = $_POST['ACds14']; 
		$ACds15 = $_POST['ACds15']; 
		$ACds16 = $_POST['ACds16'];

		$PSPds11 = $_POST['PSPds11']; 
		$PSPds12 = $_POST['PSPds12']; 
		$PSPds13 = $_POST['PSPds13']; 
		$PSPds14 = $_POST['PSPds14']; 
		$PSPds15 = $_POST['PSPds15']; 
		$PSPds16 = $_POST['PSPds16'];
		
		$TAds11 = $_POST['TAds11']; 
		$TAds12 = $_POST['TAds12']; 
		$TAds13 = $_POST['TAds13']; 
		$TAds14 = $_POST['TAds14']; 
		$TAds15 = $_POST['TAds15']; 
		$TAds16 = $_POST['TAds16'];

		$SEds11 = $_POST['SEds11']; 
		$SEds12 = $_POST['SEds12']; 
		$SEds13 = $_POST['SEds13']; 
		$SEds14 = $_POST['SEds14']; 
		$SEds15 = $_POST['SEds15']; 
		$SEds16 = $_POST['SEds16'];
		
		$RAds11 = $_POST['RAds11']; 
		$RAds12 = $_POST['RAds12']; 
		$RAds13 = $_POST['RAds13']; 
		$RAds14 = $_POST['RAds14']; 
		$RAds15 = $_POST['RAds15']; 
		$RAds16 = $_POST['RAds16'];
		
		$GSMds11 = $_POST['GSMds11']; 
		$GSMds12 = $_POST['GSMds12']; 
		$GSMds13 = $_POST['GSMds13']; 
		$GSMds14 = $_POST['GSMds14']; 
		$GSMds15 = $_POST['GSMds15']; 
		$GSMds16 = $_POST['GSMds16'];
//$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_autocommit($conn,FALSE);

$acds1= mysqli_query($conn,"INSERT INTO ds1ac VALUES('$_SESSION[kd_user]','$ACds11','$ACds12','$ACds13','$ACds14','$ACds15','$ACds16');");
$pspds1= mysqli_query($conn,"INSERT INTO ds1psp VALUES('$_SESSION[kd_user]','$PSPds11','$PSPds12','$PSPds13','$PSPds14','$PSPds15','$PSPds16');");
$tads1= mysqli_query($conn,"INSERT INTO ds1ta VALUES('$_SESSION[kd_user]','$TAds11','$TAds12','$TAds13','$TAds14','$TAds15','$TAds16');");
$seds1= mysqli_query($conn,"INSERT INTO ds1se VALUES('$_SESSION[kd_user]','$SEds11','$SEds12','$SEds13','$SEds14','$SEds15','$SEds16');");
$rads1= mysqli_query($conn,"INSERT INTO ds1ra VALUES('$_SESSION[kd_user]','$RAds11','$RAds12','$RAds13','$RAds14','$RAds15','$RAds16');");
$gsmds1= mysqli_query($conn,"INSERT INTO ds1gsm VALUES('$_SESSION[kd_user]','$GSMds11','$GSMds12','$GSMds13','$GSMds14','$GSMds15','$GSMds16');");

//echo $nganu;
if($acds1 && $pspds1 && $tads1 && $seds1 && $rads1 && $gsmds1){
mysqli_commit($conn);
echo "berhasil menyimpan";
header("location:index.php?page=form_ds1&act=insert&status=success");
} else {
	mysqli_rollback($conn);
echo "gagal menyimpan";
header("location:index.php?page=form_ds1&act=insert&status=failed");
}
mysqli_close($conn);
?>