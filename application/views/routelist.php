<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
  <style>
  .line{
  background-color:#138496; font-size: 1px;}
  </style>
</head>
<body>
<br>
<form>
<div class="row">
  <div class="col-md-4">     <center>  <h1 class="display-4" style="color:#138496;">Spare Categories</h1> </center>
</div>
  <div class="col-md-4 offset-md-4 display-4" value="search"><button formaction="<?php echo base_url(); ?>index.php/Log/store_index1" name="search" class="btn btn-info">search</button>
  <button class="btn btn-info" formaction="<?php echo base_url(); ?>index.php/Log/addspare" name="add" value="add">Add</button></div>

</div>
<div class= "container"><div class="row justify-content-center"><div class="col-md-12 text-center line">&nbsp;
</div>
 </div>
 </div>
<br><br>
</div>
</form>
<div class="container">
<form>
  <div class="row">
    <div class="col">
      <button formaction="<?php echo base_url(); ?>index.php/Log2/routewise/anupanadi" class="btn btn-info">anupanadi</button><br><br>

  </div>
</div>
</form>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
