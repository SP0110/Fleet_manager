

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/datatables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">



<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/datatables/datatables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function() {
      $('#studentdata').DataTable( {
          columnDefs: [ {
              targets: [ 0 ],
              orderData: [ 0, 1 ]
          }, {
              targets: [ 1 ],
              orderData: [ 1, 0 ]
          }, {
              targets: [ 4 ],
              orderData: [ 4, 0 ]
          } ]
      } );
  } );
  </script>

  <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>

  <center>
  <h1 class="display-4">STUDENTS</h1>
</center>

</head>


<body>
<br><br><br>
<div class="form-inline justify-content-center">


       <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log2/addstud">
          <button type="submit" class="btn btn-info " >Add</button>
       </form>
    </div>

</div>
<br>
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


</body>

</html>
