<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
<style>
.center{
  margin:auto;
  width:100%;
  padding: 60px;
  text-align: center;

}
.input-group-addon{
  text-align: center;
  padding: 6px 4px 3px 3px;
}

</style>
</head>

<body>

<div class="container mx-auto center " role="main">


<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h1 class="modal-title w-100 font-weight-bold">Login</h1>
    </div>
    <div class="modal-body mx-4">

  <form  method="POST" action="<?php echo base_url(); ?>index.php/Log/login_validation" >
<center>  <?php echo $this->session->flashdata("error");?> </center>
  <div class="mb-4 ">
    <div class="input-group">
    <span class="input-group-addon">

      <i class="fa fa-user" style="font-size:22px;" ></i>

  </span>
<input type="text" placeholder="Username"  name="username"  class="form-control " />
</div>
       <?php echo form_error('username'); ?>
</div>

  <div class="mb-4">
    <div class="input-group">
      <span class="input-group-addon">
          <i class="fas fa-key" style="font-size:20px;"></i>
      </span>
        <input   type="password" placeholder="Password" name="password" class="form-control" />
      </div>
        <?php echo form_error('password'); ?>
  </div>
</div>

 <div class="modal-footer justify-content-center">
	   <button type="submit" class="btn btn-info btn-block">Sign in</button>
</div>
<?php     echo '<label><a href="'.base_url().'index.php/Log/logout">forgot password ?</a></label>';     ?>
</div>

  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

</form>
</div>
</div>

</div>
</body>
</html>
</html>
