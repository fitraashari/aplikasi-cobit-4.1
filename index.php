<?php
error_reporting(0);
include "cek.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Aplikasi Perhitungan COBIT</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
	  <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
	  <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-color-header be-color-header-danger be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name"><?php echo $_SESSION['nm_user']; ?></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $_SESSION['nm_user']; ?> [<?php echo $_SESSION['lvl']; ?>]</div>
                      
                    </div>
                  </li>
                  <?php
                  //<li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  ?>
                  <li><a href="logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Aplikasi Cobit</span></div>
            
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Main Menu</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li <?php if(! isset($_GET['page'])) echo "class='active'";?>><a href="index.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li><?php if($_SESSION['lvl'] == "admin"):?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Users</span></a>
                    <ul class="sub-menu">
                      <li <?php if($_GET["page"] === "form_user") echo "class='active'";?>><a href="index.php?page=form_user">Add</a>
                      </li>
                        <li <?php if($_GET["page"] === "user") echo "class='active'";?>><a href="index.php?page=user">List</a>
                      </li>
                    </ul>
                  </li><?php endif;?>
				  				 <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a>
                    <ul class="sub-menu">
                      <li <?php if($_GET["page"] === "form_ds1") echo "class='active'";?>><a href="index.php?page=form_ds1">Delivery and Support 1</a>
                      </li>
					  <li <?php if($_GET["page"] === "form_ds5") echo "class='active'";?>><a href="index.php?page=form_ds5">Delivery and Support 5</a>
                      </li>
					  <li <?php if($_GET["page"] === "form_ds10") echo "class='active'";?>><a href="index.php?page=form_ds10">Delivery and Support 10</a>
                      </li>
                    </ul>
                  </li><?php if($_SESSION['lvl'] == "admin"):?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a>
                    <ul class="sub-menu">
                      <li <?php if($_GET["page"] === "ds1") echo "class='active'";?>><a href="index.php?page=ds1">Delivery and Support 1</a>
                      </li>
					  <li <?php if($_GET["page"] === "ds5") echo "class='active'";?>><a href="index.php?page=ds5">Delivery and Support 5</a>
                      </li>
					  <li <?php if($_GET["page"] === "ds10") echo "class='active'";?>><a href="index.php?page=ds10">Delivery and Support 10</a>
                      </li>
					  
                    </ul>
                  </li>

				   <li class="parent"><a href="#"><i class="icon mdi mdi-chart-donut"></i><span>Charts</span></a>
                    <ul class="sub-menu">
                      <li <?php if($_GET["page"] === "grafik_ds1") echo "class='active'";?>><a href="index.php?page=grafik_ds1">Delivery and Support 1</a>
                      </li>
                      <li <?php if($_GET["page"] === "grafik_ds5") echo "class='active'";?>><a href="index.php?page=grafik_ds5">Delivery and Support 5</a>
                      </li>
                      <li <?php if($_GET["page"] === "grafik_ds10") echo "class='active'";?>><a href="index.php?page=grafik_ds10">Delivery and Support 10</a>
                      </li>
                    </ul>
                  </li>
                  <li class="divider"><span class="mdi mdi-code"></span> Ⓒ Fitra Ashari</li>
                    </ul>
                  </li><?php endif;?>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">70%</span><span class="name">This Project</span></div>
            <div class="progress">
              <div style="width: 70%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">

		
<?php
                if (!isset($_GET['page']))
    {
        if ($_SESSION['lvl'] == 'admin'){
          include "home.php";
        }
        else{
          include "home2.php";
        }
    } else {    
        $page = $_GET['page'];  
        switch($page)
        {
            case 'ds1':
                include "v_ds1.php";
                break;
            case 'ds5':
                include "v_ds5.php";
                break;                  
			case 'ds10':
                include "v_ds10.php";
                break; 
			case 'form_ds1':
                include "f_ds1.php";
                break; 
			case 'form_ds5':
                include "f_ds5.php";
                break; 				
			case 'form_ds10':
                include "f_ds10.php";
                break; 
                case 'grafik_ds1':
                include "graf_ds1.php";
                break; 
                case 'grafik_ds5':
                include "graf_ds5.php";
                break; 
                case 'grafik_ds10':
                include "graf_ds10.php";
                break; 
        case 'form_user':
                include "f_user.php";
                break;    
        case 'user':
                include "v_user.php";
                break;
                case 'edit_user':
                include "e_user.php";
                break;      
        }
    }
                
                ?>
		
		<div id="full-success" class="modal-container modal-full-color modal-full-color-success modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-check"></span>
                         <?php if($_GET['act'] == "insert"):?>
						  <h3>Berhasil Tersimpan</h3>
                          <p>Data yang anda masukan Berhasil Tersimpan.<br>Terimakasih telah mengisi formulir.</p>
						  <?php endif;?>
						   <?php if($_GET['act'] == "delete"):?>
						  <h3>Berhasil Di Hapus</h3>
                          <p>Data yang anda pilih Berhasil Dihapus.</p>
						  <?php endif;?>
                          <div class="xs-mt-50">
                          <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">OK</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
				  <div id="full-danger" class="modal-container modal-full-color modal-full-color-danger modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-close-circle-o"></span>
                         <?php if($_GET['act'] == "insert"):?>
						  <h3>Gagal Tersimpan</h3>
                          <p>Data yang anda masukan Gagal Tersimpan.</p>
						  <?php endif;?>
						   <?php if($_GET['act'] == "delete"):?>
						  <h3>Gagal Di Hapus</h3>
                          <p>Data yang anda pilih Gagal Dihapus.</p>
						  <?php endif;?>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">OK</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
				  <div class="modal-overlay"></div>
				  
				  
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/app-tables-datatables.js" type="text/javascript"></script>
	    <script src="assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>

    <script src="assets/js/app-form-wizard.js" type="text/javascript"></script>
	    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
	<script src="assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>
	    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
	$.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show',
      });
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
		App.wizard();
		App.formElements();
		App.dashboard();
      });
	$(document).ready(function() {
		$('table.display').DataTable();
    $('form').parsley();
	} );
	//$("#full-success").niftyModal("show");
    </script>
	<?php if($_GET['status'] == "success"):?>
  <script> $("#full-success").niftyModal("show");</script>
<?php endif;?>
<?php if($_GET['status'] == "failed"):?>
  <script> $("#full-danger").niftyModal("show");</script>
<?php endif;?>
  </body>
</html>