<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <center>
  <h1>VEHICLE PROFILES</h1>
  </center>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
</head>

<body>

  <form  method="POST" action="<?php echo base_url(); ?>index.php/Log/profilefetch" class="form-inline">

&nbsp&nbsp&nbsp&nbsp&nbsp
    <input class="form-control active-cyan" style="background-color: rgba(245, 245, 245, 0.5);" style=" width:700px"  align="right" name="busno" type="text" placeholder="Enter Bus number">
    <button class="btn btn-dark" type="submit">Enter</button><br><br><br>
  </form>
  <form> &nbsp
      <button formaction="<?php echo base_url(); ?>index.php/Log/" class="btn btn-info">Vehicle List</button><br><br> &nbsp
        <button formaction="<?php echo base_url(); ?>index.php/Log/" class="btn btn-info">Assinments</button><br><br> &nbsp
          <button formaction="<?php echo base_url(); ?>index.php/Log/" class="btn btn-info">Maintenance</button><br><br> &nbsp
            <button formaction="<?php echo base_url(); ?>index.php/Log/service" class="btn btn-info">service</button><br><br> &nbsp
  </form>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
