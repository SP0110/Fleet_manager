<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <center>
  <h1 class="display-4">VEHICLE PROFILES</h1>
  </center>
  <style>
.vertical-center {  min-height: 60vh; }
body
{
  background-image: url('<?php echo base_url(); ?>image/transport.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
</head>

<body>

  <form  method="POST" action="<?php echo base_url(); ?>index.php/Log/profilefetch" class="form-inline  justify-content-center vertical-center">
    <input class="form-control active-cyan" style="background-color: rgba(245, 245, 245, 0.5);" style=" width:700px"  name="busno" type="text" placeholder="Enter Bus number">
    <button class="btn btn-dark" type="submit">Enter</button>
  </form>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
