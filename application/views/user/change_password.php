<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Change Password</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
  html {
    position: relative;
    min-height: 100%;
  }

  body {
    height: 100%;
  }

  #wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  #wrapper #content-wrapper {
    overflow-x: hidden;
    width: 100%;
    padding-top: 1rem;
    padding-bottom: 80px;
  }

  body.fixed-nav #content-wrapper {
    margin-top: 56px;
    padding-left: 90px;
  }

  body.fixed-nav.sidebar-toggled #content-wrapper {
    padding-left: 0;
  }

  @media (min-width: 768px) {
    body.fixed-nav #content-wrapper {
      padding-left: 225px;
    }

    body.fixed-nav.sidebar-toggled #content-wrapper {
      padding-left: 90px;
    }
  }

  .scroll-to-top {
    position: fixed;
    right: 15px;
    bottom: 15px;
    display: none;
    width: 50px;
    height: 50px;
    text-align: center;
    color: #fff;
    background: rgba(52, 58, 64, 0.5);
    line-height: 46px;
  }

  .scroll-to-top:focus,
  .scroll-to-top:hover {
    color: white;
  }

  .scroll-to-top:hover {
    background: #343a40;
  }

  .scroll-to-top i {
    font-weight: 800;
  }

  .smaller {
    font-size: 0.7rem;
  }

  .o-hidden {
    overflow: hidden !important;
  }

  .z-0 {
    z-index: 0;
  }

  .z-1 {
    z-index: 1;
  }

  .navbar-nav .form-inline .input-group {
    width: 100%;
  }

  .navbar-nav .nav-item.active .nav-link {
    color: #fff;
  }

  .navbar-nav .nav-item.dropdown .dropdown-toggle::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\f105';
    font-family: 'Font Awesome 5 Free';
  }

  .navbar-nav .nav-item.dropdown.show .dropdown-toggle::after {
    content: '\f107';
  }

  .navbar-nav .nav-item.dropdown.no-arrow .dropdown-toggle::after {
    display: none;
  }

  .navbar-nav .nav-item .nav-link:focus {
    outline: none;
  }

  .navbar-nav .nav-item .nav-link .badge {
    position: absolute;
    margin-left: 0.75rem;
    top: 0.3rem;
    font-weight: 400;
    font-size: 0.5rem;
  }

  @media (min-width: 768px) {
    .navbar-nav .form-inline .input-group {
      width: auto;
    }
  }

  .sidebar {
    width: 90px !important;
    background-color: #212529;
    min-height: calc(100vh - 56px);
  }

  .sidebar .nav-item:last-child {
    margin-bottom: 1rem;
  }

  .sidebar .nav-item .nav-link {
    text-align: center;
    padding: 0.75rem 1rem;
    width: 90px;
  }

  .sidebar .nav-item .nav-link span {
    font-size: 0.65rem;
    display: block;
  }

  .sidebar .nav-item .dropdown-menu {
    position: absolute !important;
    -webkit-transform: none !important;
    transform: none !important;
    left: calc(90px + 0.5rem) !important;
    margin: 0;
  }

  .sidebar .nav-item .dropdown-menu.dropup {
    bottom: 0;
    top: auto !important;
  }

  .sidebar .nav-item.dropdown .dropdown-toggle::after {
    display: none;
  }

  .sidebar .nav-item .nav-link {
    color: rgba(255, 255, 255, 0.5);
  }

  .sidebar .nav-item .nav-link:active,
  .sidebar .nav-item .nav-link:focus,
  .sidebar .nav-item .nav-link:hover {
    color: rgba(255, 255, 255, 0.75);
  }

  .sidebar.toggled {
    width: 0 !important;
    overflow: hidden;
  }

  @media (min-width: 768px) {
    .sidebar {
      width: 225px !important;
    }

    .sidebar .nav-item .nav-link {
      display: block;
      width: 100%;
      text-align: left;
      padding: 1rem;
      width: 225px;
    }

    .sidebar .nav-item .nav-link span {
      font-size: 1rem;
      display: inline;
    }

    .sidebar .nav-item .dropdown-menu {
      position: static !important;
      margin: 0 1rem;
      top: 0;
    }

    .sidebar .nav-item.dropdown .dropdown-toggle::after {
      display: block;
    }

    .sidebar.toggled {
      overflow: visible;
      width: 90px !important;
    }

    .sidebar.toggled .nav-item:last-child {
      margin-bottom: 1rem;
    }

    .sidebar.toggled .nav-item .nav-link {
      text-align: center;
      padding: 0.75rem 1rem;
      width: 90px;
    }

    .sidebar.toggled .nav-item .nav-link span {
      font-size: 0.65rem;
      display: block;
    }

    .sidebar.toggled .nav-item .dropdown-menu {
      position: absolute !important;
      -webkit-transform: none !important;
      transform: none !important;
      left: calc(90px + 0.5rem) !important;
      margin: 0;
    }

    .sidebar.toggled .nav-item .dropdown-menu.dropup {
      bottom: 0;
      top: auto !important;
    }

    .sidebar.toggled .nav-item.dropdown .dropdown-toggle::after {
      display: none;
    }
  }

  .sidebar.fixed-top {
    top: 56px;
    height: calc(100vh - 56px);
    overflow-y: auto;
  }

  .card-body-icon {
    position: absolute;
    z-index: 0;
    top: -1.25rem;
    right: -1rem;
    opacity: 0.4;
    font-size: 5rem;
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
  }

  @media (min-width: 576px) {
    .card-columns {
      -webkit-column-count: 1;
      column-count: 1;
    }
  }

  @media (min-width: 768px) {
    .card-columns {
      -webkit-column-count: 2;
      column-count: 2;
    }
  }

  @media (min-width: 1200px) {
    .card-columns {
      -webkit-column-count: 2;
      column-count: 2;
    }
  }

  :root {
    --input-padding-x: 0.75rem;
    --input-padding-y: 0.75rem;
  }

  .card-login {
    max-width: 25rem;
  }

  .card-register {
    max-width: 40rem;
  }

  .form-label-group {
    position: relative;
  }

  .form-label-group>input,
  .form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
    height: auto;
  }

  .form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    -webkit-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
  }

  .form-label-group input::-webkit-input-placeholder {
    color: transparent;
  }

  .form-label-group input:-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::-ms-input-placeholder {
    color: transparent;
  }

  .form-label-group input::placeholder {
    color: transparent;
  }

  .form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
  }

  .form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
  }

  footer.sticky-footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    right: 0;
    bottom: 0;
    width: calc(100% - 90px);
    height: 80px;
    background-color: #e9ecef;
  }

  footer.sticky-footer .copyright {
    line-height: 1;
    font-size: 0.8rem;
  }

  @media (min-width: 768px) {
    footer.sticky-footer {
      width: calc(100% - 225px);
    }
  }

  body.sidebar-toggled footer.sticky-footer {
    width: 100%;
  }

  @media (min-width: 768px) {
    body.sidebar-toggled footer.sticky-footer {
      width: calc(100% - 90px);
    }

  }
  </style>


</head>

<body id="page-top">

  <?php include APPPATH . 'views/user/includes/header.php'; ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include APPPATH . 'views/user/includes/sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
          </li>
          <li class="breadcrumb-item active">Change Password</li>
        </ol>

        <!-- Page Content -->
        <h1>Change Password</h1>
        <hr>
        <!---- Success Message ---->
        <?php if ($this->session->flashdata('success')) { ?>
        <p style="color:green; font-size:18px;">
          <?php echo $this->session->flashdata('success'); ?>
        </p>
      </div>
      <?php } ?>

      <!---- Error Message ---->
      <?php if ($this->session->flashdata('error')) { ?>
      <p style="color:red; font-size:18px;">
        <?php echo $this->session->flashdata('error'); ?>
      </p>
      <?php } ?>



      <?php echo form_open('user/Change_password'); ?>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <?php echo form_password(['name' => 'currentpassword', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('currentpassword')]); ?>
              <?php echo form_label('Current Password', 'currentpassword'); ?>
              <?php echo form_error('currentpassword', "<div style='color:red'>", "</div>"); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('password')]); ?>
              <?php echo form_label('New Password', 'password'); ?>
              <?php echo form_error('password', "<div style='color:red'>", "</div>"); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <?php echo form_password(['name' => 'confirmpassword', 'id' => 'confirmpassword', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => set_value('confirmpassword')]); ?>
              <?php echo form_label('Confirm Password', 'confirmpassword'); ?>
              <?php echo form_error('confirmpassword', "<div style='color:red'>", "</div>"); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <?php echo form_submit(['name' => 'chnagepwd', 'value' => 'Change', 'class' => 'btn btn-primary btn-block']); ?>
          </div>
        </div>
      </div>
      <?php echo form_close(); ?>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php include APPPATH . 'views/user/includes/footer.php'; ?>

  </div>


  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>

</body>

</html>