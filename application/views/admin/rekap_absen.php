<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>admin_senior/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rekaptulasi Absen
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>admin_senior/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>admin_senior/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>admin_senior/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="<?php echo base_url(); ?>admin" class="simple-text logo-normal">
        Admin UKM SENIOR
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li>
            <a href="<?php echo base_url(); ?>admin">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/kta">
              <i class="nc-icon nc-badge"></i>
              <p>KTA</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/sop">
              <i class="nc-icon nc-paper"></i>
              <p>SOP</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/ad_art">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>AD/ART</p>
            </a>
          </li>
          <li class="active">
            <a href="<?php echo base_url(); ?>admin/rekap">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Rekaptulasi Absen</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/anggota">
              <i class="nc-icon nc-tile-56"></i>
              <p>Database Keanggotaan</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>admin/profile">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Rekaptulasi Absen</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Musik</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Tari</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Voli</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Bulutangkis</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Tenis Meja</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Rekap Absen UK Basket
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        NAMA
                      </th>
                      <th>
                        HADIR
                      </th>
                      <th>
                        IZIN
                      </th>
                      <th>
                        SAKIT
                      </th>
                      <th>
                        TANPA KETERANGAN
                      </th>
                      <th>
                        PENTAS
                      </th>
                      <th>
                        PERSENTASE
                      </th>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td>
                          SARAH
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          4
                        </td>
                        <td>
                          20
                        </td>
                        <td>
                          100%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.instagram.com/ukmsenior_pnup/" target="_blank">Instagram</a></li>
                <li><a href="#" target="_blank">e-mail</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, UKM SENIOR <i class="fa fa-heart heart"></i> Please Your Smile
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>admin_senior/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>admin_senior/assets/demo/demo.js"></script>
</body>

</html>