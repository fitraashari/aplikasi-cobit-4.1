<?php 
include "koneksi.php";
include "cek.php";		
	//echo $ACds11;
session_start();
if ($_SESSION['lvl'] == 'pegawai' or $_SESSION['lvl'] == 'admin'){
    $pACds11 = "Sejauh mana tingkat kepedulian staff IT dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI ?"; 
    $pACds12 = "Sejauh mana tingkat kepedulian staff IT memenuhi kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pACds13 = "Sejauh mana tingkat kepedulian staff IT memberikan jaminan pelayanan SIAKAD kepada pengguna ?"; 
    $pACds14 = "Sejauh mana tingkat kepedulian staff IT terhadap SIAKAD agar tingkat layananya berjalan optimal ?"; 
    $pACds15 = "Sejauh mana tingkat kepedulian staff IT dalam melakukan pengawasan dan pelaporan pencapaian tingkat layanan SIAKAD secara berkala ?"; 
    $pACds16 = "Sejauh mana tingkat kepedulian staff IT melakukan review ulang terhadap jaminan layanan SIAKAD yang telah diterapkan ?";

    $pPSPds11 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI?"; 
    $pPSPds12 = "Apakah staff IT menerapkan Standar Operasional Prosedur (SOP) dalam memenuhi kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pPSPds13 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam memberikan jaminan pelayanan SIAKAD ?"; 
    $pPSPds14 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menjaga kinerja layanan SIAKAD ?"; 
    $pPSPds15 = "Apakah staff IT telah menetapkan Standar Operasional Prosedur (SOP) dalam melakukan pemantauan dan pelaporan terhadap layanan SIAKAD ?"; 
    $pPSPds16 = "Apakah staff IT telah menetapkan Standar Operasional Prosedur (SOP) dalam melakukan peninjauan ulang terhadap jaminan pelayanan SIAKAD ?";
    
    $pTAds11 = "Apakah staff IT menggunakan perangkat (tools) dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI ?"; 
    $pTAds12 = "Apakah staff IT telah menggunakan perangkat (tools) dalam memenuhi kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pTAds13 = "Apakah pihak staff IT sudah menggunakan perangkat (tools) yang dapat berjalan secara otomatis dalam menjamin pelayanan SIAKAD ?"; 
    $pTAds14 = "Apakah pihak staff IT menggunakan perangkat (tools) yang berjalan otomatis untuk menjaga tingkat layanan tetap berjalan optimal ?"; 
    $pTAds15 = "Apakah pihak staff IT telah menerapkan perangkat (tools) yang dapat berjalan otomatis melakukan pemantauan dan pelaporan secara berkala ?"; 
    $pTAds16 = "Apakah pihak staff IT menerapkan perangkat (tools) yang dapat berjalan otomatis untuk melakukan peninjauan kinerja pelayanan SIAKAD ?";

    $pSEds11 = "Sejauh mana tingkat keterampilan staff IT dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI ?"; 
    $pSEds12 = "Sejauh mana tingkat keterampilan staff IT dalam memenuhi kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pSEds13 = "Sejauh mana tingkat ketrampilan staff IT dalam memberikan jaminan tingkat pelayanan SIAKAD yang diharapkan ?"; 
    $pSEds14 = "Sejauh mana tingkat ketrampilan staff IT dalam menjaga kinerja layanan SIAKAD tetap optimal ?"; 
    $pSEds15 = "Sejauh mana tingkat ketrampilan staff IT melakukan pemantauan dan pelaporan pencapaian tingkat layanan SIAKAD secara berkala ?"; 
    $pSEds16 = "Sejauh mana tingkat ketrampilan staff IT melakukan peninjauan kembali terhadap jaminan layanan SIAKAD yang  dijanjikan ?";
    
    $pRAds11 = "Sejauh mana staff IT bertanggung jawab dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI ?"; 
    $pRAds12 = "Sejauh mana staff IT bertanggung jawab dalam memenuhi kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pRAds13 = "Sejauh mana staff IT bertanggung jawab terhadap jaminan tingkat pelayanan SIAKAD ?"; 
    $pRAds14 = "Sejauh mana staff IT bertanggung jawab dalam menjaga tingkat layanan SIAKAD agar berjalan optimal ?"; 
    $pRAds15 = "Sejauh mana staff IT bertanggung jawab dalam melakukan pemantuan dan pelaporan pencapaian layanan SIAKAD secara berkala ?"; 
    $pRAds16 = "Sejauh mana staff IT bertanggung jawab dalam melakukan peninjauan ulang tingkat layanan SIAKAD yang dijanjikan ?";
    
    $pGSMds11 = "Apakah staff staff IT telah menetapkan tujuan dalam menyusun Kerangka Kerja Manajemen Tingkat Layanan TI ?"; 
    $pGSMds12 = "Apakah staff IT telah menetapkan dan mengukur kebutuhan civitas akademika terkait layanan SIAKAD ?"; 
    $pGSMds13 = "Apakah staff IT telah menetapkan dan mengukur pencapaian layanan SIAKAD ?"; 
    $pGSMds14 = "Apakah staff IT telah menetapkan dan mengukur kinerja layanan SIAKAD ?"; 
    $pGSMds15 = "Apakah staff IT telah menetapkan tujuan dari kegiatan pemantauan dan pelaporan pencapaian tingkat layanan SIAKAD ?"; 
    $pGSMds16 = "Apakah staff IT telah menetapkan dan mengukur pencapaian peninjauan ulang terhadap kinerja layanan SIAKAD yang diharapkan ?";
}
if ($_SESSION['lvl'] == 'mahasiswa'){
    $pACds11 = "Bagaimana kepedulian staff IT dalam menjaga dan meningkatkan kualitas layanan SIAKAD bagi mahasiswa?"; 
    $pACds12 = "Sejauh mana tingkat kepedulian staff IT dalam menyediakan layanan SIAKAD bagi mahasiswa?"; 
    $pACds13 = "Sejauh mana tingkat kepedulian staff IT dalam menjamin pelayanan SIAKAD bagi mahasiswa?"; 
    $pACds14 = "Bagaimana kepedulian staff IT terhadap tingkat kinerja layanan SIAKAD ?"; 
    $pACds15 = "Sejauh mana tingkat kepedulian Staff IT dalam melakukan pengawasan dan pelaporan kinerja layanan SIAKAD ?"; 
    $pACds16 = "Bagaimana kepedulian staff IT dalam meninjau kinerja layanan SIAKAD apakah sudah sesuai dengan yang dijanjikan ?";

    $pPSPds11 = "Apakah staff IT dalam menjaga dan meningkatkan kualitas layanan SIAKAD bagi mahasiswa sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada ?"; 
    $pPSPds12 = "Apakah pihak staff IT dalam menyediakan layanan SIAKAD bagi mahasiswa sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada?"; 
    $pPSPds13 = "Apakah pihak staff IT dalam menjamin pelayanan SIAKAD bagi mahasiswa sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada ?"; 
    $pPSPds14 = "Apakah pihak staff IT dalam mengoperasikan layanan SIAKAD sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada ?"; 
    $pPSPds15 = "Apakah pihak staff IT dalam melakukan pengawasan dan pelaporan kinerja layanan SIAKAD sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada ?"; 
    $pPSPds16 = "Apakah pihak staff IT dalam meninjau kinerja layanan SIAKAD sudah sesuai dengan Standar Operasional Prosedur (SOP) yang ada ?";
    
    $pTAds11 = "Apakah staff IT menggunakan perangkat (tools) dalam menjaga dan meningkatkan kualitas layanan SIAKAD bagi mahasiswa?"; 
    $pTAds12 = "Apakah staff IT menggunakan perangkat (tools) dalam menyediakan layanan SIAKAD bagi mahasiswa?"; 
    $pTAds13 = "Apakah staff IT menggunakan perangkat (tools) dalam hal menjamin pelayanan SIAKAD bagi mahasiswa?"; 
    $pTAds14 = "Apakah staff IT menggunakan perangkat (tools) dalam mengoperasikan layanan SIAKAD ?"; 
    $pTAds15 = "Apakah staff IT menggunakan perangkat (tools) dalam melakukan pengawasan dan pelaporan kinerja layanan SIAKAD ?"; 
    $pTAds16 = "Apakah staff IT menggunakan perangkat (tools) dalam meninjau ulang kinerja layanan SIAKAD ?";

    $pSEds11 = "Sejauh mana tingkat keterampilan staff IT dalam menjaga dan meningkatkan kualitas layanan SIAKAD bagi mahasiswa?"; 
    $pSEds12 = "Sejauh mana tingkat keterampilan staff IT menyediakan layanan SIAKAD bagi mahasiswa?"; 
    $pSEds13 = "Sejauh mana tingkat keterampilan staff IT dalam menjamin pelayanan SIAKAD bagi mahasiswa?"; 
    $pSEds14 = "Sejauh mana tingkat keterampilan staff IT dalam mengoperasikan layanan SIAKAD ?"; 
    $pSEds15 = "Sejauh mana tingkat keterampilan staff IT dalam melakukan pengawasan dan pelaporan kinerja layanan SIAKAD ?"; 
    $pSEds16 = "Sejauh mana tingkat keterampilan staff IT dalam meninjau ulang kinerja layanan SIAKAD ?";
    
    $pRAds11 = "Sejauh mana staff IT bertanggung jawab dalam  meningkatkan tingkat layanan SIAKAD bagi mahasiswa?"; 
    $pRAds12 = "Sejauh mana staff IT bertanggung jawab dalam menyediakan layanan SIAKAD bagi mahasiswa?"; 
    $pRAds13 = "Sejauh mana staff IT bertanggung jawab dalam menjamin pelayanan SIAKAD bagi mahasiswa?"; 
    $pRAds14 = "Sejauh mana staff IT bertanggung jawab terhadap pengoperasian layanan SIAKAD ?"; 
    $pRAds15 = "Sejauh mana staff IT bertanggung jawab terhadap pengawasan dan pelaporan kinerja layanan SIAKAD ?"; 
    $pRAds16 = "Sejauh mana staff IT bertanggung jawab dalam meninjau ulang kinerja layanan SIAKAD ?";
    
    $pGSMds11 = "Apakah staff IT telah mengukur kualitas layanan SIAKAD bagi mahasiswa?"; 
    $pGSMds12 = "Apakah staff IT telah menetapkan dan mengukur tujuan dari layanan SIAKAD bagi mahasiswa?"; 
    $pGSMds13 = "Apakah staff IT telah menetapkan dan mengukur jaminan pelayanan SIAKAD bagi mahasiswa?"; 
    $pGSMds14 = "Apakah staff IT telah menetapkan dan mengukur pencapaian dari penerapan layanan SIAKAD ?"; 
    $pGSMds15 = "Apakah staff IT telah menetapkan dan mengukur tujuan dalam hal pengawasan dan pelaporan kinerja layanan SIAKAD ?"; 
    $pGSMds16 = "Apakah staff IT telah menetapkan dan mengukur pencapaian dalam melakukan peninjauan ulang kinerja layanan SIAKAD ?";
}


$kd_user = $_SESSION['kd_user'];
 $tampilac=mysqli_query($conn,"SELECT * from ds1ac where kd_user='$kd_user'");
$dataac=mysqli_fetch_assoc($tampilac);

$tampilpsp=mysqli_query($conn,"SELECT * from ds1psp where kd_user='$kd_user'");
$datapsp=mysqli_fetch_assoc($tampilpsp);

$tampilta=mysqli_query($conn,"SELECT * from ds1ta where kd_user='$kd_user'");
$datata=mysqli_fetch_assoc($tampilta);

$tampilse=mysqli_query($conn,"SELECT * from ds1se where kd_user='$kd_user'");
$datase=mysqli_fetch_assoc($tampilse);

$tampilra=mysqli_query($conn,"SELECT * from ds1ra where kd_user='$kd_user'");
$datara=mysqli_fetch_assoc($tampilra);

$tampilgsm=mysqli_query($conn,"SELECT * from ds1gsm where kd_user='$kd_user'");
$datagsm=mysqli_fetch_assoc($tampilgsm);


if($dataac){
  $dis = "disabled";
}else{
  $dis = "";
}
?>


	   <div class="page-head">
          <h2 class="page-head-title">Kuesioner Delivery and Support 1 
		  	<?php if($_GET['status'] == "success"):?>
  <button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
<?php endif;?>
		  </h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">DS 1</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <div class="row wizard-row">
            <div class="col-md-12 fuelux">
              <div class="block-wizard panel panel-default">
                <div id="wizard1" class="wizard wizard-ux">
                  <ul class="steps">
                    <li data-step="1" class="active">AC<span class="chevron"></span></li>
                    <li data-step="2">PSP<span class="chevron"></span></li>
                    <li data-step="3">TA<span class="chevron"></span></li>
					          <li data-step="4">SE<span class="chevron"></span></li>
					          <li data-step="5">RA<span class="chevron"></span></li>
					          <li data-step="6">GSM<span class="chevron"></span></li>
                  </ul>
                  <div class="actions">
                    <button type="button" class="btn btn-xs btn-prev btn-default"><i class="icon mdi mdi-chevron-left"></i>Prev</button>
                    <button type="button" data-last="Finish" class="btn btn-xs btn-next btn-default">Next<i class="icon mdi mdi-chevron-right"></i></button>
                  </div>
				  <form action="sv_ds1.php" method="POST" data-parsley-namespace="data-parsley-" data-parsley-validate="" novalidate="" class="form-horizontal group-border-dashed">
          
                  <div class="step-content">
				  
                    <div data-step="1" class="step-pane active">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Awarness and Communication</h3>
                          </div>
						   
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pACds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds11">
						<option  
                          <?php if($dataac['ds11ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pACds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="ACds12">
            <option  
                          <?php if($dataac['ds12ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pACds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="ACds13">
            <option  
                          <?php if($dataac['ds13ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pACds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds14">
<option  
                          <?php if($dataac['ds14ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pACds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds15">
<option  
                          <?php if($dataac['ds15ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pACds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds16">
<option  
                          <?php if($dataac['ds16ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <?php //<button class="btn btn-default btn-space">Cancel</button>
                            ?>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
					</div>
                    <div data-step="2" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Police, Standar and Procedure</h3>
                          </div>
                        </div>
        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pPSPds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds11">
            <option   
                          <?php if($datapsp['ds11psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pPSPds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="PSPds12">
            
            <option   
                          <?php if($datapsp['ds12psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pPSPds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="PSPds13">
            
            <option   
                          <?php if($datapsp['ds13psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pPSPds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds14">
            
            <option   
                          <?php if($datapsp['ds14psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pPSPds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds15">
            
            <option   
                          <?php if($datapsp['ds15psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pPSPds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds16">
            
            <option   
                          <?php if($datapsp['ds16psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum  disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                           <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
                    <div data-step="3" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Tools and Automation</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pTAds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds11">
            <option    
                          <?php if($datata['ds11ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds11ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds11ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds11ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds11ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds11ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pTAds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="TAds12">
            <option    
                          <?php if($datata['ds12ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds12ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds12ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds12ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds12ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds12ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pTAds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="TAds13">
                        <option    
                          <?php if($datata['ds13ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds13ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds13ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds13ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds13ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds13ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pTAds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds14">
            <option    
                          <?php if($datata['ds14ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds14ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds14ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds14ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds14ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds14ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pTAds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds15">
            <option    
                          <?php if($datata['ds15ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds15ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds15ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds15ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds15ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds15ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pTAds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds16">
            <option    
                          <?php if($datata['ds16ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds16ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds16ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds16ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds16ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds16ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="4" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Skills and Expertise</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pSEds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds11">
						<option    
                          <?php if($datase['ds11se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds11se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds11se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds11se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds11se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds11se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pSEds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="SEds12">
            <option    
                          <?php if($datase['ds12se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds12se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds12se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds12se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds12se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds12se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pSEds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="SEds13">
<option    
                          <?php if($datase['ds13se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds13se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds13se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds13se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds13se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds13se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pSEds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds14">
<option    
                          <?php if($datase['ds14se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds14se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds14se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds14se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds14se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds14se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | {<?php echo $pSEds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds15">
<option    
                          <?php if($datase['ds15se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds15se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds15se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds15se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds15se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds15se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pSEds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds16">
<option    
                          <?php if($datase['ds16se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds16se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds16se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds16se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds16se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds16se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="5" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Responsibility and Accountability</h3>
                          </div>
                        </div>
<div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pRAds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds11">
						<option     
                          <?php if($datara['ds11ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds11ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds11ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds11ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds11ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds11ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pRAds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="RAds12">
            <option     
                          <?php if($datara['ds12ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds12ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds12ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds12ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds12ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds12ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pRAds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="RAds13">
            <option     
                          <?php if($datara['ds13ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds13ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds13ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds13ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds13ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds13ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pRAds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds14">
            <option     
                          <?php if($datara['ds14ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds14ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds14ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds14ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds14ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds14ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pRAds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds15">
            <option     
                          <?php if($datara['ds15ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds15ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds15ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds15ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds15ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds15ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pRAds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds16">
            <option     
                          <?php if($datara['ds16ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds16ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds16ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds16ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds16ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds16ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="6" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Goal Setting and Easurement</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pGSMds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds11">
						<option      
                          <?php if($datagsm['ds11gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pGSMds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="GSMds12">
             <option      
                          <?php if($datagsm['ds12gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pGSMds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="GSMds13">
           <option      
                          <?php if($datagsm['ds13gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pGSMds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds14">
           <option      
                          <?php if($datagsm['ds14gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pGSMds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds15">
           <option      
                          <?php if($datagsm['ds15gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pGSMds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds16">
           <option      
                          <?php if($datagsm['ds16gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-success btn-space">Complete</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
                  </div>

				  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     