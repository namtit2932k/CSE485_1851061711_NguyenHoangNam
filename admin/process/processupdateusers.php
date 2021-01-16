<?php  
include('configadmin.php');
$aid=$_POST['aid'];
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql="UPDATE users SET id='$id', username='$username', password='$password' WHERE aid = $aid;";
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../users.php");
}
?>