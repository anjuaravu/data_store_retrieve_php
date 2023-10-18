<?php

include("index.php");

$name=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$dob=$_GET['dob'];
$gender=$_GET['gender'];

$sql="INSERT INTO regform(name,email,mobile,dob,gender) VALUES('$name','$email','$mobile','$dob','$gender')";

if(mysqli_query($connection,$sql)){
    echo "record successfully";
}else{
    echo "not recorded ";
}

?>