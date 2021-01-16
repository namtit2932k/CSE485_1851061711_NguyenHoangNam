<?php  
include('configadmin.php');
$eid=$_POST['eid'];
$id=$_POST['id'];
$ename=$_POST['ename'];
$elocation=$_POST['elocation'];
$edate=$_POST['edate'];
$eabout=$_POST['eabout'];
$sql="UPDATE education SET id='$id', ename='$ename', elocation='$elocation', edate='$edate', eabout='$eabout' WHERE eid = $eid;";
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