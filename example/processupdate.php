<?php  
include('header.php');
$id=$_POST['id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$group=$_POST['group'];
$date=$_POST['date'];
$phone=$_POST['phone'];  
$sql="UPDATE blood_donor SET BD_NAME='$name',BD_SEX='$sex',BD_AGE=$age,BD_BGROUP='$group',BD_REG_DATE='$date',BD_PHNO = '$phone' WHERE BD_ID = $id;";
$res=mysqli_query($conn,$sql);
if(!$res)
{
    $error=mysqli_error($conn);
    header("location:error.php?error=$error");
}
else {
    header("location:index.php");
}
?>