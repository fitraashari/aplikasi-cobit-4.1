        <div class="page-head">
          <h2 class="page-head-title">Add User</h2>
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
                <div class="panel-heading panel-heading-divider">User Form<span class="panel-subtitle">Form untuk menambah User</span></div>
                <div class="panel-body">
                  <form action="sv_user.php" method="post" data-parsley-validate="" novalidate="">
                    <div class="form-group">
                      <label>Nama User</label>
                      <input type="text" name="nm_user" parsley-trigger="change" required="" placeholder="Enter Nama User" autocomplete="off" class="form-control">
                    </div>
                  <div class="form-group">
                      <label class="form-group">Jenis Kelamin</label>                      
                        <select name="jenkel" class="form-control">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter username" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input id="pass1"  name="password" type="password" placeholder="Password" required="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                  <div class="form-group">
                      <label class="form-group">Type User</label>                      
                        <select name="lvl" class="form-control">
                        <option value="Admin">Admin</option>
                          <option value="pegawai">Pegawai</option>
                          <option value="mahasiswa">Mahasiswa</option>
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
