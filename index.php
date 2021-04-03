<?php
session_start();
ob_start();
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
$email = $_POST['email'];
$password = $_POST['password'];
$s = " select * from usertable where email = '$email' && password='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1)
{
    $query1 = " select * from usertable where email = '$email' && password='$password'";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_array($result1);
    $id = $row1["id"];
    $_SESSION['abc']= $id;

    header('Location:index1.php');
    exit;
}
else
{
    $aflag=1;
}
}
ob_end_flush();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background: rgb(219, 226, 226);
        height: 100%;
    }

    .row{
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px gray;
    }
    img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        height: 100%;
        width: 100%;
    }

    .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
    }
    .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
    }

    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    
    }
    .form-control:focus{
        border-color: white;
        box-shadow: none;
    }

    .effect ~ .focus-border{
        position: absolute;
        bottom: 30px;
        left: 0;
        width: 100%;
        height: 2px;
        z-index: 1;
        
    }

    .effect ~ .focus-border:before,
    .effect ~ .focus-border:after
    {
        content: "";
        position: absolute;
        bottom: 0; left: 0; 
        width: 0; height: 100%;
        background-color: #3399ff;
        transition: 1s;
    }
    .effect ~ .focus-border:after
    {
        left: auto; right: 0;
    }    
    .effect:focus ~ .focus-border:before,
    .effect:focus ~ .focus-border:after
    {
        width: 50%; transition: 1s;
    }
    
    </style>
</head>
<body>
<section class="form my-4 mx-5">
        <div class="container">
<?php if($aflag==1) { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Wrong!</strong> You have entered Invalid Username or Password.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } else{ ?> 

<?php } ?> 

            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="all_images/login.jpg" class="img-fluid" alt="Fuad Picture">
                </div>

                <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Log In</h1>
                    <form method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Email Address" class="form-control my-3 p-4 effect">
                                <span class="focus-border"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="*******" class="form-control my-3 p-4 effect">
                                <span class="focus-border"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name = "submit" class="btn1 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href="admin.php">Log In as Admin</a>
                        <p>Don't have an account? <a href="signup.php">Register Here</a></p>
                    </form>
                </div>

            </div>
        </div>

        
        

    </section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>