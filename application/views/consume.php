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
    <form  method="POST" action="" >
  <center>  <?php echo $this->session->flashdata("error");?> </center>
    <div class="mb-4 ">

      <label for="s" ><b>BUS NO.</b></label>
      <select>
    <option value="Select">Select</option>}

  </select> &nbsp &nbsp &nbsp
   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <label for="s" ><b>Quantity</b></label>
  <select>
<option value="Select">Select</option>}

</select>
  </div>



   <div class="modal-footer justify-content-center">
  	   <button type="submit" class="btn btn-info btn-block">Use</button>
  </div>
</form>
    <?php } ?>
</div>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
