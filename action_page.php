<?php
include_once 'dbConnection.php';
if($_POST["hidden"]=="blooddonor.php"){
$name = $_POST['name'];
$blood = $_POST['Bloodgroup'];
$age=$_POST["Age"];
$gender=$_POST["Gender"];
$add=$_POST["Address"];
$contact=$_POST["Contact"];
$q=mysqli_query($con,"INSERT INTO blood (name,bloodgroup,age,contact,gender,address) VALUES  ('$name', '$blood' , '$age' , '$contact', '$gender' , '$add')")or die ("Error");
}
else if($_POST["hidden"]=="organdonor.php"){
$name = $_POST['name'];
$organ = $_POST['Organ'];
$age=$_POST["Age"];
$gender=$_POST["Gender"];
$add=$_POST["Address"];
$contact=$_POST["Contact"];
$q=mysqli_query($con,"INSERT INTO organs (name,organ,gender,age,contact,address) VALUES  ('$name', '$organ' , '$gender' , '$age', '$contact' , '$add')")or die ("Error");
}
else if($_POST["hidden"]=="clothdonor.php"){
$name = $_POST['name'];
$ctype = $_POST['ctype'];
$quan=$_POST["quan"];
$cgender=$_POST["cGender"];
$add=$_POST["Address"];
$contact=$_POST["Contact"];
$cfor=$_POST["cfor"];
$q=mysqli_query($con,"INSERT INTO clothes (name,clothtype,clothfor,contact,address,quantity,clothgender) VALUES  ('$name', '$ctype' , '$cfor' , '$contact', '$add' , '$quan','$cgender')")or die ("Error");
}
else if($_POST["hidden"]=="fund"){
$q=mysqli_query($con,"INSERT INTO fund (name,bloodgroup,age,contact,gender,address) VALUES  ('$name', '$blood' , '$age' , '$contact', '$gender' , '$add')")or die ("Error");
}
if($q){
echo "INSERT";
}
else
{
	echo "err";
}
?>