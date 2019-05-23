<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
  <script>

  $(document).ready(function() {
$("#bal").attr('disabled','disabled');
$("#form").keyup(function()
{
  $"#submit").attr('disabled','disabled');
  var status=$(#status);
  if(status=="paid")
  {
    $("#bal").removeAttr('disabled');
    $("#bal").css({
      "cursor":"pointer","box-shadow":"1px 0ppx 6px #333"
    });
  }
}
})
$("#bal").click(function()
{
  $("#bal").css(
    {
        "cursor":"default","box-shadow":"none"
    });
    });
  </script>


</head>
<body>

 <div class="jumbotran vertical-center">
  <div class="container " role="main">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title w-100 font-weight-bold">Student</h1>
      </div>
      <div class="modal-body mx-4">

    <form  method="POST" action="<?php echo base_url(); ?>index.php/Log2/add_stud_db" >
  <center>  <?php echo $this->session->flashdata("error");?> </center>
    <div class="mb-4 ">

      <label for="s" ><b>Name</b></label>
      <input id="s" type="text"   name="name"  class="form-control " />
  </div>
  <div class="mb-4 ">

    <label for="s" ><b>Roll Number</b></label>
    <input id="s" type="text"   name="roll_no"  class="form-control " />
</div>
  <div class="mb-4 ">

    <label for="s" ><b>Year</b></label>
    <input id="s" type="text" name="year"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Department</b></label>
  <select id="s" placeholder="select dept."  name="department" class="form-control">
    <option>CSE</option>
    <option>MECH</option>
    <option>ECE</option>
    <option>IT</option>
    <option>CHEMICAL</option>
    <option>BIO-MED</option>

  </select>
</div>
<div class="mb-4 ">

  <label for="s" ><b>Bus Number</b></label>
  <input id="s" type="text" placeholder=""  name="bus_no"  class="form-control " />
</div>
<div class="mb-4 ">
  <label for="inputState"><b>Boarding Point</b></label>
  <select id="inputState"   name="board_pt" class="form-control">
    <option selected>Annanagar</option>
    <option>Goripalayam</option>
    <option>arupukotai</option>

  </select>

</div>
<div class="mb-4 ">

  <label for="s" ><b>Fees</b></label>
  <input id="s" type="text" placeholder=""  name="fees"  class="form-control " />
</div>
<div class="mb-4 ">

  <label for="s" ><b>Bill Number</b></label>
  <input id="s" type="text" placeholder="" value-"SAT"  name="bill_no"  class="form-control " />
</div>


<div class="mb-4 ">

  <label for="s" ><b>Status</b></label>
  <select id="S"   name="status" class="form-control">
    <option selected>not paid</option>
    <option>paid</option>
  </select>
</div>

<div class="mb-4">
  <label for='s'><b>Balance</b></label>
  <input id="bal" type="text" placeholder=""  name="bill_no"  class="form-control " />



   <div class="modal-footer justify-content-center">
  	   <button type="submit" class="btn btn-info btn-block">Add</button>
  </div>
</div>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>
</html>
