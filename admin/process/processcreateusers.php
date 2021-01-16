<?php  
include('configadmin.php');
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO users VALUES (NULL, '$id', '$username', '$password')" ;
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