

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/faw/css/all.css">

  <center>
  <h1 class="display-4">STUDENTS</h1>
</center>

</head>


<body>
<br><br><br>
<div class="form-inline justify-content-center">

    <div class="btn-group">
      <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log2/search">
          <input class="form-control mr-3 w-15" type="text" name="name" placeholder="Search" aria-label="search">
      </form>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

    <div class="btn-group">
  <button type="button" class="btn btn-info">Sort</button>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Tablet</a></li>
    <li><a href="#">Smartphone</a></li>
  </ul>
</div>

</div>  &nbsp
       <form class="form-inline justify-content-center" method="post" action="<?php echo base_url(); ?>index.php/Log2/addstud">
          <button type="submit" class="btn btn-info " >Add</button>
       </form>
    </div>

</div>
<br>
<table class="table table-bordered ">
  <thead class="thead-dark">
  <tr>
    <th scope="col" style="text-align:center">NAME</th>
    <th scope="col" style="text-align:center" >ROLL NO</th>
    <th scope="col" style="text-align:center">YEAR</th>
    <th scope="col" style="text-align:center" >DEPARTMENT</th>
    <th scope="col" style="text-align:center">BUS NO</th>
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
</table><nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>

</html>
