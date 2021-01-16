<?php  
include('configadmin.php');
$id=$_POST['id'];
$wname=$_POST['wname'];
$wlocation=$_POST['wlocation'];
$wdate=$_POST['wdate'];
$wabout=$_POST['wabout'];
$sql="INSERT INTO work VALUES (NULL, '$id', '$wname', '$wlocation','$wdate','$wabout')" ;
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../work.php");
}
?>