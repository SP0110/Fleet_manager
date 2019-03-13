<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">

  <center>
  <h1 class="display-4">STORE</h1>
</center>

</head>
<body>
<br><br><br>
<div class="form-inline justify-content-center">

    <div class="btn-group">
      <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log/search">
          <input class="form-control mr-3 w-15" type="text" name="name" placeholder="Search" aria-label="search">
      </form>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Sort
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Log/search">Alphabet</a>
    <a class="dropdown-item" href="#">Cost</a>
    <a class="dropdown-item" href="#">running low</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>  &nbsp
       <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log/addspare">
          <button type="submit" class="btn btn-info " >Add</button>
       </form>
    </div>

</div>
<br>
<table class="table table-bordered ">
  <thead class="thead-dark">
  <tr>
    <th scope="col" style="text-align:center">ID</th>
    <th scope="col" style="text-align:center" >SPARE</th>
    <th scope="col" style="text-align:center">BRAND</th>
    <th scope="col" style="text-align:center" >COST</th>
    <th scope="col" style="text-align:center">QUANTITY</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ( $a->result() as $row ) {?>
    <tr>
      <td><?php echo $row->id;?></td>
      <td><?php echo $row->spare;?></td>
      <td><?php echo $row->brand;?></td>
      <td><?php echo $row->cost;?></td>
      <form  method="POST" action="<?php echo base_url()?>index.php/Log/edit/<?php echo $row->id;?>" class="form-inline  vertical-center">
          <td style="text-align:center";>
            <?php echo $row->quantity;?>
            <button type="submit" style="float:right;"  class="btn btn-info"><i class="far fa-edit"></i></button>
          </td>
     </form>
    </tr>
  <?php } ?>
  </tbody>
</table>



<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
</body>

</html>
