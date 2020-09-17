<?php

$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','donation');
if($con){

echo "connection successfully<br>";
}

$sql="insert into hospital (hname,hpass) values ('$username','$password')";  

if(mysqli_query($con,$sql)){
echo "inserted<br>";
header("Location: hosplogin.php"); 

}

?>