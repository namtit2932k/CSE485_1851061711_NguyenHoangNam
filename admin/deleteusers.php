<?php  
include('configadmin.php');
$aid=$_GET['id'];
$sql="delete from users where aid= $aid"; 
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:users.php");
}
?>