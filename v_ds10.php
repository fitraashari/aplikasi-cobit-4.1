<?php
include 'koneksi.php';
include 'rata_ds10.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Delivery and Support 10</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Tables DS 10</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Domain DS 10</div>
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
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th><th >Aksi</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds10ac");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101ac  = $data['ds101ac'];
    $ds102ac  = $data['ds102ac'];
    $ds103ac  = $data['ds103ac'];
    $ds104ac  = $data['ds104ac'];
	
	echo "<tr><td>$kd_user</td><td>$ds101ac</td><td>$ds102ac</td><td>$ds103ac</td><td>$ds104ac</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Rata-rata</td>
			  <td><?php 
echo $rata1=number_format($rata_ds101ac,2);
?></td>
              <td><?php 
echo $rata2=number_format($rata_ds102ac,2);
?></td>
              <td><?php 
echo $rata3=number_format($rata_ds103ac,2);
?></td>
              <td><?php 
echo $rata4=number_format($rata_ds104ac,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_ac=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
?>              </center></b></td></tr></tbody></table></div></div></div>
		  
		  
		  <div id="psp" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>PSP</strong><span class="panel-subtitle">Police, Standar and Procedure</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th>
              <th >Aksi</th>
            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds10psp");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101psp  = $data['ds101psp'];
    $ds102psp  = $data['ds102psp'];
    $ds103psp  = $data['ds103psp'];
    $ds104psp  = $data['ds104psp'];
	
	echo "<tr><td>$kd_user</td><td>$ds101psp</td><td>$ds102psp</td><td>$ds103psp</td><td>$ds104psp</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody>
		  <tbody><tr class="primary">
              <td>Rata-rata</td>
			  
              <td><?php 
echo $rata1=number_format($rata_ds101psp,2);
?></td>
                <td><?php 
echo $rata2=number_format($rata_ds102psp,2);
?></td>
                <td><?php 
echo $rata3=number_format($rata_ds103psp,2);
?></td>
                <td><?php 
echo $rata4=number_format($rata_ds104psp,2);
?></td>
</tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_psp=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
?>              </center></b></td>
            </tr></tbody>
          </table>
              </div></div></div>
		  
		  
<div id="ta" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>TA</strong><span class="panel-subtitle">Tools and Automation</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget">
 <thead>
            <tr >
              <th >Responden</th>
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th>
              <th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds10ta");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101ta  = $data['ds101ta'];
    $ds102ta  = $data['ds102ta'];
    $ds103ta  = $data['ds103ta'];
    $ds104ta  = $data['ds104ta'];
	
	echo "<tr><td>$kd_user</td><td>$ds101ta</td><td>$ds102ta</td><td>$ds103ta</td><td>$ds104ta</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 
echo $rata1=number_format($rata_ds101ta,2);
?></td>
                <td><?php 
echo $rata2=number_format($rata_ds102ta,2);
?></td>
                <td><?php 
echo $rata3=number_format($rata_ds103ta,2);
?></td>
                <td><?php 
echo $rata4=number_format($rata_ds104ta,2);
?></td></tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_ta=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
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
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th>
              <th >Aksi</th>
            </tr>
			 </thead>
            <?php
$tampil=mysqli_query($conn,"SELECT * from ds10se");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101se  = $data['ds101se'];
    $ds102se  = $data['ds102se'];
    $ds103se  = $data['ds103se'];
    $ds104se  = $data['ds104se'];	
	echo "<tr><td>$kd_user</td><td>$ds101se</td><td>$ds102se</td><td>$ds103se</td><td>$ds104se</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
              </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds101se,2);
?></td>
              <td><?php 

echo $rata2=number_format($rata_ds102se,2);
?></td>
              <td><?php 

echo $rata3=number_format($rata_ds103se,2);
?></td>
              <td><?php 

echo $rata4=number_format($rata_ds104se,2);
?></td>
</tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_se=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
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
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th>
              <th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds10ra");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101ra  = $data['ds101ra'];
    $ds102ra  = $data['ds102ra'];
    $ds103ra  = $data['ds103ra'];
    $ds104ra  = $data['ds104ra'];
	
	echo "<tr><td>$kd_user</td><td>$ds101ra</td><td>$ds102ra</td><td>$ds103ra</td><td>$ds104ra</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds101ra,2);
?></td>
                <td><?php 

echo $rata2=number_format($rata_ds102ra,2);
?></td>
                <td><?php 

echo $rata3=number_format($rata_ds103ra,2);
?></td>
                <td><?php 

echo $rata4=number_format($rata_ds104ra,2);
?></td>
</tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_ra=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
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
              <th >ds10.1</th>
              <th >ds10.2</th>
              <th >ds10.3</th>
              <th >ds10.4</th>
              <th >Aksi</th>
            </tr>
			 </thead>
                <?php
$tampil=mysqli_query($conn,"SELECT * from ds10gsm");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $ds101gsm  = $data['ds101gsm'];
    $ds102gsm  = $data['ds102gsm'];
    $ds103gsm  = $data['ds103gsm'];
    $ds104gsm  = $data['ds104gsm'];
	
	echo "<tr><td>$kd_user</td><td>$ds101gsm</td><td>$ds102gsm</td><td>$ds103gsm</td><td>$ds104gsm</td><td>
	                    <div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                        <li><a href='delete.php?kd=$kd_user&tabel=ds10'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
                </tbody><tbody><tr class="primary"><td>Rata-rata</td><td><?php 

echo $rata1=number_format($rata_ds101gsm,2);
?></td>
                <td><?php 

echo $rata2=number_format($rata_ds102gsm,2);
?></td>
                <td><?php 

echo $rata3=number_format($rata_ds103gsm,2);
?></td>
                <td><?php 

echo $rata4=number_format($rata_ds104gsm,2);
?></td>
</tr><tr class="success"><td><b>Total Rata-rata</b></td>
              <td colspan="4"><b><center><?php
echo $rata_gsm=number_format(($rata1+$rata2+$rata3+$rata4)/4,2);
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
		
			echo "<tr><td>DS 10.1</td><td>".$rata2_ds101."</td><td>".round($rata2_ds101,0)."</td><td>5</td><td>".round(5-$rata2_ds101,0)."</td></tr>";
			echo "<tr><td>DS 10.2</td><td>".$rata2_ds102."</td><td>".round($rata2_ds102,0)."</td><td>5</td><td>".round(5-$rata2_ds102,0)."</td></tr>";
			echo "<tr><td>DS 10.3</td><td>".$rata2_ds103."</td><td>".round($rata2_ds103,0)."</td><td>5</td><td>".round(5-$rata2_ds103,0)."</td></tr>";
			echo "<tr><td>DS 10.4</td><td>".$rata2_ds104."</td><td>".round($rata2_ds104,0)."</td><td>5</td><td>".round(5-$rata2_ds104,0)."</td></tr>";

			?>
			</tbody>
                  </table>

                </div>
              </div>
            </div>
</div>            </div>
          </div> 

          
              