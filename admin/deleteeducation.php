<?php  
include('configadmin.php');
$eid=$_GET['id'];
$sql="delete from education where eid= $eid"; 
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:education.php");
}
?>