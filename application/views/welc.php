<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark p-1 ">
  <a class="navbar-brand text-white" href="#">SIT TRANSPORT</a>

  <div class="collapse navbar-collapse justify-content-end id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <?php    echo '<label><a class="nav-link text-white"  href="'.base_url().'index.php/Log/enter">Home</a></label>';?>
      </li>
      <li class="nav-item">
        <?php    echo '<label><a class="nav-link text-white"  href="'.base_url().'index.php/Log/store_index">Store</a></label>';?>
      </li>
      <li class="nav-item">
        <?php    echo '<label><a class="nav-link text-white"  href="'.base_url().'index.php/Log/profiles">Profiles</a></label>';?>
      </li>
      <li class="nav-item">
        <?php    echo '<label><a class="nav-link text-white"  href="'.base_url().'index.php/Log2/stud_db">Students</a></label>';?>
      </li>
      <li class="nav-item">
        <?php    echo '<label><a class="nav-link text-white"  href="'.base_url().'index.php/Log/logout">Logout</a></label>';?>
      </li>
    </ul>
  </div>
</nav>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

</body>

</html>
