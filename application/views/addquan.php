<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="close" data-dismiss="modal">close</button>
           <div class="modal-body">
                   <input type="text" name="quanity" placeholder="enter the quanity" class="form-control"/>
                   <button type="submit" class="btn btn-info btn-block">Add</button>
           </div>
         </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
</body>
</html>
