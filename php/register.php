<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$connection=mysqli_connect("localhost","root","Vicky@work123...","register");
if($connection->connect_error){
    die("Connection Failed". $connection->connect_error);
}
echo "Connection Established";

$stmt=$connection->prepare("Insert into register(fullname,email,password,contact) values(?,?,?,?)");
$stmt->bind_param("ssss",$fullname,$email,$password,$contact);
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password= $_POST['password'];
$contact= $_POST['contact'];
$stmt->execute();

$stmt->close();
$connection->close();
?>