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
<form action="<?php echo base_url(); ?>index.php/Log/store_index1">
<div class="row">
  <div class="col-md-4">     <center>  <h1 class="display-4" style="color:#138496;">Spare Categories</h1> </center>
</div>
  <div class="col-md-4 offset-md-4 display-4"><button class="btn btn-info">search</button></div>
</div>
<div class= "container"><div class="row justify-content-center"><div class="col-md-12 text-center line">&nbsp;
</div>
 </div>
 </div>
<br><br>
</div>
</form>
<div class="container">

  <div class="row">
    <div class="col">
      <button class="btn btn-info">Engine Assemblly</button><br>
      <button class="btn btn-info">Clutch</button><br>
      <button class="btn btn-info">Gear Box</button>
    </div>
    <div class="col">
      <button class="btn btn-info">Nozzles</button><br>
      <button class="btn btn-info">Rear Axle</button><br>
      <button class="btn btn-info">Front Axle</button>
    </div>
    <div class="col">
      <button class="btn btn-info">Coolant Oil</button><br>
      <button class="btn btn-info">Steering Box</button><br>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
