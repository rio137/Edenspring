<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(isset($_POST['submit1']))
{
    $id = $_SESSION['abc'];
    $vun = " insert into venue(name, email, message,user_id) values ('$name', '$email', '$msg','$id')";
    mysqli_query($con,$vun);
}
?>