<?php  
include('header.php');
$error=$_GET['error'];
?>
<title>Error</title>
<div class="container">
<div class="form-group" align="center">
<h1><?php echo "Lỗi"; ?></h1>
  <h1><?php echo $error; ?></h1>
</div>
</div>