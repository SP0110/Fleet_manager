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
        <h1 class="modal-title w-100 font-weight-bold">Profile</h1>
      </div>
      <div class="modal-body mx-4">
<?php foreach ( $info->result() as $row ) {?>
    <form  method="POST" action="<?php echo base_url(); ?>index.php/Log2/update_stud/<?php echo $row->id;?>/<?php echo $row->year;?>" >
  <center>  <?php echo $this->session->flashdata("error");?> </center>
    <div class="mb-4 ">

      <label for="s" ><b>Name</b></label>
      <input id="s" type="text"   name="name"  value="<?php echo $row->name; ?>" class="form-control " />
  </div>
  <div class="mb-4 ">

    <label for="s" ><b>Roll Number</b></label>
    <input id="s" type="text"   name="roll_no"   value="<?php echo $row->roll_no; ?>" class="form-control " />
</div>
  <div class="mb-4 ">

    <label for="s" ><b>Year</b></label>
    <input id="s" type="text" name="year"   value="<?php echo $row->year; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Department</b></label>
  <input id="s" type="text"  name="department"   value="<?php echo $row->department; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Bus Number</b></label>
  <input id="s" type="text" placeholder=""  name="bus_no"  value="<?php echo $row->bus_no; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Boarding Point</b></label>
  <input id="s" type="text" placeholder=""  name="board_pt"  value="<?php echo $row->board_pt; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Fees</b></label>
  <input id="s" type="text" placeholder=""  name="fees"  value="<?php echo $row->fees; ?>"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Bill Number</b></label>
  <input id="s" type="text" placeholder=""  name="bill_no"  value="<?php echo $row->bill_no; ?>" class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Status</b></label>
  <input id="s" type="text" placeholder=""  name="status"  value="<?php echo $row->status; ?>" class="form-control " />
</div>



   <div class="modal-footer justify-content-center">
  	   <button type="submit" class="btn btn-info btn-block">Update</button>
  </div>

</form>
<?php }?>
</div>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
