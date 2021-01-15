<?php  
include('header.php');
$id=$_GET['id'];
$sql="delete from BLOOD_DONOR where BD_ID= $id"; 
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:index.php");
}
?>