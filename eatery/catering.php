<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

if(isset($_POST['submit']))
{
    $id = $_SESSION['abc'];
    $ctrng = " insert into catering(name, email,venue, message,user_id) values ('$name', '$email','$sub', '$msg','$id')";
    mysqli_query($con,$ctrng);
}
?>