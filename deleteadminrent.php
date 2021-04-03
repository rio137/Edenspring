<?php

$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');

$id = $_GET['id'];

$delete = " delete from rent where id = $id";
$query = mysqli_query($con,$delete);

header('location:admin_dash.php');

?>