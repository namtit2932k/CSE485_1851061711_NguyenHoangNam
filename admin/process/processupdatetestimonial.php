<?php  
include('configadmin.php');
$tid=$_POST['tid'];
$id=$_POST['id'];
$testimonial=$_POST['testimonial'];
$cname=$_POST['cname'];
$sql="UPDATE testimonial SET id='$id', testimonial='$testimonial', cname='$cname' WHERE tid = $tid;";
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