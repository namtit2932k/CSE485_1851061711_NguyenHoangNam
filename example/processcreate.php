<?php  
include('header.php');
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$group=$_POST['group'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$sql="INSERT INTO blood_donor  VALUES (NULL, '$name', '$sex', $age, '$group', '$date', '$phone')" ;
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