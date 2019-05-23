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

<h1>fees pending</h1> <br>


<table id="studentdata" class="display table table-bordered ">
  <thead class="thead-dark">
  <tr>
    <th scope="col" style="text-align:center">NAME</th>
    <th scope="col" style="text-align:center" >ROLL NO</th>
    <th scope="col" style="text-align:center">YEAR</th>
    <th scope="col" style="text-align:center" >DEPARTMENT</th>
    <th scope="col" style="text-align:center">BUS NO</th>
    <th scope="col" style="text-align:center">BOARDING POINT</th>
    <th scope="col" style="text-align:center">FEES</th>
    <th scope="col" style="text-align:center">BILL NO</th>
    <th scope="col" style="text-align:center">STATUS</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ( $a->result() as $row ) {?>
    <tr>
      <td style="text-align:center"><?php echo $row->name;?></td>
      <td style="text-align:center"><?php echo $row->roll_no;?></td>
      <td style="text-align:center"><?php echo $row->year;?></td>
      <td style="text-align:center"><?php echo $row->department;?></td>
      <td style="text-align:center"><?php echo $row->bus_no;?></td>
      <td style="text-align:center"><?php echo $row->board_pt;?></td>
      <td style="text-align:center"><?php echo $row->fees;?></td>
      <td style="text-align:center"><?php echo $row->bill_no;?></td>
      <form  method="POST" action="<?php echo base_url()?>index.php/Log2/edit/<?php echo $row->id;?>" class="form-inline  vertical-center">
          <td style="text-align:center";>
            <?php echo $row->status;?>
            <button type="submit" style="float:right;"  class="btn btn-info"><i class="far fa-edit"></i></button>
          </td>
     </form>
    </tr>
  <?php } ?>
  </tbody>
</table>



  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>
