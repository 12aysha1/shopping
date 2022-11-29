<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$message = filter_input(INPUT_POST, 'message');

if(!empty($name)){
if(!empty($email)){
if(!empty($phone)){
if(!empty($message)){

$host= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "contactus";

$conn = new mysqli($host, $dbusername, $dbpassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('.mysqli_connect_error().')'
.mysqli_connect_error());
}
else{
$sql= "INSERT INTO contact12(Name,Email,Phone Number,Message)
values('$name','$email','$phone','$message')";

if($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
}
}}}
else{
echo "Name should not be empty";
die();
}}
else{
echo "Email should not be empty";
die();
}
else{
echo "Phone Number should not be empty";
die();
}
else{
echo "Message should not be empty";
die();
}
?>
