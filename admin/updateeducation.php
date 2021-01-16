<?php 
include('configadmin.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$eid=$_GET['id'];
$sql="select * from education where eid=$eid";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($res);
?>
<title>Update Education</title>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="info.php">Info</a>
  <a href="education.php">Education</a>
  <a href="work.php">Work</a>
  <a href="testimonial.php">Testimonial</a>
  <a href="link.php">Link</a>
  <a href="users.php">Users</a>
  <a href="logout.php">Log out</a>
  <a href="../index.php"><i class="fas fa-arrow-left"></i> Back</a>
</div>

<span onclick="openNav()"><i class="fas fa-align-justify fa-3x mt-2 ml-3"></i></span>

<div id="main">
    <div class="container">
<form action="process/processupdateeducation.php" method="POST">
<div class="container-fruid" align="center">
<div class="form-group col-4" align="left">
<h1 class="" style="text-align:left">Education</h1>
<label for="">Education ID</label>
  <input type="text" class="form-control" name="eid" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[0]; ?>">
<label for="">ID</label>
  <input type="text" class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[1]; ?>">
  <label for="">Education Name</label>
  <input type="text" class="form-control" name="ename" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[2]; ?>">
  <label for="">Education Location</label>
  <input type="text" class="form-control" name="elocation" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[3]; ?>">
  <label for="">Date</label>
  <input type="text" class="form-control" name="edate" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[4]; ?>">
  <label for="">About</label>
  <textarea type="text" class="form-control" name="eabout" id="" aria-describedby="helpId" placeholder="" rows="4" cols="50" value="<?php echo $data[5]; ?>"><?php echo $data[5]; ?></textarea>
  <button type="submit" style="margin-top:15px" class="btn btn-primary">Update</button>
  <a name="" id="" class="btn btn-secondary" href="education.php" role="button" style="margin-top:15px">Back</a>
</div>
</div>
</form>