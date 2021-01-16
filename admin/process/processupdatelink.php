<?php  
include('configadmin.php');
$id=$_POST['id'];
$fb=$_POST['fb'];
$insta=$_POST['insta'];
$skype=$_POST['skype'];
$twitter=$_POST['twitter'];
$sql="UPDATE link SET fb='$fb', insta='$insta', skype='$skype', twitter='$twitter' WHERE id = $id;";
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:../link.php");
}
?>