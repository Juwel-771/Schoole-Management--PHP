<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "Connection Succesfull";
}
else {
    echo "connection error";
}
mysqli_select_db($con,'Scl');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into userinfo(user,email,mobile,comments) values ('$user','$email','$mobile','$comments')";
mysqli_query($con,$query);

?>