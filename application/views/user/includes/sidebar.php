<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('questions/QuestionsController'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Q & A</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/User_profile'); ?>">
      <i class="fas fa-fw fa-user"></i>
      <span>My Profile</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/Change_password'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Change Password</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/AboutUs'); ?>">
      <i class="fas fa-fw fa-address-card"></i>
      <span>About Us</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('user/Login/logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Log Out</span></a>
  </li>

</ul>