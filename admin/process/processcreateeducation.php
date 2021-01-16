<?php  
include('configadmin.php');
$id=$_POST['id'];
$ename=$_POST['ename'];
$elocation=$_POST['elocation'];
$edate=$_POST['edate'];
$eabout=$_POST['eabout'];
$sql="INSERT INTO education VALUES (NULL, '$id', '$ename', '$elocation','$edate','$eabout')" ;
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../education.php");
}
?>