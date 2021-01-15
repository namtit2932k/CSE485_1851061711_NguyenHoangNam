<?php 
include('header.php');
$id=$_GET['id'];
$sql="select * from BLOOD_DONOR where BD_ID=$id";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($res);
?>
<title>Information</title>
<div class="container-fruid" align="center">
<div class="form-group col-4" align="left">
<label for="">Id</label>
  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[0]; ?>">
  <label for="">Name</label>
  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[1]; ?>">
  <label for="">Sex</label>
  <input type="text" class="form-control" name="sex" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[2]; ?>">
  <label for="">Age</label>
  <input type="text" class="form-control" name="age" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[3]; ?>">
  <label for="">Blood Group</label>
  <input type="text" class="form-control" name="group" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[4]; ?>">
  <label for="">Reg Date</label>
  <input type="date" class="form-control" name="date" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[5]; ?>">
  <label for="">Phone</label>
  <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[6]; ?>">
</div>
</div>