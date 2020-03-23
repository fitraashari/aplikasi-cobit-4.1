<?php
include "koneksi.php";
$kd_user = $_GET['kd_user'];
 $tampil=mysqli_query($conn,"SELECT * from user where kd_user='$kd_user'");
$data=mysqli_fetch_assoc($tampil);
?>

        <div class="page-head">
          <h2 class="page-head-title">Edit User</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">User</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">User Form<span class="panel-subtitle">Form untuk Mengedit Data User</span></div>
                <div class="panel-body">
                  <form action="up_user.php" method="post" data-parsley-validate="" novalidate="">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" name="nm_user" parsley-trigger="change" required="" placeholder="Enter Nama User" autocomplete="off" class="form-control" value="<?php echo $data['nama_user'];?>">
                    </div>
                  <div class="form-group">
                      <label class="form-group">Jenis Kelamin</label>                      
                        <select name="jenkel" class="form-control">
                                                    <option value="Laki-Laki" 
                          <?php if ($data['jenkel'] == "Laki-laki"){ 
                            echo " Selected";
                            }?>
                          >Laki-laki</option>
                                                    <option value="Perempuan" 
                          <?php if ($data['jenkel'] == "Perempuan"){ 
                            echo " Selected";
                            }?>
                          >Perempuan</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Username</label> <input type="text" name="usr" parsley-trigger="change" disabled="" placeholder="Enter username" autocomplete="off" class="form-control" value="<?php echo $data['kd_user'];?>">
                      <input type="hidden" name="nick" parsley-trigger="change" required="" placeholder="Enter username" autocomplete="off" class="form-control" value="<?php echo $data['kd_user'];?>">
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control" value="<?php echo $data['email'];?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input id="pass1"  name="password" type="password" placeholder="Password" class="form-control">
                      *kosongkan jika tidak ingin merubah Password
                    </div>
                  <div class="form-group">
                      <label class="form-group">Type User</label>                      
                        <select name="lvl" class="form-control">
                          <option value="admin" 
                          <?php if ($data['lvl'] == "admin"){ 
                            echo " Selected";
                            }?>
                          >Admin</option>
                          <option value="pegawai" 
                          <?php if ($data['lvl'] == "pegawai"){ 
                            echo " Selected";
                            }?>
                          >Pegawai</option>
                          <option value="mahasiswa" 
                          <?php if ($data['lvl'] == "mahasiswa"){ 
                            echo " Selected";
                            }?>
                          >Mahasiswa</option>
                        </select>
                      </div>
                    <p class="text-right">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                   </p>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
