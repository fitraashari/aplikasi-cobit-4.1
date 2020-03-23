<?php
include 'koneksi.php';
include 'rata_ds5.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Delivery and Support 5</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables DS 5</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Domain DS 5</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#ac" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>Atribut AC</a></li>
                    <li><a href="#psp" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>Atribut PSP</a></li>
                    <li><a href="#ta" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>Atribut TA</a></li>
					 <li><a href="#se" data-toggle="tab"><span class="icon mdi mdi-collection-item-4"></span>Atribut SE</a></li>
					 <li><a href="#ra" data-toggle="tab"><span class="icon mdi mdi-collection-item-5"></span>Atribut RA</a></li>
					 <li><a href="#gsm" data-toggle="tab"><span class="icon mdi mdi-collection-item-6"></span>Atribut GSM</a></li>
					 <li><a href="#hasil" data-toggle="tab"><span class="icon mdi mdi-collection-bookmark"></span>Hasil Perhitungan</a></li>
                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="ac" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>AC</strong><span class="panel-subtitle">Awarness and Communication</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
			  <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5ac");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51ac  = $data['ds51ac'];
    $ds52ac  = $data['ds52ac'];
    $ds53ac  = $data['ds53ac'];
    $ds54ac  = $data['ds54ac'];
	$ds55ac  = $data['ds55ac'];
	$ds56ac  = $data['ds56ac'];
	$ds57ac  = $data['ds57ac'];
	$ds58ac  = $data['ds58ac'];
	$ds59ac  = $data['ds59ac'];
	$ds510ac  = $data['ds510ac'];
	$ds511ac  = $data['ds511ac'];
	echo "<tr>
	<td>$kd_user</td>
	<td>$ds51ac</td>
	<td>$ds52ac</td>
	<td>$ds53ac</td>
	<td>$ds54ac</td>
	<td>$ds55ac</td>
	<td>$ds56ac</td>
	<td>$ds57ac</td>
	<td>$ds58ac</td>
	<td>$ds59ac</td>
	<td>$ds510ac</td>
	<td>$ds511ac</td>
	<td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action<span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
	</tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 
echo $rata1=number_format($rata_ds51ac,2);
?></td>
              <td><?php 
echo $rata2=number_format($rata_ds52ac,2);
?></td>
              <td><?php 
echo $rata3=number_format($rata_ds53ac,2);
?></td>
              <td><?php 
echo $rata4=number_format($rata_ds54ac,2);
?></td>
              <td><?php 
echo $rata5=number_format($rata_ds55ac,2);
?></td>
              <td><?php 
echo $rata6=number_format($rata_ds56ac,2);
?></td>
              <td><?php 
echo $rata7=number_format($rata_ds57ac,2);
?></td>
              <td><?php 
echo $rata8=number_format($rata_ds58ac,2);
?></td>
              <td><?php 
echo $rata9=number_format($rata_ds59ac,2);
?></td>
              <td><?php 
echo $rata10=number_format($rata_ds510ac,2);
?></td>
              <td><?php 
echo $rata11=number_format($rata_ds511ac,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="11"><b><center><?php
echo $rata_ac=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		  
		  
		 <div id="psp" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>PSP</strong><span class="panel-subtitle">Police, Standar and Procedure</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
			  <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5psp");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51psp  = $data['ds51psp'];
    $ds52psp  = $data['ds52psp'];
    $ds53psp  = $data['ds53psp'];
    $ds54psp  = $data['ds54psp'];
	$ds55psp  = $data['ds55psp'];
	$ds56psp  = $data['ds56psp'];
	$ds57psp  = $data['ds57psp'];
	$ds58psp  = $data['ds58psp'];
	$ds59psp  = $data['ds59psp'];
	$ds510psp  = $data['ds510psp'];
	$ds511psp  = $data['ds511psp'];
	echo "<tr>
	<td>$kd_user</td>
	<td>$ds51psp</td>
	<td>$ds52psp</td>
	<td>$ds53psp</td>
	<td>$ds54psp</td>
	<td>$ds55psp</td>
	<td>$ds56psp</td>
	<td>$ds57psp</td>
	<td>$ds58psp</td>
	<td>$ds59psp</td>
	<td>$ds510psp</td>
	<td>$ds511psp</td>	<td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
	</tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds51psp,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds52psp,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds53psp,2);
?></td>
              <td><?php 

echo $rata4=number_format($rata_ds54psp,2);
?></td>
              <td><?php 

echo $rata5=number_format($rata_ds55psp,2);
?></td>
              <td><?php 

echo $rata6=number_format($rata_ds56psp,2);
?></td>
              <td><?php 

echo $rata7=number_format($rata_ds57psp,2);
?></td>
              <td><?php 

echo $rata8=number_format($rata_ds58psp,2);
?></td>
              <td><?php 

echo $rata9=number_format($rata_ds59psp,2);
?></td>
              <td><?php 

echo $rata10=number_format($rata_ds510psp,2);
?></td>
              <td><?php 

echo $rata11=number_format($rata_ds511psp,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="11"><b><center><?php
echo $rata_psp=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>




		  
		  <div id="ta" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>TA</strong><span class="panel-subtitle">Tools and Automation</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
			  <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5ta");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51ta  = $data['ds51ta'];
    $ds52ta  = $data['ds52ta'];
    $ds53ta  = $data['ds53ta'];
    $ds54ta  = $data['ds54ta'];
	$ds55ta  = $data['ds55ta'];
	$ds56ta  = $data['ds56ta'];
	$ds57ta  = $data['ds57ta'];
	$ds58ta  = $data['ds58ta'];
	$ds59ta  = $data['ds59ta'];
	$ds510ta  = $data['ds510ta'];
	$ds511ta  = $data['ds511ta'];
	echo "<tr>
	<td>$kd_user</td>
	<td>$ds51ta</td>
	<td>$ds52ta</td>
	<td>$ds53ta</td>
	<td>$ds54ta</td>
	<td>$ds55ta</td>
	<td>$ds56ta</td>
	<td>$ds57ta</td>
	<td>$ds58ta</td>
	<td>$ds59ta</td>
	<td>$ds510ta</td>
	<td>$ds511ta</td>	<td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
	</tr>";
}
?></tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 
echo $rata1=number_format($rata_ds51ta,2);
?></td><td><?php 
echo $rata2=number_format($rata_ds52ta,2);
?></td><td><?php 
echo $rata3=number_format($rata_ds53ta,2);
?></td><td><?php 
echo $rata4=number_format($rata_ds54ta,2);
?></td><td><?php 
echo $rata5=number_format($rata_ds55ta,2);
?></td><td><?php 
echo $rata6=number_format($rata_ds56ta,2);
?></td><td><?php 
echo $rata7=number_format($rata_ds57ta,2);
?></td><td><?php 
echo $rata8=number_format($rata_ds58ta,2);
?></td><td><?php 
echo $rata9=number_format($rata_ds59ta,2);
?></td><td><?php 
echo $rata10=number_format($rata_ds510ta,2);
?></td><td><?php 
echo $rata11=number_format($rata_ds511ta,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td><td colspan="11"><b><center><?php echo $rata_ta=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		  
		  <div id="se" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>SE</strong><span class="panel-subtitle">Skills and Expertise</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
			  <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5se");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51se  = $data['ds51se'];
    $ds52se  = $data['ds52se'];
    $ds53se  = $data['ds53se'];
    $ds54se  = $data['ds54se'];
	$ds55se  = $data['ds55se'];
	$ds56se  = $data['ds56se'];
	$ds57se  = $data['ds57se'];
	$ds58se  = $data['ds58se'];
	$ds59se  = $data['ds59se'];
	$ds510se  = $data['ds510se'];
	$ds511se  = $data['ds511se'];
	echo "<tr>
	<td>$kd_user</td>
	<td>$ds51se</td>
	<td>$ds52se</td>
	<td>$ds53se</td>
	<td>$ds54se</td>
	<td>$ds55se</td>
	<td>$ds56se</td>
	<td>$ds57se</td>
	<td>$ds58se</td>
	<td>$ds59se</td>
	<td>$ds510se</td>
	<td>$ds511se</td>	<td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
	</tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds51se,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds52se,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds53se,2);
?></td><td><?php 
echo $rata4=number_format($rata_ds54se,2);
?></td>
              <td><?php 

echo $rata5=number_format($rata_ds55se,2);
?></td>
              <td><?php 

echo $rata6=number_format($rata_ds56se,2);
?></td>
              <td><?php 

echo $rata7=number_format($rata_ds57se,2);
?></td>
              <td><?php 

echo $rata8=number_format($rata_ds58se,2);
?></td>
              <td><?php 

echo $rata9=number_format($rata_ds59se,2);
?></td>
              <td><?php 

echo $rata10=number_format($rata_ds510se,2);
?></td>
              <td><?php 

echo $rata11=number_format($rata_ds511se,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td><td colspan="11"><b><center><?php echo $rata_se=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		  
<div id="ra" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>RA</strong><span class="panel-subtitle">Responsibility and Accountability</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
			  <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5ra");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51ra  = $data['ds51ra'];
    $ds52ra  = $data['ds52ra'];
    $ds53ra  = $data['ds53ra'];
    $ds54ra  = $data['ds54ra'];
	$ds55ra  = $data['ds55ra'];
	$ds56ra  = $data['ds56ra'];
	$ds57ra  = $data['ds57ra'];
	$ds58ra  = $data['ds58ra'];
	$ds59ra  = $data['ds59ra'];
	$ds510ra  = $data['ds510ra'];
	$ds511ra  = $data['ds511ra'];
	echo "<tr>
	<td>$kd_user</td>
	<td>$ds51ra</td>
	<td>$ds52ra</td>
	<td>$ds53ra</td>
	<td>$ds54ra</td>
	<td>$ds55ra</td>
	<td>$ds56ra</td>
	<td>$ds57ra</td>
	<td>$ds58ra</td>
	<td>$ds59ra</td>
	<td>$ds510ra</td>
	<td>$ds511ra</td>	<td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
	</tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds51ra,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds52ra,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds53ra,2);
?></td>
              <td><?php 

echo $rata4=number_format($rata_ds54ra,2);
?></td>
              <td><?php 

echo $rata5=number_format($rata_ds55ra,2);
?></td>
              <td><?php 

echo $rata6=number_format($rata_ds56ra,2);
?></td>
              <td><?php 

echo $rata7=number_format($rata_ds57ra,2);
?></td>
              <td><?php 

echo $rata8=number_format($rata_ds58ra,2);
?></td>
              <td><?php 

echo $rata9=number_format($rata_ds59ra,2);
?></td>
              <td><?php 

echo $rata10=number_format($rata_ds510ra,2);
?></td>
              <td><?php 

echo $rata11=number_format($rata_ds511ra,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td><td colspan="11"><b><center><?php echo $rata_ra=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		  
		  
		 <div id="gsm" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>GSM</strong><span class="panel-subtitle">Goal Setting and Easurement</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS5.1</th>
              <th >DS5.2</th>
              <th >DS5.3</th>
              <th >DS5.4</th>
              <th >DS5.5</th>
              <th >DS5.6</th>
        <th >DS5.7</th>
              <th >DS5.8</th>
              <th >DS5.9</th>
              <th >DS5.10</th>
              <th >DS5.11</th><th >Aksi</th>
            </tr>
       </thead>
       <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds5gsm");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds51gsm  = $data['ds51gsm'];
    $ds52gsm  = $data['ds52gsm'];
    $ds53gsm  = $data['ds53gsm'];
    $ds54gsm  = $data['ds54gsm'];
  $ds55gsm  = $data['ds55gsm'];
  $ds56gsm  = $data['ds56gsm'];
  $ds57gsm  = $data['ds57gsm'];
  $ds58gsm  = $data['ds58gsm'];
  $ds59gsm  = $data['ds59gsm'];
  $ds510gsm  = $data['ds510gsm'];
  $ds511gsm  = $data['ds511gsm'];
  echo "<tr>
  <td>$kd_user</td>
  <td>$ds51gsm</td>
  <td>$ds52gsm</td>
  <td>$ds53gsm</td>
  <td>$ds54gsm</td>
  <td>$ds55gsm</td>
  <td>$ds56gsm</td>
  <td>$ds57gsm</td>
  <td>$ds58gsm</td>
  <td>$ds59gsm</td>
  <td>$ds510gsm</td>
  <td>$ds511gsm</td>  <td>
                      <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds5'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td>
  </tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds51gsm,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds52gsm,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds53gsm,2);
?></td>
              <td><?php 

echo $rata4=number_format($rata_ds54gsm,2);
?></td>
              <td><?php 

echo $rata5=number_format($rata_ds55gsm,2);
?></td>
              <td><?php 

echo $rata6=number_format($rata_ds56gsm,2);
?></td>
              <td><?php 

echo $rata7=number_format($rata_ds57gsm,2);
?></td>
              <td><?php 

echo $rata8=number_format($rata_ds58gsm,2);
?></td>
              <td><?php 

echo $rata9=number_format($rata_ds59gsm,2);
?></td>
              <td><?php 

echo $rata10=number_format($rata_ds510gsm,2);
?></td>
              <td><?php 

echo $rata11=number_format($rata_ds511gsm,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td><td colspan="11"><b><center><?php echo $rata_gsm=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6+$rata7+$rata8+$rata9+$rata10+$rata11)/11,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		 <div id="hasil" class="tab-pane">
<div class="panel-heading text-primary">Maturity Level
                  
                </div>
				
                  <table class="table table-condensed table-striped">
                    <thead>
		  <tr >
		  <th >
		  Domain
		  </th>
		  <th>
		  Rata Rata
		  </th>
      <th>
		  As-Is
		  </th>
      <th>
		  To-Be
		  </th>
      <th>
		  Gap
		  </th>
		  </tr>
		  </thead>
		  <tbody>
		  
		   <?php

			
			
			echo "<tr><td>DS 5.1</td><td>".$rata2_ds51."</td><td>".round($rata2_ds51,0)."</td><td>5</td><td>".round(5-$rata2_ds51,0)."</td></tr>";
			echo "<tr><td>DS 5.2</td><td>".$rata2_ds52."</td><td>".round($rata2_ds52,0)."</td><td>5</td><td>".round(5-$rata2_ds52,0)."</td></tr>";
			echo "<tr><td>DS 5.3</td><td>".$rata2_ds53."</td><td>".round($rata2_ds53,0)."</td><td>5</td><td>".round(5-$rata2_ds53,0)."</td></tr>";
			echo "<tr><td>DS 5.4</td><td>".$rata2_ds54."</td><td>".round($rata2_ds54,0)."</td><td>5</td><td>".round(5-$rata2_ds54,0)."</td></tr>";
			echo "<tr><td>DS 5.5</td><td>".$rata2_ds55."</td><td>".round($rata2_ds55,0)."</td><td>5</td><td>".round(5-$rata2_ds55,0)."</td></tr>";
			echo "<tr><td>DS 5.6</td><td>".$rata2_ds56."</td><td>".round($rata2_ds56,0)."</td><td>5</td><td>".round(5-$rata2_ds56,0)."</td></tr>";
			echo "<tr><td>DS 5.7</td><td>".$rata2_ds57."</td><td>".round($rata2_ds57,0)."</td><td>5</td><td>".round(5-$rata2_ds57,0)."</td></tr>";
			echo "<tr><td>DS 5.8</td><td>".$rata2_ds58."</td><td>".round($rata2_ds58,0)."</td><td>5</td><td>".round(5-$rata2_ds58,0)."</td></tr>";
			echo "<tr><td>DS 5.9</td><td>".$rata2_ds59."</td><td>".round($rata2_ds59,0)."</td><td>5</td><td>".round(5-$rata2_ds59,0)."</td></tr>";
			echo "<tr><td>DS 5.10</td><td>".$rata2_ds510."</td><td>".round($rata2_ds510,0)."</td><td>5</td><td>".round(5-$rata2_ds510,0)."</td></tr>";
			echo "<tr><td>DS 5.11</td><td>".$rata2_ds511."</td><td>".round($rata2_ds511,0)."</td><td>5</td><td>".round(5-$rata2_ds511,0)."</td></tr>";
			
			
			?>
			
			</tbody>
                  </table>
                </div>
              </div>
            </div>
</div>            </div>
          </div> 

