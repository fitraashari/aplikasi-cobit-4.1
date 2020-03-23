<?php
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

		if(!empty($ACds11)){
//$conn = mysqli_connect($host,$user,$pass,$db);
//mysqli_query("SET AUTOCOMMIT=0");
//mysqli_query("START TRANSACTION");
$nganu = "INSERT INTO ds1ac VALUES('$_SESSION[kd_user]','$ACds11','$ACds12','$ACds13','$ACds14','$ACds15','$ACds16');";
$acds1= mysqli_query($conn,$nganu);
echo $pspds1;
if($acds1 && $pspds1){
//mysqli_query("COMMIT");
header("location:index.php?page=f_ds1&status=success");
} else {
	//mysqli_query("ROLLBACK");
echo "gagal menyimpan";
}}
?>