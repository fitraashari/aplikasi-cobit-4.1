<?php 
//ds10AC
$qry_ds101ac=mysqli_query($conn,"SELECT sum(ds101ac)/count(ds101ac) as ds101ac from ds10ac");
$data_ds101ac=mysqli_fetch_array($qry_ds101ac);
$rata_ds101ac=$data_ds101ac[0];

$qry_ds102ac=mysqli_query($conn,"SELECT sum(ds102ac)/count(ds102ac) as ds102ac from ds10ac");
$data_ds102ac=mysqli_fetch_array($qry_ds102ac);
$rata_ds102ac=$data_ds102ac[0];

$qry_ds103ac=mysqli_query($conn,"SELECT sum(ds103ac)/count(ds103ac) as ds103ac from ds10ac");
$data_ds103ac=mysqli_fetch_array($qry_ds103ac);
$rata_ds103ac=$data_ds103ac[0];

$qry_ds104ac=mysqli_query($conn,"SELECT sum(ds104ac)/count(ds104ac) as ds104ac from ds10ac");
$data_ds104ac=mysqli_fetch_array($qry_ds104ac);
$rata_ds104ac=$data_ds104ac[0];

//ds10PSP
$qry_ds101psp=mysqli_query($conn,"SELECT sum(ds101psp)/count(ds101psp) as ds101psp from ds10psp");
$data_ds101psp=mysqli_fetch_array($qry_ds101psp);
$rata_ds101psp=$data_ds101psp[0];

$qry_ds102psp=mysqli_query($conn,"SELECT sum(ds102psp)/count(ds102psp) as ds102psp from ds10psp");
$data_ds102psp=mysqli_fetch_array($qry_ds102psp);
$rata_ds102psp=$data_ds102psp[0];

$qry_ds103psp=mysqli_query($conn,"SELECT sum(ds103psp)/count(ds103psp) as ds103psp from ds10psp");
$data_ds103psp=mysqli_fetch_array($qry_ds103psp);
$rata_ds103psp=$data_ds103psp[0];

$qry_ds104psp=mysqli_query($conn,"SELECT sum(ds104psp)/count(ds104psp) as ds104psp from ds10psp");
$data_ds104psp=mysqli_fetch_array($qry_ds104psp);
$rata_ds104psp=$data_ds104psp[0];


//ds10TA
$qry_ds101ta=mysqli_query($conn,"SELECT sum(ds101ta)/count(ds101ta) as ds101ta from ds10ta");
$data_ds101ta=mysqli_fetch_array($qry_ds101ta);
$rata_ds101ta=$data_ds101ta[0];
$qry_ds102ta=mysqli_query($conn,"SELECT sum(ds102ta)/count(ds102ta) as ds102ta from ds10ta");
$data_ds102ta=mysqli_fetch_array($qry_ds102ta);
$rata_ds102ta=$data_ds102ta[0];
$qry_ds103ta=mysqli_query($conn,"SELECT sum(ds103ta)/count(ds103ta) as ds103ta from ds10ta");
$data_ds103ta=mysqli_fetch_array($qry_ds103ta);
$rata_ds103ta=$data_ds103ta[0];
$qry_ds104ta=mysqli_query($conn,"SELECT sum(ds104ta)/count(ds104ta) as ds104ta from ds10ta");
$data_ds104ta=mysqli_fetch_array($qry_ds104ta);
$rata_ds104ta=$data_ds104ta[0];


//ds10SE
$qry_ds101se=mysqli_query($conn,"SELECT sum(ds101se)/count(ds101se) as ds101se from ds10se");
$data_ds101se=mysqli_fetch_array($qry_ds101se);
$rata_ds101se=$data_ds101se[0];
$qry_ds102se=mysqli_query($conn,"SELECT sum(ds102se)/count(ds102se) as ds102se from ds10se");
$data_ds102se=mysqli_fetch_array($qry_ds102se);
$rata_ds102se=$data_ds102se[0];
$qry_ds103se=mysqli_query($conn,"SELECT sum(ds103se)/count(ds103se) as ds103se from ds10se");
$data_ds103se=mysqli_fetch_array($qry_ds103se);
$rata_ds103se=$data_ds103se[0];
$qry_ds104se=mysqli_query($conn,"SELECT sum(ds104se)/count(ds104se) as ds104se from ds10se");
$data_ds104se=mysqli_fetch_array($qry_ds104se);
$rata_ds104se=$data_ds104se[0];

//ds10RA
$qry_ds101ra=mysqli_query($conn,"SELECT sum(ds101ra)/count(ds101ra) as ds101ra from ds10ra");
$data_ds101ra=mysqli_fetch_array($qry_ds101ra);
$rata_ds101ra=$data_ds101ra[0];
$qry_ds102ra=mysqli_query($conn,"SELECT sum(ds102ra)/count(ds102ra) as ds102ra from ds10ra");
$data_ds102ra=mysqli_fetch_array($qry_ds102ra);
$rata_ds102ra=$data_ds102ra[0];
$qry_ds103ra=mysqli_query($conn,"SELECT sum(ds103ra)/count(ds103ra) as ds103ra from ds10ra");
$data_ds103ra=mysqli_fetch_array($qry_ds103ra);
$rata_ds103ra=$data_ds103ra[0];
$qry_ds104ra=mysqli_query($conn,"SELECT sum(ds104ra)/count(ds104ra) as ds104ra from ds10ra");
$data_ds104ra=mysqli_fetch_array($qry_ds104ra);
$rata_ds104ra=$data_ds104ra[0];

//ds10GSM
$qry_ds101gsm=mysqli_query($conn,"SELECT sum(ds101gsm)/count(ds101gsm) as ds101gsm from ds10gsm");
$data_ds101gsm=mysqli_fetch_array($qry_ds101gsm);
$rata_ds101gsm=$data_ds101gsm[0];
$qry_ds102gsm=mysqli_query($conn,"SELECT sum(ds102gsm)/count(ds102gsm) as ds102gsm from ds10gsm");
$data_ds102gsm=mysqli_fetch_array($qry_ds102gsm);
$rata_ds102gsm=$data_ds102gsm[0];
$qry_ds103gsm=mysqli_query($conn,"SELECT sum(ds103gsm)/count(ds103gsm) as ds103gsm from ds10gsm");
$data_ds103gsm=mysqli_fetch_array($qry_ds103gsm);
$rata_ds103gsm=$data_ds103gsm[0];
$qry_ds104gsm=mysqli_query($conn,"SELECT sum(ds104gsm)/count(ds104gsm) as ds104gsm from ds10gsm");
$data_ds104gsm=mysqli_fetch_array($qry_ds104gsm);
$rata_ds104gsm=$data_ds104gsm[0];

$rata2_ds101 = number_format(($rata_ds101ac + $rata_ds101psp + $rata_ds101ta + $rata_ds101se +$rata_ds101ra + $rata_ds101gsm)/6,2);
			$rata2_ds102 = number_format(($rata_ds102ac + $rata_ds102psp + $rata_ds102ta + $rata_ds102se +$rata_ds102ra + $rata_ds102gsm)/6,2);
			$rata2_ds103 = number_format(($rata_ds103ac + $rata_ds103psp + $rata_ds103ta + $rata_ds103se +$rata_ds103ra + $rata_ds103gsm)/6,2);
			$rata2_ds104 = number_format(($rata_ds104ac + $rata_ds104psp + $rata_ds104ta + $rata_ds104se +$rata_ds104ra + $rata_ds104gsm)/6,2);

$asis_ds10=number_format(($rata2_ds101+$rata2_ds102+$rata2_ds103+$rata2_ds104)/4,2)
 ?>