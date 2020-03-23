<?php
session_start();
include "koneksi.php";
		$ACds101 = $_POST['ACds101']; 
		$ACds102 = $_POST['ACds102']; 
		$ACds103 = $_POST['ACds103']; 
		$ACds104 = $_POST['ACds104']; 
		//$ACds105 = $_POST['ACds105']; 
		//$ACds106 = $_POST['ACds106'];

		$PSPds101 = $_POST['PSPds101']; 
		$PSPds102 = $_POST['PSPds102']; 
		$PSPds103 = $_POST['PSPds103']; 
		$PSPds104 = $_POST['PSPds104']; 
		//$PSPds105 = $_POST['PSPds105']; 
		//$PSPds106 = $_POST['PSPds106'];
		
		$TAds101 = $_POST['TAds101']; 
		$TAds102 = $_POST['TAds102']; 
		$TAds103 = $_POST['TAds103']; 
		$TAds104 = $_POST['TAds104']; 
		//$TAds105 = $_POST['TAds105']; 
		//$TAds106 = $_POST['TAds106'];

		$SEds101 = $_POST['SEds101']; 
		$SEds102 = $_POST['SEds102']; 
		$SEds103 = $_POST['SEds103']; 
		$SEds104 = $_POST['SEds104']; 
		//$SEds105 = $_POST['SEds105']; 
		//$SEds106 = $_POST['SEds106'];
		
		$RAds101 = $_POST['RAds101']; 
		$RAds102 = $_POST['RAds102']; 
		$RAds103 = $_POST['RAds103']; 
		$RAds104 = $_POST['RAds104']; 
		//$RAds105 = $_POST['RAds105']; 
		//$RAds106 = $_POST['RAds106'];
		
		$GSMds101 = $_POST['GSMds101']; 
		$GSMds102 = $_POST['GSMds102']; 
		$GSMds103 = $_POST['GSMds103']; 
		$GSMds104 = $_POST['GSMds104']; 
		//$GSMds105 = $_POST['GSMds105']; 
		//$GSMds106 = $_POST['GSMds106'];
//$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_autocommit($conn,FALSE);

$acds10= mysqli_query($conn,"INSERT INTO ds10ac VALUES('$_SESSION[kd_user]','$ACds101','$ACds102','$ACds103','$ACds104');");
$pspds10= mysqli_query($conn,"INSERT INTO ds10psp VALUES('$_SESSION[kd_user]','$PSPds101','$PSPds102','$PSPds103','$PSPds104');");
$tads10= mysqli_query($conn,"INSERT INTO ds10ta VALUES('$_SESSION[kd_user]','$TAds101','$TAds102','$TAds103','$TAds104');");
$seds10= mysqli_query($conn,"INSERT INTO ds10se VALUES('$_SESSION[kd_user]','$SEds101','$SEds102','$SEds103','$SEds104');");
$rads10= mysqli_query($conn,"INSERT INTO ds10ra VALUES('$_SESSION[kd_user]','$RAds101','$RAds102','$RAds103','$RAds104');");
$gsmds10= mysqli_query($conn,"INSERT INTO ds10gsm VALUES('$_SESSION[kd_user]','$GSMds101','$GSMds102','$GSMds103','$GSMds104');");

//echo $nganu;
if($acds10 && $pspds10 && $tads10 && $seds10 && $rads10 && $gsmds10){
mysqli_commit($conn);
echo "berhasil menyimpan";
header("location:index.php?page=form_ds10&act=insert&status=success");
} else {
	mysqli_rollback($conn);
echo "gagal menyimpan";
header("location:index.php?page=form_ds10&act=insert&status=failed");
}
mysqli_close($conn);
?>