<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>admin_senior/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>admin_senior/assets/img/UKM.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Database Keanggotaan
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
          <li class="active">
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
            <a class="navbar-brand" href="javascript:;">Database Keanggotaan</a>
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
                <h4 class="card-title">Edit Anggota</h4>
              </div>
              <div class="col-12">
                      <br>
                      <form action="<?php echo base_url(); ?>admin/editAnggota_aksi" method="post" enctype="multipart/form-data">
        
                      <div class="row">
                        <input type="hidden" name="id_anggota" value="<?php echo $anggota[0]['id_anggota']; ?>">
                        <div class="col-12 col-md-6">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control rounded" value="<?php echo $anggota[0]['nama_lengkap']; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Keterangan:</label>
                            <input type="text" name="keterangan" class="form-control rounded" value="<?php echo $anggota[0]['keterangan']; ?>">
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>Status Anggota:</label>
                            <select class="form-control rounded" name="status_anggota" value="<?php echo $anggota[0]['status_anggota']; ?>">
                              <option value="Aktif">Aktif</option>
                              <option value="Purna">Purna</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>No HP:</label>
                            <input type="text" name="hp" class="form-control rounded" value="<?php echo $anggota[0]['no_hp']; ?>">
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>Agama:</label>
                            <select class="form-control rounded" name="agama" value="<?php echo $anggota[0]['agama']; ?>">
                              <option value="Islam">Islam</option>
                              <option value="Protestan">Kristen Protestan</option>
                              <option value="Katolik">Kristen Katolik</option>
                              <option value="Budha">Buddha</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Kong">Konghucu</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>Jenis Kelamin:</label><br>
                            <select class="form-control rounded" name="jk"  value="<?php echo $anggota[0]['jenis_kelamin']; ?>">
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>UK:</label>
                            <select class="form-control rounded" name="uk"  value="<?php echo $anggota[0]['uk']; ?>">
                              <option value="Basket">Basket</option>
                              <option value="Tenis Meja">Tenis Meja</option>
                              <option value="Bulu Tangkis">Bulu Tangkis</option>
                              <option value="Voli">Voli</option>
                              <option value="Tari">Tari</option>
                              <option value="Musik">Musik</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>Periode:</label>
                            <input type="text" name="periode" class="form-control rounded" value="<?php echo $anggota[0]['periode']; ?>">
                        </div>
                        <div class="col-12 col-md-6"><br>
                            <label>Pentas:</label>
                            <input type="text" name="pentas" class="form-control rounded" value="<?php echo $anggota[0]['pentas']; ?>">
                        </div>
                      </div><br>
        
                        <button type="submit" class="btn btn-primary">Submit</button>
                  
                      </form>
                      <br>
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