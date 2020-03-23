  <?php
include 'koneksi.php';
session_start();
  ?>

        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="panel panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Selamat Datang <?php echo $_SESSION['nm_user']; ?><span class="panel-subtitle">Anda Login Sebagai <?php echo $_SESSION['lvl']; ?></span></div>
                <div class="panel-body">
                  <p>Kuisioner ini adalah bagian dari penelitian skripsi mahasiswa strata satu (S1) Program Studi Sistem Informasi STMIK Sinar Nusantara, yang bertujuan untuk mendapatkan data dan opini mengenai sistem SIAKAD yang kini sudah diterapkan di STIKES AISYIYAH Surakarta .</p>
                  <p>Kuisioner ini dikembangkan dari standar TI Internasional COBIT 4.1 (Control Objective for Information and Related Technology) yaitu Domain Deliver & Support. Untuk itu mohon kiranya Saudara/Saudari dapat memberikan opini dan pendapatnya akan pertanyaan-pertanyaan yang akan kami berikan dalam kuesioner ini.</p>
                                    <p>Silahkan Mengisi Formulir Kuesioner Menggunakan Menu Di Samping</p>
                </div>
              </div>
            </div>

          </div>
          
              </div>
