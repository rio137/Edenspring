<?php
session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(isset($_POST['submit1']))
{
    $id = $_SESSION['abc'];
    $phtgrphy = " insert into photography(name, email, message, user_id) values ('$name', '$email', '$msg', '$id')";
    mysqli_query($con,$phtgrphy);

}
?>