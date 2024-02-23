<?php
$cusname = $_POST['cusname']
$cusphone = $_POST['cusphone']
$cusaddress = $_POST['cusaddress']

//DATABASE CONNECTION
$conn = new mysqli('localhost','root','test');
if($conn->connect_error){
	die('Connection Failed' : .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(cusname,cusphone,cusaddress)
	value(?, ?, ?)");
	$stmt->blind_param("sis",$cusname, $cusphone, $cusaddress);
	$stmt->execute;
	echo "Registration Sucessful...";
	$stmt->close();
	$conn->close();

>