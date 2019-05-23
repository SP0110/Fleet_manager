

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
  <h1 class="display-4">STORE</h1>
</center>

</head>


<body>
<br><br><br>
<div class="form-inline justify-content-center">

     &nbsp
       <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log/addspare">
          <button type="submit" class="btn btn-info " >Add</button>
       </form>
    </div>

</div>
<br>
<table id="studentdata" class="table table-bordered ">
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

          <td style="text-align:center";>
            <?php echo $row->quantity;?>
            <div>
              <form>
            <button type="submit" style="float:right;"  formaction="<?php echo base_url()?>index.php/Log/edit/<?php echo $row->id;?>" class="btn btn-info"><i class="far fa-edit"></i></button>

            <button type="submit" style="float:right;"  formaction="<?php echo base_url()?>index.php/Log/consume/<?php echo $row->id;?>" class="btn btn-info"><i class="fas fa-arrow-circle-down"></i></button>
          </div>
        </form>
          </td>
        </tr>
  <?php } ?>
  </tbody>
</table>


</body>

</html>
