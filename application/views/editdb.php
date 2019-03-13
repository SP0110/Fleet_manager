<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equip="refresh" content="1"/>
  <link rel="stylesheet" type="text/css" /href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
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
  <?php foreach ( $info->result() as $row ) {?>
    <form  method="POST" action="<?php echo base_url()?>index.php/Log/update_spare/<?php echo $row->id;?>" >
  <center>  <?php echo $this->session->flashdata("error");?> </center>
    <div class="mb-4 ">

      <label for="s" ><b>Name</b></label>
      <input id="s" type="text" placeholder="Spare Name"  value="<?php echo $row->spare; ?>" name="name"  class="form-control " />
  </div>
  <div class="mb-4 ">

    <label for="s" ><b>Brand</b></label>
    <input id="s" type="text" placeholder="Spare Brand"  value="<?php echo $row->brand; ?>" name="brand"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Cost</b></label>
  <input id="s" type="text" placeholder=""  name="cost" value="<?php echo $row->cost; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Quantity</b></label>
  <input id="s" type="text" placeholder=""  value="<?php echo $row->quantity; ?>" name="quantity"  class="form-control " />
</div>


   <div class="modal-footer justify-content-center">
  	   <button type="submit" class="btn btn-info btn-block">Update</button>
  </div>
</form>
    <?php } ?>
</div>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
