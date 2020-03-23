<?php
include 'koneksi.php';
include 'rata_ds1.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Delivery and Support 1</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables DS 1</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Domain DS 1</div>
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
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from ds1ac");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11ac  = $data['ds11ac'];
    $ds12ac  = $data['ds12ac'];
    $ds13ac  = $data['ds13ac'];
    $ds14ac  = $data['ds14ac'];
	$ds15ac  = $data['ds15ac'];
	$ds16ac  = $data['ds16ac'];
	
	echo "<tr><td>$kd_user</td><td>$ds11ac</td><td>$ds12ac</td><td>$ds13ac</td><td>$ds14ac</td><td>$ds15ac</td><td>$ds16ac</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Rata-rata</td>
			  <td><?php 

echo $rata1=number_format($rata_ds11ac,2);
?></td>
              <td><?php 
 

echo $rata2=number_format($rata_ds12ac,2);
?></td>
              <td><?php 
 

echo $rata3=number_format($rata_ds13ac,2);
?></td>
              <td><?php 
 

echo $rata4=number_format($rata_ds14ac,2);
?></td>
              <td><?php 
 

echo $rata5=number_format($rata_ds15ac,2);
?></td>
              <td><?php 
 

echo $rata6=number_format($rata_ds16ac,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_ac=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="psp" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>PSP</strong><span class="panel-subtitle">Police, Standar and Procedure</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds1psp");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11psp  = $data['ds11psp'];
    $ds12psp  = $data['ds12psp'];
    $ds13psp  = $data['ds13psp'];
    $ds14psp  = $data['ds14psp'];
	$ds15psp  = $data['ds15psp'];
	$ds16psp  = $data['ds16psp'];
	
	echo "<tr><td>$kd_user</td><td>$ds11psp</td><td>$ds12psp</td><td>$ds13psp</td><td>$ds14psp</td><td>$ds15psp</td><td>$ds16psp</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody>
		  <tbody><tr class="primary">
              <td>Rata-rata</td>
			  
              <td><?php 


echo $rata1=number_format($rata_ds11psp,2);
?></td>
                <td><?php 

echo $rata2=number_format($rata_ds12psp,2);
?></td>
                <td><?php 


echo $rata3=number_format($rata_ds13psp,2);
?></td>
                <td><?php 

echo $rata4=number_format($rata_ds14psp,2);
?></td>
                <td><?php 
echo $rata5=number_format($rata_ds15psp,2);
?></td>
                <td><?php 

echo $rata6=number_format($rata_ds16psp,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_psp=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody>
          </table>
              </div></div></div>
		  
		  
<div id="ta" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>TA</strong><span class="panel-subtitle">Tools and Automation</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds1ta");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11ta  = $data['ds11ta'];
    $ds12ta  = $data['ds12ta'];
    $ds13ta  = $data['ds13ta'];
    $ds14ta  = $data['ds14ta'];
	$ds15ta  = $data['ds15ta'];
	$ds16ta  = $data['ds16ta'];
	
	echo "<tr><td>$kd_user</td><td>$ds11ta</td><td>$ds12ta</td><td>$ds13ta</td><td>$ds14ta</td><td>$ds15ta</td><td>$ds16ta</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds11ta,2);
?></td>
                <td><?php 

echo $rata2=number_format($rata_ds12ta,2);
?></td>
                <td><?php 

echo $rata3=number_format($rata_ds13ta,2);
?></td>
                <td><?php 

echo $rata4=number_format($rata_ds14ta,2);
?></td>
                <td><?php 

echo $rata5=number_format($rata_ds15ta,2);
?></td>
                <td><?php 

echo $rata6=number_format($rata_ds16ta,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_ta=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody> </table>
		                  </div></div></div>

			  
			  
			  
<div id="se" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>SE</strong><span class="panel-subtitle">Skills and Expertise</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>
            </tr>
			 </thead>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds1se");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11se  = $data['ds11se'];
    $ds12se  = $data['ds12se'];
    $ds13se  = $data['ds13se'];
    $ds14se  = $data['ds14se'];
	$ds15se  = $data['ds15se'];
	$ds16se  = $data['ds16se'];
	
	echo "<tr><td>$kd_user</td><td>$ds11se</td><td>$ds12se</td><td>$ds13se</td><td>$ds14se</td><td>$ds15se</td><td>$ds16se</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds11se,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds12se,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds13se,2);
?></td>
              <td><?php 

echo $rata4=number_format($rata_ds14se,2);
?></td>
              <td><?php 

echo $rata5=number_format($rata_ds15se,2);
?></td>
              <td><?php 

echo $rata6=number_format($rata_ds16se,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_se=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody> 
          </table>
		                  </div></div></div>

		  
		  
<div id="ra" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>RA</strong><span class="panel-subtitle">Responsibility and Accountability</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds1ra");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11ra  = $data['ds11ra'];
    $ds12ra  = $data['ds12ra'];
    $ds13ra  = $data['ds13ra'];
    $ds14ra  = $data['ds14ra'];
	$ds15ra  = $data['ds15ra'];
	$ds16ra  = $data['ds16ra'];
	
	echo "<tr><td>$kd_user</td><td>$ds11ra</td><td>$ds12ra</td><td>$ds13ra</td><td>$ds14ra</td><td>$ds15ra</td><td>$ds16ra</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?></tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds11ra,2);
?></td><td>
<?php 

echo $rata2=number_format($rata_ds12ra,2);
?></td><td>
<?php 

echo $rata3=number_format($rata_ds13ra,2);
?></td><td>
<?php 

echo $rata4=number_format($rata_ds14ra,2);
?></td><td>
<?php 

echo $rata5=number_format($rata_ds15ra,2);
?></td><td>
<?php 

echo $rata6=number_format($rata_ds16ra,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_ra=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody> 
          </table>
		                  </div></div></div>

			
			
<div id="gsm" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>GSM</strong><span class="panel-subtitle">Goal Setting and Easurement</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >DS1.1</th>
              <th >DS1.2</th>
              <th >DS1.3</th>
              <th >DS1.4</th>
              <th >DS1.5</th>
              <th >DS1.6</th><th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds1gsm");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds11gsm  = $data['ds11gsm'];
    $ds12gsm  = $data['ds12gsm'];
    $ds13gsm  = $data['ds13gsm'];
    $ds14gsm  = $data['ds14gsm'];
	$ds15gsm  = $data['ds15gsm'];
	$ds16gsm  = $data['ds16gsm'];
	
	echo "<tr><td>$kd_user</td><td>$ds11gsm</td><td>$ds12gsm</td><td>$ds13gsm</td><td>$ds14gsm</td><td>$ds15gsm</td><td>$ds16gsm</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds1'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 



echo $rata1=number_format($rata_ds11gsm,2);
?></td>
                <td><?php 



echo $rata2=number_format($rata_ds12gsm,2);
?></td>
                <td><?php 



echo $rata3=number_format($rata_ds13gsm,2);
?></td>
                <td><?php 



echo $rata4=number_format($rata_ds14gsm,2);
?></td>
                <td><?php 
 


echo $rata5=number_format($rata_ds15gsm,2);
?></td>
                <td><?php 



echo $rata6=number_format($rata_ds16gsm,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="6"><b><center><?php
echo $rata_gsm=number_format(($rata1+$rata2+$rata3+$rata4+$rata5+$rata6)/6,2);
?>              </center></b></td>
            </tr></tbody> 
          </table>
		                  </div></div></div>

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
			echo "<tr><td>DS 1.1</td><td>".$rata2_ds11."</td><td>".round($rata2_ds11,0)."</td><td>5</td><td>".round(5-$rata2_ds11,0)."</td></tr>";
			echo "<tr><td>DS 1.2</td><td>".$rata2_ds12."</td><td>".round($rata2_ds12,0)."</td><td>5</td><td>".round(5-$rata2_ds12,0)."</td></tr>";
			echo "<tr><td>DS 1.3</td><td>".$rata2_ds13."</td><td>".round($rata2_ds13,0)."</td><td>5</td><td>".round(5-$rata2_ds13,0)."</td></tr>";
			echo "<tr><td>DS 1.4</td><td>".$rata2_ds14."</td><td>".round($rata2_ds14,0)."</td><td>5</td><td>".round(5-$rata2_ds14,0)."</td></tr>";
			echo "<tr><td>DS 1.5</td><td>".$rata2_ds15."</td><td>".round($rata2_ds15,0)."</td><td>5</td><td>".round(5-$rata2_ds15,0)."</td></tr>";
			echo "<tr><td>DS 1.6</td><td>".$rata2_ds16."</td><td>".round($rata2_ds16,0)."</td><td>5</td><td>".round(5-$rata2_ds16,0)."</td></tr>";

			?>
			</tbody>
                  </table>


	    
                </div>

            </div>
</div>            </div>
          </div> 