<?php 
include "koneksi.php";
include "cek.php";    
  //echo $ACds101;
session_start();
if ($_SESSION['lvl'] == 'pegawai'  or $_SESSION['lvl'] == 'admin'){
    $pACds101 = "Sejauh mana tingkat kepedulian staff IT dalam mengidentifikasi dan mengklasifikasi masalah terkait layanan SIAKAD ?"; 
    $pACds102 = "Sejauh mana tingkat kepedulian staff IT dalam menelusuri masalah dan mencari solusi masalah yang ada pada layanan SIAKAD ?"; 
    $pACds103 = "Sejauh mana tingkat kepedulian staff IT dalam menyelesaikan masalah yang dialami pengguna layanan SIAKAD ?"; 
    $pACds104 = "Sejauh mana tingkat kepedulian staff IT dalam mengelola masalah terkait layanan SIAKAD ?"; 
   // $pACds105 = "Sejauh mana kepedulian staff IT terhadap pengelolaan data, pemulihan data dan pertukaran data?"; 
   // $pACds106 = "Sejauh mana koordinasi antar staff IT dalam persyaratan keamanan data?";

    $pPSPds101 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengidentifikasi dan mengklasifikasi masalah dalam penerapan layanan SIAKAD ?"; 
    $pPSPds102 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menelusuri masalah dan mencari solusi masalah dalam menerapan layanan SIAKAD ?"; 
    $pPSPds103 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menyelesaikan masalah terkait penerapan layanan SIAKAD ? "; 
    $pPSPds104 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengelola masalah dalam penerapan layanan SIAKAD ?"; 
  //  $pPSPds105 = "Sejauh mana kebijakan standar dan prosedur terhadap pengelolaan dan pemulihan data?"; 
   // $pPSPds106 = "Sejauh mana kebijakan standar dan prosedur terhadap persyaratan manajemen data?";
    
    $pTAds101 = "Apakah staff IT menggunakan Perangkat untuk mengidentifikasi dan mengklasifikasi masalah layanan SIAKAD ?"; 
    $pTAds102 = "Apakah staff IT menggunakan Perangkat untuk menelusuri masalah dan mencari solusi masalah layanan SIAKAD ?"; 
    $pTAds103 = "Apakah staff IT menggunakan Perangkat dalam menyelesaikan masalah layanan SIAKAD ?"; 
    $pTAds104 = "Apakah staff IT menggunakan Perangkat dalam  mengelola masalah layanan SIAKAD ?"; 
  //  $pTAds105 = "Sejauh mana staff IT menerapkan Perangkat terhadap pengelolaan data pemulihan?"; 
  //  $pTAds106 = "Sejauh mana penerapan Perangkat terhadapa keamanan data?";

    $pSEds101 = "Sejauh mana tingkat keterampilan staff IT dalam mengidentifikasi dan mengklasifikasi masalah layanan SIAKAD ?"; 
    $pSEds102 = "Sejauh mana tingkat keterampilan staff IT dalam menelusuri masalah dan mencari solusi masalah yang ada pada layanan SIAKAD ?"; 
    $pSEds103 = "Sejauh mana tingkat keterampilan staff IT dalam menyelesaikan masalah layanan SIAKAD ?"; 
    $pSEds104 = "Sejauh mana tingkat keterampilan staff IT dalam mengelola masalah layanan SIAKAD ?"; 
   // $pSEds105 = "Sejauh mana keterampilan staff IT terhadap pemulihan dan restorasi data yang ada di sistem SIAKAD?"; 
   // $pSEds106 = "Sejauh mana keterampilan staff IT terhadap keamanan data yang ada di sebuah sistem SIAKAD?";
    
    $pRAds101 = "Sejauh mana staff IT bertanggung jawab dalam mengidentifikasi dan mengklasifikasi masalah layanan SIAKAD ?"; 
    $pRAds102 = "Sejauh mana staff IT bertanggung jawab dalam menelusuri masalah dan mencari solusi masalah yang ada pada layanan SIAKAD ?"; 
    $pRAds103 = "Sejauh mana staff IT bertanggung jawab dalam menyelesaikan masalah layanan SIAKAD ?"; 
    $pRAds104 = "Sejauh mana staff IT bertanggung jawab terhadap pengelolaan masalah layanan SIAKAD ?"; 
    //$pRAds105 = "Sejauh mana staff IT bertanggung jawab terhadap sistem jika sewaktu-waktu data dan dokumentasi diperlukan?"; 
    //$pRAds106 = "Sejauh mana staff IT bertanggung terhadap pemeriksaan secara berkala dalam data sistem?";
    
    $pGSMds101 = "Apakah staff IT telah menentukan dan mengukur dampak masalah yang ada pada layanan SIAKAD sebelum mengidentifikasi dan mengklasifikasikannya ?"; 
    $pGSMds102 = "Apakah staff IT menentukan dan mengukur solusi terhadap setiap masalah yang ada pada layanan SIAKAD ?"; 
    $pGSMds103 = "Apakah staff IT telah mengukur tingkat penyelesaian masalah terkait layanan SIAKAD ?"; 
    $pGSMds104 = "Apakah staff IT telah mengukur tingkat pengelolaan masalah terkait layanan SIAKAD ?"; 
    //$pGSMds105 = "Sejauh mana staff IT melakukan penetapan tujuan terhadap sistem yang telah digunakan dalam jangkat waktu tertentu?"; 
    //$pGSMds106 = "Sejauh mana Univet melakukan pengukuran terhadap sistem yang sedang berjalan?";
}
if ($_SESSION['lvl'] == 'mahasiswa'){
    $pACds101 = "Sejauh mana tingkat kepedulian staff IT dalam mengidentifikasi dan mengklasifikasi masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ?"; 
    $pACds102 = "Sejauh mana tingkat kepedulian staff IT dalam menelususri dan mencari solusi terhadap masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ?"; 
    $pACds103 = "Sejauh mana tingkat kepedulian staff IT dalam menangani masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ?"; 
    $pACds104 = "Sejauh mana tingkat kepedulian staff IT dalam mengelola masalah layanan SIAKAD ?"; 
 //   $pACds105 = "Apakah pihak staff IT peduli terhadap pengelolaan data, pemulihan data dan pertukaran data?"; 
  //  $pACds106 = "Bagaimana koordinasi tentang pentingnya persyaratan kemanan data?";

    $pPSPds101 = "Apakah STIKES telah menerapkan Standar Operasional Prosedur (SOP) dalam mengidentifikasi dan mengklasifikasi masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ?"; 
    $pPSPds102 = "Apakah STIKES telah menerapkan Standar Operasional Prosedur (SOP) dalam menelusuri dan mencari solusi terhadap masalah yang dialami mahasiswa ketika menggunakan layanan SIAKAD ?"; 
    $pPSPds103 = "Apakah STIKES telah menerapkan Standar Operasional Prosedur (SOP) dalam menangani masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ? "; 
    $pPSPds104 = "Apakah STIKES telah menerapkan Standar Operasional Prosedur (SOP) dalam mengelola masalah yang dialami mahasiswa terkait layanan SIAKAD ?"; 
  //  $pPSPds105 = "Apakah kebijakan standar dan prosedur sudah di terapkan terhadap pengelolaan, pemulihan dan manajemen data?"; 
 //   $pPSPds106 = "Apakah kebijakan standar dan prosedur sudah dilakukan dalam menangani persyaratan keamanan untuk manajemen data?";
    
    $pTAds101 = "Apakah staff IT menggunakan Perangkat untuk mengidentifikasi dan mengklasifikasi masalah yang dialami mahasiswa dalam penggunaan layanan SIAKAD ?"; 
    $pTAds102 = "Apakah staff IT menggunakan Perangkat untuk menelusuri dan mencari solusi terhadap masalah yang dialami mahasiswa dalam penggunaan layanan SIAKAD ?"; 
    $pTAds103 = "Apakah staff IT menggunakan Perangkat dalam menangani masalah layanan SIAKAD yang dialami mahasiswa ?"; 
    $pTAds104 = "Apakah staff IT menggunakan Perangkat dalam  mengelola permasalahan yang muncul terhadap layanan SIAKAD ?"; 
 //   $pTAds105 = "Apakah penggunaan Perangkat sudah di terapkan terhadap pemulihan data yang hilang?"; 
   // $pTAds106 = "Apakah staff IT sudah menerapkan Perangkat dalam keamanan data?";

    $pSEds101 = "Sejauh mana tingkat keterampilan staff IT dalam mengidentifikasi dan mengklasifikasi masalah yang dialami oleh mahasiswa ketika menggunakan SIAKAD ? "; 
    $pSEds102 = "Sejauh mana tingkat keterampilan staff IT dalam melacak dan mencari solusi terhadap masalah yang dialami oleh mahasiswa ketika menggunakan SIAKAD ?"; 
    $pSEds103 = "Sejauh mana tingkat keterampilan staff IT dalam menangani masalah yang dialami oleh mahasiswa ketika menggunakan SIAKAD ?"; 
    $pSEds104 = "Sejauh mana tingkat keterampilan staff IT dalam mengelola masalah terkait layanan SIAKAD ?"; 
 //   $pSEds105 = "Bagaimana keterampilan staff IT tehadap pemulihan dan restorasi data yang ada di sistem?"; 
 //   $pSEds106 = "Bagaimana keterampilan staff IT dalam mengatasi kebocoran data?";
    
    $pRAds101 = "Sejauh mana staff IT bertanggung jawab dalam mengidentifikasi dan mengklasifikasi masalah layanan SIAKAD ?"; 
    $pRAds102 = "Sejauh mana staff IT bertanggung jawab dalam melacak dam mencari solusi terhadap masalah yang dialami mahasiswa ketika menggunakan layanan SIAKAD ?"; 
    $pRAds103 = "Sejauh mana staff IT bertanggung jawab dalam menangani masalah yang dialami mahasiswa ketika menggunakan layanan SIAKAD ?"; 
    $pRAds104 = "Sejauh mana staff IT bertanggung jawab terhadap pengelolaan masalah layanan SIAKAD ?"; 
 //   $pRAds105 = "Apakah pihak staff IT bertanggung jawab terhadap sistem bila terjadi pemrosesan data yang mencurigakan?"; 
 //   $pRAds106 = "Apakah pihak Univet bertanggung jawab terhadap pemeriksaan sistem secara berkala?";
    
    $pGSMds101 = "Apakah staff IT telah menentukan dan mengukur masalah sebelum melakukan pengidentifikasian dan pengklasifikasian masalah terkait layanan SIAKAD ?"; 
    $pGSMds102 = "Apakah staff IT dapat menentukan dan mengukur solusi dari setiap masalah yang dialami mahasiswa saat menggunakan layanan SIAKAD ?"; 
    $pGSMds103 = "Apakah staff IT telah mengukur dampak masalah yang dialami mahasiswa ketika menggunakan layanan SIAKAD ?"; 
    $pGSMds104 = "Apakah staff IT telah mengukur tingkat pengelolaan masalah layanan SIAKAD ?"; 
//    $pGSMds105 = "Apakah pihak Univet melakukan penetapan dan pengukuran terhadap tujuan sistem yang sedang berjalan?"; 
 //   $pGSMds106 = "Sejauh mana Univet melakukan pengukuran terhadap sistem yang sedang berjalan?";
}

$kd_user = $_SESSION['kd_user'];
 $tampilac=mysqli_query($conn,"SELECT * from ds10ac where kd_user='$kd_user'");
$dataac=mysqli_fetch_assoc($tampilac);

$tampilpsp=mysqli_query($conn,"SELECT * from ds10psp where kd_user='$kd_user'");
$datapsp=mysqli_fetch_assoc($tampilpsp);

$tampilta=mysqli_query($conn,"SELECT * from ds10ta where kd_user='$kd_user'");
$datata=mysqli_fetch_assoc($tampilta);

$tampilse=mysqli_query($conn,"SELECT * from ds10se where kd_user='$kd_user'");
$datase=mysqli_fetch_assoc($tampilse);

$tampilra=mysqli_query($conn,"SELECT * from ds10ra where kd_user='$kd_user'");
$datara=mysqli_fetch_assoc($tampilra);

$tampilgsm=mysqli_query($conn,"SELECT * from ds10gsm where kd_user='$kd_user'");
$datagsm=mysqli_fetch_assoc($tampilgsm);


if($dataac){
  $dis = "disabled";
}else{
  $dis = "";
}
?>


     <div class="page-head">
          <h2 class="page-head-title">Kuesioner Delivery and Support 10
        <?php if($_GET['status'] == "success"):?>
  <button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
<?php endif;?>
      </h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">DS 10</li>
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
          <form action="sv_ds10.php" method="POST" data-parsley-namespace="data-parsley-" data-parsley-validate="" novalidate="" class="form-horizontal group-border-dashed">
                  <div class="step-content">
          
                    <div data-step="1" class="step-pane active">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Awarness and Communication</h3>
                          </div>
               
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pACds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds101">
            <option  
                          <?php if($dataac['ds101ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds101ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds101ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds101ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds101ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds101ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pACds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="ACds102">
            <option  
                          <?php if($dataac['ds102ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds102ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds102ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds102ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds102ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds102ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pACds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="ACds103"><option  
                          <?php if($dataac['ds103ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds103ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds103ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds103ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds103ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds103ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pACds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="ACds104"><option  
                          <?php if($dataac['ds104ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds104ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds104ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds104ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds104ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala</option>
                          <option  
                          <?php if($dataac['ds104ac'] == "5"):?>
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
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pPSPds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds101">
            <option   
                          <?php if($datapsp['ds101psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds101psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds101psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds101psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds101psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds101psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pPSPds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="PSPds102">
            <option   
                          <?php if($datapsp['ds102psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds102psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds102psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds102psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds102psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds102psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pPSPds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="PSPds103">
            <option   
                          <?php if($datapsp['ds103psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds103psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds103psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds103psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds103psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds103psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | Standar/prosedur sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pPSPds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="PSPds104">
            <option   
                          <?php if($datapsp['ds104psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada standar/prosedur</option>
                          <option    
                          <?php if($datapsp['ds104psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada standar/prosedur tetapi belum disosialisasikan</option>
                          <option    
                          <?php if($datapsp['ds104psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada standar/prosedur sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds104psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | Standar/prosedur sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds104psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | Standar/prosedur sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds104psp'] == "5"):?>
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
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pTAds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds101">            
            <option    
                          <?php if($datata['ds101ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds101ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds101ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds101ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds101ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds101ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pTAds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="TAds102">
            <option    
                          <?php if($datata['ds102ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds102ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds102ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds102ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds102ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds102ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pTAds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="TAds103">
            <option    
                          <?php if($datata['ds103ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds103ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds103ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds103ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds103ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds103ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pTAds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="TAds104">
            <option    
                          <?php if($datata['ds104ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds104ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada Perangkat tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds104ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds104ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan Perangkat</option>
                          <option    
                          <?php if($datata['ds104ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds104ta'] == "5"):?>
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
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pSEds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds101">
            <option    
                          <?php if($datase['ds101se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds101se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds101se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds101se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds101se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds101se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pSEds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="SEds102">
            <option    
                          <?php if($datase['ds102se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds102se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds102se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds102se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds102se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds102se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pSEds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="SEds103">
            <option    
                          <?php if($datase['ds103se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds103se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds103se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds103se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds103se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds103se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Staff diberikan kesempatan untuk mengembangkan skill secara berkelanjutan</option>                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pSEds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="SEds104">
            <option    
                          <?php if($datase['ds104se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada pelatihan</option>
                          <option    
                          <?php if($datase['ds104se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada perencanaan pelatihan</option>
                          <option    
                          <?php if($datase['ds104se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Kebutuhan ketrampilan sudah diidentifikasi</option>
                          <option    
                          <?php if($datase['ds104se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Kebutuhan ketrampilan telah diidentifikasikan atas inisiatif perorangan</option>
                          <option    
                          <?php if($datase['ds104se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Kebutuhan akan skill rutin diupdate</option>
                          <option    
                          <?php if($datase['ds104se'] == "5"):?>
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
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pRAds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds101">
            <option     
                          <?php if($datara['ds101ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds101ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds101ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds101ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds101ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds101ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pRAds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="RAds102">
            <option     
                          <?php if($datara['ds102ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds102ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds102ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds102ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds102ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds102ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pRAds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="RAds103">
            <option     
                          <?php if($datara['ds103ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds103ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds103ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds103ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds103ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds103ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pRAds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="RAds104">
            <option     
                          <?php if($datara['ds104ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada tanggung jawab</option>
                          <option     
                          <?php if($datara['ds104ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds104ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds104ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds104ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds104ra'] == "5"):?>
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
                          <label class="control-label col-sm-6">DS10.1 | <?php echo $pGSMds101;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds101">
            <option      
                          <?php if($datagsm['ds101gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds101gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds101gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds101gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds101gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds101gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
            
                      </div>
           
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS10.2 | <?php echo $pGSMds102;?></label>
             <div class="col-sm-4">
                        <select class="form-control" name="GSMds102">
            <option      
                          <?php if($datagsm['ds102gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds102gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds102gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds102gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds102gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds102gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.3 | <?php echo $pGSMds103;?></label>
            <div class="col-sm-4">
                        <select class="form-control" name="GSMds103">
            <option      
                          <?php if($datagsm['ds103gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds103gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds103gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds103gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds103gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds103gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Indikator pencapaian tujuan telah disepakati dan dimonitoring secara konsisten </option>
                        </select>
                      </div>
                        </div>
            <div class="form-group">
                          <label class="control-label col-sm-6">DS10.4 | <?php echo $pGSMds104;?></label>
              <div class="col-sm-4">
                        <select class="form-control" name="GSMds104">
            <option      
                          <?php if($datagsm['ds104gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Belum ada kebutuhan akan kualitas</option>
                          <option      
                          <?php if($datagsm['ds104gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Tujuan pengelolaan data belum jelas</option>
                          <option      
                          <?php if($datagsm['ds104gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds104gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds104gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Indikator pencapaian tujuan telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds104gsm'] == "5"):?>
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
     