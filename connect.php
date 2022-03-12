<?php
	$email = $_POST['First name'];
	$password = $_POST['Last name'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	$password = $_POST['psw-repeat'];


//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into login(First name,Last name,email,psw,psw-repeat) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$Firstname,$Lastname,$email,$psw,$pswrepeat);
	$stmt->execute();
	echo "Login successful...";
	$stmt->close();
	$conn->close();
}
?>