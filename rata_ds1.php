<?php 
//ds1AC
$qry_ds11ac=mysqli_query($conn,"SELECT sum(ds11ac)/count(ds11ac) as ds11ac from ds1ac");
$data_ds11ac=mysqli_fetch_array($qry_ds11ac);
$rata_ds11ac=$data_ds11ac[0];

$qry_ds12ac=mysqli_query($conn,"SELECT sum(ds12ac)/count(ds12ac) as ds12ac from ds1ac");
$data_ds12ac=mysqli_fetch_array($qry_ds12ac);
$rata_ds12ac=$data_ds12ac[0];

$qry_ds13ac=mysqli_query($conn,"SELECT sum(ds13ac)/count(ds13ac) as ds13ac from ds1ac");
$data_ds13ac=mysqli_fetch_array($qry_ds13ac);
$rata_ds13ac=$data_ds13ac[0];

$qry_ds14ac=mysqli_query($conn,"SELECT sum(ds14ac)/count(ds14ac) as ds14ac from ds1ac");
$data_ds14ac=mysqli_fetch_array($qry_ds14ac);
$rata_ds14ac=$data_ds14ac[0];

$qry_ds15ac=mysqli_query($conn,"SELECT sum(ds15ac)/count(ds15ac) as ds15ac from ds1ac");
$data_ds15ac=mysqli_fetch_array($qry_ds15ac);
$rata_ds15ac=$data_ds15ac[0];

$qry_ds16ac=mysqli_query($conn,"SELECT sum(ds16ac)/count(ds16ac) as ds116ac from ds1ac");
$data_ds16ac=mysqli_fetch_array($qry_ds16ac);
$rata_ds16ac=$data_ds16ac[0];

//ds1PSP
$qry_ds11psp=mysqli_query($conn,"SELECT sum(ds11psp)/count(ds11psp) as ds11psp from ds1psp");
$data_ds11psp=mysqli_fetch_array($qry_ds11psp);
$rata_ds11psp=$data_ds11psp[0];

$qry_ds12psp=mysqli_query($conn,"SELECT sum(ds12psp)/count(ds12psp) as ds12psp from ds1psp");
$data_ds12psp=mysqli_fetch_array($qry_ds12psp);
$rata_ds12psp=$data_ds12psp[0];

$qry_ds13psp=mysqli_query($conn,"SELECT sum(ds13psp)/count(ds13psp) as ds13psp from ds1psp");
$data_ds13psp=mysqli_fetch_array($qry_ds13psp);
$rata_ds13psp=$data_ds13psp[0];

$qry_ds14psp=mysqli_query($conn,"SELECT sum(ds14psp)/count(ds14psp) as ds14psp from ds1psp");
$data_ds14psp=mysqli_fetch_array($qry_ds14psp);
$rata_ds14psp=$data_ds14psp[0];

$qry_ds15psp=mysqli_query($conn,"SELECT sum(ds15psp)/count(ds15psp) as ds15psp from ds1psp");
$data_ds15psp=mysqli_fetch_array($qry_ds15psp);
$rata_ds15psp=$data_ds15psp[0];

$qry_ds16psp=mysqli_query($conn,"SELECT sum(ds16psp)/count(ds16psp) as ds16psp from ds1psp");
$data_ds16psp=mysqli_fetch_array($qry_ds16psp);
$rata_ds16psp=$data_ds16psp[0];

//ds1TA
$qry_ds11ta=mysqli_query($conn,"SELECT sum(ds11ta)/count(ds11ta) as ds11ta from ds1ta");
$data_ds11ta=mysqli_fetch_array($qry_ds11ta);
$rata_ds11ta=$data_ds11ta[0];
$qry_ds12ta=mysqli_query($conn,"SELECT sum(ds12ta)/count(ds12ta) as ds12ta from ds1ta");
$data_ds12ta=mysqli_fetch_array($qry_ds12ta);
$rata_ds12ta=$data_ds12ta[0];
$qry_ds13ta=mysqli_query($conn,"SELECT sum(ds13ta)/count(ds13ta) as ds13ta from ds1ta");
$data_ds13ta=mysqli_fetch_array($qry_ds13ta);
$rata_ds13ta=$data_ds13ta[0];
$qry_ds14ta=mysqli_query($conn,"SELECT sum(ds14ta)/count(ds14ta) as ds14ta from ds1ta");
$data_ds14ta=mysqli_fetch_array($qry_ds14ta);
$rata_ds14ta=$data_ds14ta[0];
$qry_ds15ta=mysqli_query($conn,"SELECT sum(ds15ta)/count(ds15ta) as ds15ta from ds1ta");
$data_ds15ta=mysqli_fetch_array($qry_ds15ta);
$rata_ds15ta=$data_ds15ta[0];
$qry_ds16ta=mysqli_query($conn,"SELECT sum(ds16ta)/count(ds16ta) as ds16ta from ds1ta");
$data_ds16ta=mysqli_fetch_array($qry_ds16ta);
$rata_ds16ta=$data_ds16ta[0];

//ds1SE
$qry_ds11se=mysqli_query($conn,"SELECT sum(ds11se)/count(ds11se) as ds11se from ds1se");
$data_ds11se=mysqli_fetch_array($qry_ds11se);
$rata_ds11se=$data_ds11se[0];
$qry_ds12se=mysqli_query($conn,"SELECT sum(ds12se)/count(ds12se) as ds12se from ds1se");
$data_ds12se=mysqli_fetch_array($qry_ds12se);
$rata_ds12se=$data_ds12se[0];
$qry_ds13se=mysqli_query($conn,"SELECT sum(ds13se)/count(ds13se) as ds13se from ds1se");
$data_ds13se=mysqli_fetch_array($qry_ds13se);
$rata_ds13se=$data_ds13se[0];
$qry_ds14se=mysqli_query($conn,"SELECT sum(ds14se)/count(ds14se) as ds14se from ds1se");
$data_ds14se=mysqli_fetch_array($qry_ds14se);
$rata_ds14se=$data_ds14se[0];
$qry_ds15se=mysqli_query($conn,"SELECT sum(ds15se)/count(ds15se) as ds15se from ds1se");
$data_ds15se=mysqli_fetch_array($qry_ds15se);
$rata_ds15se=$data_ds15se[0];
$qry_ds16se=mysqli_query($conn,"SELECT sum(ds16se)/count(ds16se) as ds16se from ds1se");
$data_ds16se=mysqli_fetch_array($qry_ds16se);
$rata_ds16se=$data_ds16se[0];

//ds1RA
$qry_ds11ra=mysqli_query($conn,"SELECT sum(ds11ra)/count(ds11ra) as ds11ra from ds1ra");
$data_ds11ra=mysqli_fetch_array($qry_ds11ra);
$rata_ds11ra=$data_ds11ra[0];
$qry_ds12ra=mysqli_query($conn,"SELECT sum(ds12ra)/count(ds12ra) as ds12ra from ds1ra");
$data_ds12ra=mysqli_fetch_array($qry_ds12ra);
$rata_ds12ra=$data_ds12ra[0];
$qry_ds13ra=mysqli_query($conn,"SELECT sum(ds13ra)/count(ds13ra) as ds13ra from ds1ra");
$data_ds13ra=mysqli_fetch_array($qry_ds13ra);
$rata_ds13ra=$data_ds13ra[0];
$qry_ds14ra=mysqli_query($conn,"SELECT sum(ds14ra)/count(ds14ra) as ds14ra from ds1ra");
$data_ds14ra=mysqli_fetch_array($qry_ds14ra);
$rata_ds14ra=$data_ds14ra[0];
$qry_ds15ra=mysqli_query($conn,"SELECT sum(ds15ra)/count(ds15ra) as ds15ra from ds1ra");
$data_ds15ra=mysqli_fetch_array($qry_ds15ra);
$rata_ds15ra=$data_ds15ra[0];
$qry_ds16ra=mysqli_query($conn,"SELECT sum(ds16ra)/count(ds16ra) as ds16ra from ds1ra");
$data_ds16ra=mysqli_fetch_array($qry_ds16ra);
$rata_ds16ra=$data_ds16ra[0];

//ds1GSM
$qry_ds11gsm=mysqli_query($conn,"SELECT sum(ds11gsm)/count(ds11gsm) as ds11gsm from ds1gsm");
$data_ds11gsm=mysqli_fetch_array($qry_ds11gsm);
$rata_ds11gsm=$data_ds11gsm[0];
$qry_ds12gsm=mysqli_query($conn,"SELECT sum(ds12gsm)/count(ds12gsm) as ds12gsm from ds1gsm");
$data_ds12gsm=mysqli_fetch_array($qry_ds12gsm);
$rata_ds12gsm=$data_ds12gsm[0];
$qry_ds13gsm=mysqli_query($conn,"SELECT sum(ds13gsm)/count(ds13gsm) as ds13gsm from ds1gsm");
$data_ds13gsm=mysqli_fetch_array($qry_ds13gsm);
$rata_ds13gsm=$data_ds13gsm[0];
$qry_ds14gsm=mysqli_query($conn,"SELECT sum(ds14gsm)/count(ds14gsm) as ds14gsm from ds1gsm");
$data_ds14gsm=mysqli_fetch_array($qry_ds14gsm);
$rata_ds14gsm=$data_ds14gsm[0];
$qry_ds15gsm=mysqli_query($conn,"SELECT sum(ds15gsm)/count(ds15gsm) as ds15gsm from ds1gsm");
$data_ds15gsm=mysqli_fetch_array($qry_ds15gsm);
$rata_ds15gsm=$data_ds15gsm[0];
$qry_ds16gsm=mysqli_query($conn,"SELECT sum(ds16gsm)/count(ds16gsm) as ds16gsm from ds1gsm");
$data_ds16gsm=mysqli_fetch_array($qry_ds16gsm);
$rata_ds16gsm=$data_ds16gsm[0];

$rata2_ds11 = number_format(($rata_ds11ac + $rata_ds11psp + $rata_ds11ta + $rata_ds11se +$rata_ds11ra + $rata_ds11gsm)/6,2);
			$rata2_ds12 = number_format(($rata_ds12ac + $rata_ds12psp + $rata_ds12ta + $rata_ds12se +$rata_ds12ra + $rata_ds12gsm)/6,2);
			$rata2_ds13 = number_format(($rata_ds13ac + $rata_ds13psp + $rata_ds13ta + $rata_ds13se +$rata_ds13ra + $rata_ds13gsm)/6,2);
			$rata2_ds14 = number_format(($rata_ds14ac + $rata_ds14psp + $rata_ds14ta + $rata_ds14se +$rata_ds14ra + $rata_ds14gsm)/6,2);
			$rata2_ds15 = number_format(($rata_ds15ac + $rata_ds15psp + $rata_ds15ta + $rata_ds15se +$rata_ds15ra + $rata_ds15gsm)/6,2);
			$rata2_ds16 = number_format(($rata_ds16ac + $rata_ds16psp + $rata_ds16ta + $rata_ds16se +$rata_ds16ra + $rata_ds16gsm)/6,2);
$asis_ds1=number_format(($rata2_ds11+$rata2_ds12+$rata2_ds13+$rata2_ds14+$rata2_ds15+$rata2_ds16)/6,2)
 ?>