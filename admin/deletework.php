<?php  
include('configadmin.php');
$wid=$_GET['id'];
$sql="delete from work where wid= $wid"; 
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:work.php");
}
?>