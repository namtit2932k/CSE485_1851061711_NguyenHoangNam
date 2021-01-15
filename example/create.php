<?php 
include('header.php');
?>
<title>Create</title>
<form action="processcreate.php" method="POST">
<div class="container-fruid" align="center">
<div class="form-group col-4" align="left">
  <label for="">Name</label>
  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
  <label for="">Sex</label>
  <input type="text" class="form-control" name="sex" id="" aria-describedby="helpId" placeholder="">
  <label for="">Age</label>
  <input type="number" class="form-control" name="age" id="" aria-describedby="helpId" placeholder="">
  <label for="">Blood Group</label>
  <input type="text" class="form-control" name="group" id="" aria-describedby="helpId" placeholder="">
  <label for="">Reg Date</label>
  <input type="date" class="form-control" name="date" id="" aria-describedby="helpId" placeholder="">
  <label for="">Phone</label>
  <input type="text" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
  <button type="submit" style="margin-top:15px" class="btn btn-primary">Add</button>
</div>
</div>
</form>