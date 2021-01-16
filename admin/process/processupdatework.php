<?php  
include('configadmin.php');
$wid=$_POST['wid'];
$id=$_POST['id'];
$wname=$_POST['wname'];
$wlocation=$_POST['wlocation'];
$wdate=$_POST['wdate'];
$wabout=$_POST['wabout'];
$sql="UPDATE work SET id='$id', wname='$wname', wlocation='$wlocation', wdate='$wdate', wabout='$wabout' WHERE wid = $wid;";
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