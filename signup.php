<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'fcf16202');
mysqli_select_db($con, 'userregi');

$flag = 0;
$aflag=0;
if(isset($_POST['submit']))
{
    $flag = 1;
  
}
if($flag==1)
{
    $name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

$s1 = " select * from usertable where email = '$email'";
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);
if($num1==1 or $num==1)
{
    $aflag=1;
}
else
{
    $reg = " insert into usertable(name, email, password) values ('$name', '$email','$password')";
    mysqli_query($con, $reg);
    header('location:login.php');
    exit;
}
}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #fbf3ff;
}

.container{
    position: absolute;
    max-width: 800px;
    height: 500px;
    margin: auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.myrightctn{
    position: relative;
    background-image: linear-gradient(45deg, #f046ff,#9b00e8);
    border-radius: 25px;
    height: 100%;
    padding: 25px;
    color: rgb(192, 192, 192);
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.myleftctn{
    position: relative;
    background: #fff;
    border-radius: 25px;
    height: 100%;
    padding: 25px;
    padding-left: 50px;
}

.myleftctn header{
    color: blueviolet;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
}
.row{
    height: 100%;
}
.myCard
{
    position: relative;
    background: #fff;
    height: 100%;
    border-radius: 25px;
    box-shadow: 0px 10px 40px -10px rgba(0, 0, 0, 0.7);
}

.myrightctn header{
    color: #fff;
    font-size: 44px;
}

.box{
    position: relative;
    margin: 20px;
    margin-bottom: 100px;

}

.myleftctn .myinput{
    width: 230px;
    border-radius: 25px;
    padding: 10px;
    padding-left: 50px;
    border: none;
    box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
}

.myleftctn.myinput:focus{
    outline: none;
}

.myform{
    position: relative;
    margin-top: 50px;
}

.myleftctn .butt{
    background: linear-gradient(45deg,#bb36fd,#9b00e8);
    color: #fff;
    width: 230px;
    border: none;
    border-radius: 25px;
    padding: 10px;
    box-shadow: 0 10 41 -11 rgba(0px, 0px, 0px, 0.7);
    cursor: pointer;
}

.myleftctn .butt:hover{
    background: linear-gradient(45deg,#c85bff,#b726ff);
}

.myleftctn .butt:focus{
    outline: none;
}
.myleftctn .fa{
    position: relative;
    color: #bb36fd;
    left: 36px;
}

.butt_out
{
    background: transparent;
    color: #fff;
    width: 120px;
    border: 2px solid #fff;
    border-radius: 25px;
    padding: 10px;
    box-shadow: 0px 10px 49px -14px rgba(0, 0, 0, 0.7);
    cursor: pointer;
}

.butt_out:hover{
    border: 2px solid #eecbff;
}

.butt_out:focus{
    outline: none;
}


</style>

</head>
<body>

<?php if($aflag==1) { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Wrong!</strong> Username or Email already taken.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } else{ ?> 

<?php } ?> 

<div class="container">
<div class="myCard">
<div class="row">
<div class="col-md-6">
<div class="myleftctn">
<form class="myform text-center" action="signup.php" method="post">
<header>Create New Account</header>

<div class="form-group">
<i class="fa fa-user"></i>
<input class="myinput effect" type="text" placeholder="Username" id="username" name="username" required>
<span class="focus-border"></span>
</div>

<div class="form-group">
<i class="fa fa-envelope"></i>
<input class="myinput effect" type="text" placeholder="email" id="email" name="email" required>
<span class="focus-border"></span>
</div>

<div class="form-group">
<i class="fa fa-lock"></i>
<input class="myinput effect" type="password" placeholder="*****" id="password" name="password" required>
<span class="focus-border"></span>
</div>

<div class="form-group">
<label><input id="check_1" name="check_1" type="checkbox" required>
<small>I read and agree to Terms and Conditions</small>
<div class="invalid-feedback">You must check the box.
</div>
</label>
</div>

<input type="submit" name = "submit" class="butt" value="CREATE ACCOUNT">
</form>
</div>

</div>

<div class="col-md-6">
<div class="myrightctn">
<div class="box">
<header>Hello World!</header>
<p>Welcome to this website.If you are new to this website, then signup for free to get our exciting services.
We provide all types of event planner for you. So just sign up and get connected with us.

</p>
<input type="button" class="butt_out" value="Learn More"/>
</div>
</div>
</div>

</div>

</div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>