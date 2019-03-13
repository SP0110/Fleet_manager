<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
</head>
<body>

 <div class="jumbotran vertical-center">
  <div class="container " role="main">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title w-100 font-weight-bold">Spare</h1>
      </div>
      <div class="modal-body mx-4">

    <form  method="POST" action="<?php echo base_url(); ?>index.php/Log/add_spare_db" >
  <center>  <?php echo $this->session->flashdata("error");?> </center>
    <div class="mb-4 ">

      <label for="s" ><b>Name</b></label>
      <input id="s" type="text" placeholder="Spare Name"  name="name"  class="form-control " />
  </div>
  <div class="mb-4 ">

    <label for="s" ><b>Brand</b></label>
    <input id="s" type="text" placeholder="Spare Brand"  name="brand"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Cost</b></label>
  <input id="s" type="text" placeholder=""  name="cost"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Quantity</b></label>
  <input id="s" type="text" placeholder=""  name="quantity"  class="form-control " />
</div>


   <div class="modal-footer justify-content-center">
  	   <button type="submit" class="btn btn-info btn-block">Add</button>
  </div>
</div>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
