
<html>
<head>
<title>My Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">


</head>
<body>
<center>

<?php

echo '<h2>Welcome '.$this->session->userdata('username').'</h2>';


?>


</center>
</p>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>

</body>
</html>
