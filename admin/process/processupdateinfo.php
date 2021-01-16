<?php  
include('configadmin.php');
$id=$_POST['id'];
$name=$_POST['name'];
$introduce=$_POST['introduce'];
$about=$_POST['about'];
$sql="UPDATE info SET name='$name', introduce='$introduce', about='$about' WHERE id = $id;";
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../info.php");
}
?>