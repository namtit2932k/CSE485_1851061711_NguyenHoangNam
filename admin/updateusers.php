<?php 
include('configadmin.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
$aid=$_GET['id'];
$sql="select * from users where aid=$aid";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($res);
?>
<title>Update Users</title>
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
<form action="process/processupdateusers.php" method="POST">
<div class="container-fruid" align="center">
<div class="form-group col-4" align="left">
<h1 class="" style="text-align:left">Users</h1>
<label for="">Account ID</label>
  <input type="text" class="form-control" name="aid" id="" aria-describedby="helpId" placeholder="" readonly value="<?php echo $data[0]; ?>">
  <label for="">ID</label>
  <input type="text" class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[1]; ?>">
  <label for="">Username</label>
  <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[2]; ?>">
  <label for="">Password</label>
  <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" value="<?php echo $data[3]; ?>">
  <button type="submit" style="margin-top:15px" class="btn btn-primary">Update</button>
  <a name="" id="" class="btn btn-secondary" href="users.php" role="button" style="margin-top:15px">Back</a>
</div>
</div>
</form>