<?php
session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$name = $_POST['name'];
$email = $_POST['email'];
$carno = $_POST['carno'];
$dinno = $_POST['dinno'];
$furno = $_POST['furno'];
$address = $_POST['address'];
if(!empty($_POST['bridedress'])) 
{
    $bride = $_POST['bridedress'];
}
else
{
    $bride = null;
}

if(!empty($_POST['groomdress'])) 
{
    $groom = $_POST['groomdress'];
}
else
{
    $groom = null;
}

if(!empty($_POST['gender'])) 
{
    $gender = $_POST['gender'];
}
else
{
    $gender = null;
}

if(isset($_POST['submit1']))
{
    $id = $_SESSION['abc'];
    $rnt = " insert into rent(name, email, bride,groom,gender,car,dinnerware,furniture,address,user_id) values ('$name', '$email', '$bride','$groom','$gender','$carno','$dinno','$furno','$address','$id')";
    mysqli_query($con,$rnt);
}
?>