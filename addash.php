<?php
$name = $_POST['name'];
$pass = $_POST['password'];
if(isset($_POST['submit']))
{
    if($name == 'admin' and $pass== '1234')
    {
        header('location:admin_dash.php');
    }
    else
    {
        header('location:admin.php');
    }
}

?>