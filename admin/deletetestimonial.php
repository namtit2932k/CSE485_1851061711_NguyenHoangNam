<?php  
include('configadmin.php');
$tid=$_GET['id'];
$sql="delete from testimonial where tid= $tid"; 
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:testimonial.php");
}
?>