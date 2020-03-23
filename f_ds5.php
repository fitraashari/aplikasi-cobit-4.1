<?php
include "koneksi.php";
include "cek.php";
//echo $ACds51;
session_start();
if ($_SESSION['lvl'] == 'pegawai' or $_SESSION['lvl'] == 'admin') {
    $pACds51  = "Sejauh mana tingkat kepedulian staff IT dalam mengelola keamanan SIAKAD ?";
    $pACds52  = "Sejauh mana tingkat kepedulian staff IT dalam merencanakan keamanan SIAKAD ?";
    $pACds53  = "Sejauh mana tingkat kepedulian staff IT dalam hal mengidentifikasi pengguna layanan SIAKAD?";
    $pACds54  = "Sejauh mana tingkat kepedulian staff IT dalam hal mengatur hak akses dari setiap user  SIAKAD?";
    $pACds55  = "Sejauh mana tingkat kepedulian staff IT dalam melakukan pengujian dan pengawasan terhadap keamanan SIAKAD?";
    $pACds56  = "Sejauh mana tingkat kepedulian staff IT terhadap masalah terkait keamanan SIAKAD ?";
    $pACds57  = "Sejauh mana tingkat kepedulian staff IT dalam menerapkan teknologi kemanan SIAKAD ?";
    $pACds58  = "Sejauh mana tingkat kepedulian staff IT dalam memanfaatkan Kriptografi guna meningkatkan keamanan SIAKAD ?";
    $pACds59  = "Sejauh mana tingkat kepedulian staff IT dalam mencegah dan mendeteksi adanya perangkat lunak berbahaya ?";
    $pACds510 = "Sejauh mana tingkat kepedulian staff IT terhadap keamanan jaringan ? ";
    $pACds511 = "Sejauh mana tingkat kepedulian staff IT dalam mengamankan pertukaran data sensitif ?";

    $pPSPds51  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam  mengelola keamanan SIAKAD?";
    $pPSPds52  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam perencanaan keamanan SIAKAD ?";
    $pPSPds53  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam hal mengidentifikasi pengguna layanan SIAKAD ?";
    $pPSPds54  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengatur hak akses dari setiap user SIAKAD ?";
    $pPSPds55  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam melakukan pengujian dan pengawasan keamanan SIAKAD ?";
    $pPSPds56  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menangani masalah terkait keamanan SIAKAD ?";
    $pPSPds57  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan teknologi keamanan SIAKAD ? ";
    $pPSPds58  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan Kriptografi guna meningkatkan keamanan SIAKAD?";
    $pPSPds59  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mencegah dan mendeteksi perangkat lunak berbahaya ?";
    $pPSPds510 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan keamanan jaringan ? ";
    $pPSPds511 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengamankan pertukaran data sensitif ?";

    $pTAds51  = "Apakah staff IT menggunakan perangkat (tools) dalam mengelola keamanan SIAKAD ?";
    $pTAds52  = "Apakah staff IT menggunakan perangkat (tools) untuk merencanakan keamanan SIAKAD ?";
    $pTAds53  = "Apakah staff IT menggunakan perangkat (tools) untuk mengidentifikasi pengguna layanan SIAKAD ?";
    $pTAds54  = "Apakah staff IT menggunakan perangkat (tools) untuk mengatur hak akses user SIAKAD ?";
    $pTAds55  = "Apakah staff IT menggunakan perangkat (tools) dalam pengujian dan pengawasan keamanan SIAKAD  ?";
    $pTAds56  = "Apakah staff IT menggunakan perangkat (tools) dalam menangani masalah terkait keamanan SIAKAD ?";
    $pTAds57  = "Apakah staff IT menggunakan perangkat (tools) dalam menerapkan teknologi keamanan SIAKAD ?";
    $pTAds58  = "Apakah staff IT menggunakan perangkat (tools) dalam melindungi SIAKAD dari akses tidak sah ?";
    $pTAds59  = "Apakah staff IT menggunakan perangkat (tools) dalam mencegah dan mendeteksi perangkat lunak berbahaya? ";
    $pTAds510 = "Apakah staff IT menggunakan perangkat (tools) dalam mengamankan jaringan ? ";
    $pTAds511 = "Apakah staff IT menggunakan perangkat (tools) untuk mengamankan pertukaran data sensitif ?";

    $pSEds51  = "Sejauh mana tingkat keterampilan staff IT dalam mengelola keamanan SIAKAD ?";
    $pSEds52  = "Sejauh mana tingkat keterampilan staff IT dalam merencanakan keamanan yang akan diterapkan pada SIAKAD ?";
    $pSEds53  = "Sejauh mana tingkat keterampilan staff IT dalam mengidentifikasi pengguna SIAKAD ? ";
    $pSEds54  = "Sejauh mana tingkat keterampilan staff IT dalam mengatur hak akses setiap user SIAKAD ?";
    $pSEds55  = "Sejauh mana tingkat keterampilan staff IT dalam melakukan pengujian dan pengawasan keamanan SIAKAD ?";
    $pSEds56  = "Sejauh mana tingkat keterampilan staff IT dalam menangani masalah terkait keamanan SIAKAD ?";
    $pSEds57  = "Sejauh mana tingkat keterampilan staff IT dalam menerapkan teknologi keamanan SIAKAD ?";
    $pSEds58  = "Sejauh mana tingkat keterampilan staff IT dalam melindungi SIAKAD dari akses tidak sah ?";
    $pSEds59  = "Sejauh mana tingkat keterampilan staff IT dalam mencegah dan mendeteksi perangkat lunak berbahaya ?";
    $pSEds510 = "Sejauh mana tingkat keterampilan staff IT dalam hal keamanan jaringan ?";
    $pSEds511 = "Sejauh mana tingkat keterampilan staff IT dalam hal pengamanan pertukaran data sensitif ?";

    $pRAds51  = "Sejauh mana staff IT bertanggung jawab terhadap pengelolaan keamanan SIAKAD ?";
    $pRAds52  = "Sejauh mana staff IT bertanggung jawab terhadap perencanaan keamanan SIAKAD ?";
    $pRAds53  = "Sejauh mana staff IT bertanggung jawab dalam mengidentifikasi pengguna SIAKAD ?";
    $pRAds54  = "Sejauh mana staff IT bertanggung jawab terhadap hak akses yang diberikan kepada pengguna ?";
    $pRAds55  = "Sejauh mana staff IT bertanggung jawab dalam pengujian dan pengawasan keamanan SIAKAD ?";
    $pRAds56  = "Sejauh mana staff IT bertanggung jawab dalam menangani masalah terkait keamanan SIAKAD ?";
    $pRAds57  = "Sejauh mana staff IT bertanggung jawab terhadap teknologi keamanan yang diterapkan ?";
    $pRAds58  = "Sejauh mana staff IT bertanggung jawab dalam melindungi SIAKAD pelanggaran keamanan ?";
    $pRAds59  = "Apakah staff IT bertanggung jawab bila terjadi serangan dari luar seperti virus, spam,dan malware ?";
    $pRAds510 = "Apakah staff IT bertanggung jawab atas keamanan jaringan yang ada ? ";
    $pRAds511 = "Apakah staff IT bertanggung jawab atas pertukaran data supaya tidak terjadi kebocoran data pada SIAKAD ?";

    $pGSMds51  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengelolaan keamanan SIAKAD ?";
    $pGSMds52  = "Apakah staff IT telah menentukan dan mengukur  pencapaian rancangan keamanan SIAKAD sebelum menerapkannya ?";
    $pGSMds53  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengidentifikasian pengguna SIAKAD ?";
    $pGSMds54  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengelolaan hak akses user SIAKAD ?";
    $pGSMds55  = "Apakah staff IT telah mengukur  tingkat keamanan SIAKAD ? ";
    $pGSMds56  = "Apakah staff IT telah mengukur pencapaian dalam hal penanganan masalah terkait keamanan SIAKAD ?";
    $pGSMds57  = "Apakah staff IT telah mengukur keefektifan dari penerapan teknologi keamanan SIAKAD ?";
    $pGSMds58  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari penerapan kunci kriptografi dalam mengamankan data SIAKAD ?";
    $pGSMds59  = "Apakah staff IT telah mengukur keamanan layanan SIAKAD terhadap serangan perangkat lunak berbahaya ?";
    $pGSMds510 = "Apakah staff IT telah mengukur keamanan jaringan yang ada ?";
    $pGSMds511 = "Apakah staff IT telah mengukur keamanan pertukaran data sensitif ?";
}
if ($_SESSION['lvl'] == 'mahasiswa') {
  $pACds51  = "Sejauh mana tingkat kepedulian staff IT dalam mengelola keamanan SIAKAD ?";
  $pACds52  = "Sejauh mana tingkat kepedulian staff IT dalam merencanakan keamanan SIAKAD ?";
  $pACds53  = "Sejauh mana tingkat kepedulian staff IT dalam hal mengidentifikasi pengguna layanan SIAKAD?";
  $pACds54  = "Sejauh mana tingkat kepedulian staff IT dalam hal mengatur hak akses dari setiap user  SIAKAD?";
  $pACds55  = "Sejauh mana tingkat kepedulian staff IT dalam melakukan pengujian dan pengawasan terhadap keamanan SIAKAD?";
  $pACds56  = "Sejauh mana tingkat kepedulian staff IT terhadap masalah terkait keamanan SIAKAD ?";
  $pACds57  = "Sejauh mana tingkat kepedulian staff IT dalam menerapkan teknologi kemanan SIAKAD ?";
  $pACds58  = "Sejauh mana tingkat kepedulian staff IT dalam memanfaatkan Kriptografi guna meningkatkan keamanan SIAKAD ?";
  $pACds59  = "Sejauh mana tingkat kepedulian staff IT dalam mencegah dan mendeteksi adanya perangkat lunak berbahaya ?";
  $pACds510 = "Sejauh mana tingkat kepedulian staff IT terhadap keamanan jaringan ? ";
  $pACds511 = "Sejauh mana tingkat kepedulian staff IT dalam mengamankan pertukaran data sensitif ?";

  $pPSPds51  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam  mengelola keamanan SIAKAD?";
  $pPSPds52  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam perencanaan keamanan SIAKAD ?";
  $pPSPds53  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam hal mengidentifikasi pengguna layanan SIAKAD ?";
  $pPSPds54  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengatur hak akses dari setiap user SIAKAD ?";
  $pPSPds55  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam melakukan pengujian dan pengawasan keamanan SIAKAD ?";
  $pPSPds56  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menangani masalah terkait keamanan SIAKAD ?";
  $pPSPds57  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan teknologi keamanan SIAKAD ? ";
  $pPSPds58  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan Kriptografi guna meningkatkan keamanan SIAKAD?";
  $pPSPds59  = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mencegah dan mendeteksi perangkat lunak berbahaya ?";
  $pPSPds510 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam menerapkan keamanan jaringan ? ";
  $pPSPds511 = "Apakah staff IT telah menerapkan Standar Operasional Prosedur (SOP) dalam mengamankan pertukaran data sensitif ?";

  $pTAds51  = "Apakah staff IT menggunakan perangkat (tools) dalam mengelola keamanan SIAKAD ?";
  $pTAds52  = "Apakah staff IT menggunakan perangkat (tools) untuk merencanakan keamanan SIAKAD ?";
  $pTAds53  = "Apakah staff IT menggunakan perangkat (tools) untuk mengidentifikasi pengguna layanan SIAKAD ?";
  $pTAds54  = "Apakah staff IT menggunakan perangkat (tools) untuk mengatur hak akses user SIAKAD ?";
  $pTAds55  = "Apakah staff IT menggunakan perangkat (tools) dalam pengujian dan pengawasan keamanan SIAKAD  ?";
  $pTAds56  = "Apakah staff IT menggunakan perangkat (tools) dalam menangani masalah terkait keamanan SIAKAD ?";
  $pTAds57  = "Apakah staff IT menggunakan perangkat (tools) dalam menerapkan teknologi keamanan SIAKAD ?";
  $pTAds58  = "Apakah staff IT menggunakan perangkat (tools) dalam melindungi SIAKAD dari akses tidak sah ?";
  $pTAds59  = "Apakah staff IT menggunakan perangkat (tools) dalam mencegah dan mendeteksi perangkat lunak berbahaya? ";
  $pTAds510 = "Apakah staff IT menggunakan perangkat (tools) dalam mengamankan jaringan ? ";
  $pTAds511 = "Apakah staff IT menggunakan perangkat (tools) untuk mengamankan pertukaran data sensitif ?";

  $pSEds51  = "Sejauh mana tingkat keterampilan staff IT dalam mengelola keamanan SIAKAD ?";
  $pSEds52  = "Sejauh mana tingkat keterampilan staff IT dalam merencanakan keamanan yang akan diterapkan pada SIAKAD ?";
  $pSEds53  = "Sejauh mana tingkat keterampilan staff IT dalam mengidentifikasi pengguna SIAKAD ? ";
  $pSEds54  = "Sejauh mana tingkat keterampilan staff IT dalam mengatur hak akses setiap user SIAKAD ?";
  $pSEds55  = "Sejauh mana tingkat keterampilan staff IT dalam melakukan pengujian dan pengawasan keamanan SIAKAD ?";
  $pSEds56  = "Sejauh mana tingkat keterampilan staff IT dalam menangani masalah terkait keamanan SIAKAD ?";
  $pSEds57  = "Sejauh mana tingkat keterampilan staff IT dalam menerapkan teknologi keamanan SIAKAD ?";
  $pSEds58  = "Sejauh mana tingkat keterampilan staff IT dalam melindungi SIAKAD dari akses tidak sah ?";
  $pSEds59  = "Sejauh mana tingkat keterampilan staff IT dalam mencegah dan mendeteksi perangkat lunak berbahaya ?";
  $pSEds510 = "Sejauh mana tingkat keterampilan staff IT dalam hal keamanan jaringan ?";
  $pSEds511 = "Sejauh mana tingkat keterampilan staff IT dalam hal pengamanan pertukaran data sensitif ?";

  $pRAds51  = "Sejauh mana staff IT bertanggung jawab terhadap pengelolaan keamanan SIAKAD ?";
  $pRAds52  = "Sejauh mana staff IT bertanggung jawab terhadap perencanaan keamanan SIAKAD ?";
  $pRAds53  = "Sejauh mana staff IT bertanggung jawab dalam mengidentifikasi pengguna SIAKAD ?";
  $pRAds54  = "Sejauh mana staff IT bertanggung jawab terhadap hak akses yang diberikan kepada pengguna ?";
  $pRAds55  = "Sejauh mana staff IT bertanggung jawab dalam pengujian dan pengawasan keamanan SIAKAD ?";
  $pRAds56  = "Sejauh mana staff IT bertanggung jawab dalam menangani masalah terkait keamanan SIAKAD ?";
  $pRAds57  = "Sejauh mana staff IT bertanggung jawab terhadap teknologi keamanan yang diterapkan ?";
  $pRAds58  = "Sejauh mana staff IT bertanggung jawab dalam melindungi SIAKAD pelanggaran keamanan ?";
  $pRAds59  = "Apakah staff IT bertanggung jawab bila terjadi serangan dari luar seperti virus, spam,dan malware ?";
  $pRAds510 = "Apakah staff IT bertanggung jawab atas keamanan jaringan yang ada ? ";
  $pRAds511 = "Apakah staff IT bertanggung jawab atas pertukaran data supaya tidak terjadi kebocoran data pada SIAKAD ?";

  $pGSMds51  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengelolaan keamanan SIAKAD ?";
  $pGSMds52  = "Apakah staff IT telah menentukan dan mengukur  pencapaian rancangan keamanan SIAKAD sebelum menerapkannya ?";
  $pGSMds53  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengidentifikasian pengguna SIAKAD ?";
  $pGSMds54  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari pengelolaan hak akses user SIAKAD ?";
  $pGSMds55  = "Apakah staff IT telah mengukur  tingkat keamanan SIAKAD ? ";
  $pGSMds56  = "Apakah staff IT telah mengukur pencapaian dalam hal penanganan masalah terkait keamanan SIAKAD ?";
  $pGSMds57  = "Apakah staff IT telah mengukur keefektifan dari penerapan teknologi keamanan SIAKAD ?";
  $pGSMds58  = "Apakah staff IT telah menentukan dan mengukur  pencapaian dari penerapan kunci kriptografi dalam mengamankan data SIAKAD ?";
  $pGSMds59  = "Apakah staff IT telah mengukur keamanan layanan SIAKAD terhadap serangan perangkat lunak berbahaya ?";
  $pGSMds510 = "Apakah staff IT telah mengukur keamanan jaringan yang ada ?";
  $pGSMds511 = "Apakah staff IT telah mengukur keamanan pertukaran data sensitif ?";
}

$kd_user  = $_SESSION['kd_user'];
$tampilac = mysqli_query($conn, "SELECT * from ds5ac where kd_user='$kd_user'");
$dataac   = mysqli_fetch_assoc($tampilac);

$tampilpsp = mysqli_query($conn, "SELECT * from ds5psp where kd_user='$kd_user'");
$datapsp   = mysqli_fetch_assoc($tampilpsp);

$tampilta = mysqli_query($conn, "SELECT * from ds5ta where kd_user='$kd_user'");
$datata   = mysqli_fetch_assoc($tampilta);

$tampilse = mysqli_query($conn, "SELECT * from ds5se where kd_user='$kd_user'");
$datase   = mysqli_fetch_assoc($tampilse);

$tampilra = mysqli_query($conn, "SELECT * from ds5ra where kd_user='$kd_user'");
$datara   = mysqli_fetch_assoc($tampilra);

$tampilgsm = mysqli_query($conn, "SELECT * from ds5gsm where kd_user='$kd_user'");
$datagsm   = mysqli_fetch_assoc($tampilgsm);

if ($dataac) {
    $dis = "disabled";
} else {
    $dis = "";
}
?>


       <div class="page-head">
          <h2 class="page-head-title">Kuesioner Delivery and Support 5
            <?php if ($_GET['status'] == "success"): ?>
  <button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
<?php endif;?>
          </h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">DS 5</li>
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
                  <form action="sv_DS5.php" method="POST" data-parsley-namespace="data-parsley-" data-parsley-validate="" novalidate="" class="form-horizontal group-border-dashed">
                  <div class="step-content">

                    <div data-step="1" class="step-pane active">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Awarness and Communication</h3>
                          </div>

                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pACds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds51">
                        <option
                          <?php if ($dataac['ds51ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds51ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds51ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds51ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds51ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds51ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pACds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="ACds52">
                        <option
                          <?php if ($dataac['ds52ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds52ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds52ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds52ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds52ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds52ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pACds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="ACds53">
                        <option
                          <?php if ($dataac['ds53ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds53ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds53ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds53ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds53ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds53ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pACds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds54">
                        <option
                          <?php if ($dataac['ds54ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds54ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds54ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds54ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds54ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds54ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pACds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds55">
                        <option
                          <?php if ($dataac['ds55ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds55ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds55ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds55ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds55ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds55ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pACds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds56">
                        <option
                          <?php if ($dataac['ds56ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds56ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds56ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds56ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds56ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds56ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pACds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds57">
                        <option
                          <?php if ($dataac['ds57ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds57ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds57ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds57ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds57ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds57ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pACds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds58">
                        <option
                          <?php if ($dataac['ds58ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds58ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds58ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds58ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds58ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds58ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pACds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds59">
                        <option
                          <?php if ($dataac['ds59ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds59ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds59ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds59ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds59ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds59ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pACds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds510">
                        <option
                          <?php if ($dataac['ds510ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds510ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds510ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds510ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds510ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds510ac'] == "5"): ?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                    <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pACds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds511">
                        <option
                          <?php if ($dataac['ds511ac'] == "0"): ?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds511ac'] == "1"): ?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option
                          <?php if ($dataac['ds511ac'] == "2"): ?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option
                          <?php if ($dataac['ds511ac'] == "3"): ?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option
                          <?php if ($dataac['ds511ac'] == "4"): ?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option
                          <?php if ($dataac['ds511ac'] == "5"): ?>
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
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pPSPds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds51">
            <option
                          <?php if ($datapsp['ds51psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds51psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds51psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds51psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds51psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds51psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pPSPds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="PSPds52">
            <option
                          <?php if ($datapsp['ds52psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds52psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds52psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds52psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds52psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds52psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pPSPds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="PSPds53">
            <option
                          <?php if ($datapsp['ds53psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds53psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds53psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds53psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds53psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds53psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pPSPds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds54">
            <option
                          <?php if ($datapsp['ds54psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds54psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds54psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds54psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds54psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds54psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pPSPds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds55">
            <option
                          <?php if ($datapsp['ds55psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds55psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds55psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds55psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds55psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds55psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pPSPds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds56">
            <option
                          <?php if ($datapsp['ds56psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds56psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds56psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds56psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds56psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds56psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pPSPds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds57">
            <option
                          <?php if ($datapsp['ds57psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds57psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds57psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds57psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds57psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds57psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pPSPds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds58">
            <option
                          <?php if ($datapsp['ds58psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds58psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds58psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds58psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds58psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds58psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pPSPds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds59">
            <option
                          <?php if ($datapsp['ds59psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds59psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds59psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds59psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds59psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds59psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pPSPds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds510">
            <option
                          <?php if ($datapsp['ds510psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds510psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds510psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds510psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds510psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds510psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pPSPds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds511">
            <option
                          <?php if ($datapsp['ds511psp'] == "0"): ?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option
                          <?php if ($datapsp['ds511psp'] == "1"): ?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option
                          <?php if ($datapsp['ds511psp'] == "2"): ?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option
                          <?php if ($datapsp['ds511psp'] == "3"): ?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option
                          <?php if ($datapsp['ds511psp'] == "4"): ?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option
                          <?php if ($datapsp['ds511psp'] == "5"): ?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
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
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pTAds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds51">
            <option
                          <?php if ($datata['ds51ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds51ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds51ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds51ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds51ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds51ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pTAds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="TAds52">
            <option
                          <?php if ($datata['ds52ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds52ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds52ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds52ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds52ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds52ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pTAds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="TAds53">
            <option
                          <?php if ($datata['ds53ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds53ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds53ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds53ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds53ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds53ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pTAds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds54">
            <option
                          <?php if ($datata['ds54ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds54ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds54ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds54ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds54ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds54ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pTAds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds55">
            <option
                          <?php if ($datata['ds55ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds55ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds55ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds55ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds55ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds55ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pTAds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds56">
            <option
                          <?php if ($datata['ds56ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds56ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds56ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds56ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds56ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds56ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pTAds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds57">
            <option
                          <?php if ($datata['ds57ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds57ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds57ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds57ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds57ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds57ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pTAds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds58">
            <option
                          <?php if ($datata['ds58ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds58ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds58ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds58ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds58ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds58ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pTAds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds59">
            <option
                          <?php if ($datata['ds59ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds59ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds59ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds59ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds59ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds59ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pTAds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds510">
            <option
                          <?php if ($datata['ds510ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds510ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds510ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds510ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds510ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds510ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pTAds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds511">
            <option
                          <?php if ($datata['ds511ta'] == "0"): ?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds511ta'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option
                          <?php if ($datata['ds511ta'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option
                          <?php if ($datata['ds511ta'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option
                          <?php if ($datata['ds511ta'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option
                          <?php if ($datata['ds511ta'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
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
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pSEds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds51">
                        <option
                          <?php if ($datase['ds51se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds51se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds51se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds51se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds51se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds51se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pSEds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="SEds52">
                        <option
                          <?php if ($datase['ds52se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds52se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds52se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds52se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds52se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds52se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pSEds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="SEds53">
                        <option
                          <?php if ($datase['ds53se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds53se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds53se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds53se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds53se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds53se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pSEds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds54">
                        <option
                          <?php if ($datase['ds54se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds54se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds54se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds54se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds54se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds54se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pSEds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds55">
                        <option
                          <?php if ($datase['ds55se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds55se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds55se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds55se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds55se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds55se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pSEds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds56">
                        <option
                          <?php if ($datase['ds56se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds56se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds56se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds56se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds56se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds56se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pSEds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds57">
                        <option
                          <?php if ($datase['ds57se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds57se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds57se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds57se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds57se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds57se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pSEds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds58">
                        <option
                          <?php if ($datase['ds58se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds58se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds58se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds58se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds58se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds58se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pSEds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds59">
                        <option
                          <?php if ($datase['ds59se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds59se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds59se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds59se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds59se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds59se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pSEds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds510">
                        <option
                          <?php if ($datase['ds510se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds510se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds510se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds510se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds510se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds510se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pSEds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds511">
                        <option
                          <?php if ($datase['ds511se'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option
                          <?php if ($datase['ds511se'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option
                          <?php if ($datase['ds511se'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option
                          <?php if ($datase['ds511se'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option
                          <?php if ($datase['ds511se'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option
                          <?php if ($datase['ds511se'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
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
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pRAds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds51">
                        <option
                          <?php if ($datara['ds51ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds51ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds51ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds51ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds51ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds51ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pRAds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="RAds52">
                        <option
                          <?php if ($datara['ds52ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds52ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds52ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds52ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds52ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds52ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pRAds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="RAds53">
                        <option
                          <?php if ($datara['ds53ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds53ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds53ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds53ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds53ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds53ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pRAds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds54">
                        <option
                          <?php if ($datara['ds54ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds54ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds54ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds54ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds54ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds54ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pRAds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds55">
                        <option
                          <?php if ($datara['ds55ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds55ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds55ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds55ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds55ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds55ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pRAds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds56">
                        <option
                          <?php if ($datara['ds56ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds56ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds56ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds56ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds56ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds56ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pRAds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds57">
                        <option
                          <?php if ($datara['ds57ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds57ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds57ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds57ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds57ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds57ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pRAds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds58">
                        <option
                          <?php if ($datara['ds58ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds58ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds58ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds58ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds58ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds58ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pRAds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds59">
                        <option
                          <?php if ($datara['ds59ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds59ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds59ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds59ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds59ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds59ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pRAds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds510">
                        <option
                          <?php if ($datara['ds510ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds510ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds510ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds510ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds510ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds510ra'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pRAds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds511">
                        <option
                          <?php if ($datara['ds511ra'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option
                          <?php if ($datara['ds511ra'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option
                          <?php if ($datara['ds511ra'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option
                          <?php if ($datara['ds511ra'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option
                          <?php if ($datara['ds511ra'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option
                          <?php if ($datara['ds511ra'] == "5"): ?>
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
                          <label class="control-label col-sm-6">DS5.1 | <?php echo $pGSMds51; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds51">
                        <option
                          <?php if ($datagsm['ds51gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds51gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds51gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds51gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds51gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds51gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>

                      </div>

                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.2 | <?php echo $pGSMds52; ?></label>
                         <div class="col-sm-4">
                        <select class="form-control" name="GSMds52">
                        <option
                          <?php if ($datagsm['ds52gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds52gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds52gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds52gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds52gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds52gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.3 | <?php echo $pGSMds53; ?></label>
                        <div class="col-sm-4">
                        <select class="form-control" name="GSMds53">
                        <option
                          <?php if ($datagsm['ds53gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds53gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds53gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds53gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds53gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds53gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.4 | <?php echo $pGSMds54; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds54">
                        <option
                          <?php if ($datagsm['ds54gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds54gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds54gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds54gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds54gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds54gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.5 | <?php echo $pGSMds55; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds55">
                        <option
                          <?php if ($datagsm['ds55gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds55gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds55gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds55gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds55gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds55gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                                                <div class="form-group">
                          <label class="control-label col-sm-6">DS5.6 | <?php echo $pGSMds56; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds56">
                        <option
                          <?php if ($datagsm['ds56gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds56gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds56gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds56gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds56gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds56gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.7 | <?php echo $pGSMds57; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds57">
                        <option
                          <?php if ($datagsm['ds57gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds57gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds57gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds57gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds57gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds57gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.8 | <?php echo $pGSMds58; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds58">
                        <option
                          <?php if ($datagsm['ds58gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds58gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds58gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds58gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds58gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds58gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.9 | <?php echo $pGSMds59; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds59">
                        <option
                          <?php if ($datagsm['ds59gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds59gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds59gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds59gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds59gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds59gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.10 | <?php echo $pGSMds510; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds510">
                        <option
                          <?php if ($datagsm['ds510gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds510gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds510gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds510gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds510gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds510gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS5.11 | <?php echo $pGSMds511; ?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds511">
                        <option
                          <?php if ($datagsm['ds511gsm'] == "0"): ?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option
                          <?php if ($datagsm['ds511gsm'] == "1"): ?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option
                          <?php if ($datagsm['ds511gsm'] == "2"): ?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option
                          <?php if ($datagsm['ds511gsm'] == "3"): ?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option
                          <?php if ($datagsm['ds511gsm'] == "4"): ?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option
                          <?php if ($datagsm['ds511gsm'] == "5"): ?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
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
