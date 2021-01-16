<?php  
include('configadmin.php');
$id=$_POST['id'];
$testimonial=$_POST['testimonial'];
$cname=$_POST['cname'];
$sql="INSERT INTO testimonial VALUES (NULL, '$id', '$testimonial', '$cname')" ;
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../testimonial.php");
}
?>