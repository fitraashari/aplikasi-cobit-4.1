<?php
include 'koneksi.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Users</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">List</a></li>
            <li class="active">Users</li>
          </ol>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Users
                  
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Nama User</th>
                        <th>Jenis Kelamin</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from user");
while ($data=mysqli_fetch_assoc($tampil))
{
 $kd_user  = $data['kd_user'];
    $password  = "*********";
    $email  = $data['email'];
    $nama_user  = $data['nama_user'];
    $jenkel  = $data['jenkel'];
    $lvl  = $data['lvl'];
  
  echo "<tr><td>$kd_user</td><td>$password</td><td>$email</td><td>$nama_user</td><td>$jenkel</td><td>$lvl</td><td><div class='btn-group btn-hspace'>
                      <button type='button' data-toggle='dropdown' class='btn btn-primary dropdown-toggle'><i class='icon icon-left mdi mdi-globe'></i> Action <span class='icon-dropdown mdi mdi-chevron-down'></span></button>
                      <ul role='menu' class='dropdown-menu'>
                      <li><a href='index.php?page=edit_user&kd_user=$kd_user'><i class='icon icon-left mdi mdi-edit'></i>Edit</a></li>
                        <li><a href='delete.php?kd=$kd_user&tabel=user'><i class='icon icon-left mdi mdi-delete'></i>Delete</a></li>
                        </ul>
                    </div></td></tr>";
}
?>
          </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>          
      </div>
