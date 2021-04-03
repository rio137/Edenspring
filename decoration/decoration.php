<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$msg = $_POST['message'];

if(isset($_POST['submit1']))
{
    $id = $_SESSION['abc'];
    $dcrtn = " insert into decoration(name, email, address, message,user_id) values ('$name', '$email', '$address', '$msg', '$id')";
    mysqli_query($con,$dcrtn);
}
?>