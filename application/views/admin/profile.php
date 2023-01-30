<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>admin_senior/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MY Account
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
          <li>
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
          <li  class="active">
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
            <a class="navbar-brand" href="javascript:;">Akun</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg" alt="...">
                    <h5 class="title">Nama Kamu</h5>
                  </a>
                  <p class="description">
                    Pentas berapa dan uk nya
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Akun</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" disabled="" placeholder="Nama Lengkap" value="Sarah.">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Unit Kegiatan</label>
                        <input type="text" class="form-control" placeholder="Unit Kegiatan" value="Tenis Meja">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">PENTAS</label>
                        <input type="email" class="form-control" placeholder="20">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>NO.HP</label>
                        <input type="text" class="form-control" placeholder="Company" value="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" placeholder="email" value="@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat Domisili</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Jalan Kebahagiaan Kec.Damai">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" placeholder="Kota" value="Cinta">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" placeholder="Kabupaten" value="Damai">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="number" class="form-control" placeholder="12345678">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Motto</label>
                        <textarea class="form-control textarea">Life Goes On</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
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
                <li><a href="#" target="_blank">Instagram</a></li>
                <li><a href="#" target="_blank">Email</a></li>
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