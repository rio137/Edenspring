<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    body{
        background-image: url(all_images/admpic.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
        .main-div{
            width: 100%; height: 30vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .center-div{
            width: 70%;
            
            background-color: #272727;
            padding: 20px 20px 20px 20px;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
        }
        h1
        {
            font-size: 18px;
            color: #fff;
            text-align: center;
            
            margin-bottom: 20px;
           
        }
        table{
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
            border-radius: 10px;
            margin: auto;
        }
        th,td{
            border: 1px solid #f2f2f2;
            padding: 8px 30px;
            text-align: center;
            color: grey;
        }
        th{
            text-transform: uppercase;
            font-weight: 500;
        }
        td{
            font-size: 13px;

        }
        .fa
        {
            font-size: 18px;
        }
        .fa-trash{
            color: red;
        }













        #mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 20px;
  background-color: #4CAF50;
  font-size: 13px;
  font-weight: bold;
}

#blog {
  top: 80px;
  background-color: #2196F3;
  font-weight: bold;
}

#projects {
  top: 140px;
  background-color: #f44336;
  font-weight: bold;
}

#contact {
  top: 200px;
  background-color: #555;
  font-weight: bold;
}

#dctrn{
    top: 260px;
  background-color: #116466;
  font-size: 16px;
  font-weight: bold;
}

#hom{
    top: 320px;
    background-color: #9A1750;
    font-weight: bold;
}



    </style>
</head>
<body>



<div id="mySidenav" class="sidenav fixed-top">
  <a href="#phtgry" id="about">Photography</a>
  <a href="#ctrng" id="blog">Catering</a>
  <a href="#rnt" id="projects">Rent</a>
  <a href="#vne" id="contact">Venue</a>
  <a href="#dcrtn" id="dctrn">Decoration</a>
  <a href="admin.php" id="hom">Logout</a>
</div>







    <div class="main-div" id="phtgry">
        <div class="center-div">
        <h1>List of photography order</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$selectquery = "select * from photography";
$query = mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){  
    ?>  
    <tr>
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['message']; ?></td>
                            
                            <td><a href="deleteadmin.php?id=<?php echo $res['id']; ?>" data-toogle = "tooltip" data-placement="bottom"
                            title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>


<?php
}
?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="main-div" id="ctrng">
        
        <div class="center-div">
        <h1>List of catering order</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>venue</th>
                            <th>message</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$selectquery1 = "select * from catering";
$query1 = mysqli_query($con,$selectquery1);
$nums1 = mysqli_num_rows($query1);

while($res1 = mysqli_fetch_array($query1)){  
    ?>  
    <tr>
                            <td><?php echo $res1['id']; ?></td>
                            <td><?php echo $res1['name']; ?></td>
                            <td><?php echo $res1['email']; ?></td>
                            <td><?php echo $res1['venue']; ?></td>
                            <td><?php echo $res1['message']; ?></td>
                            <td><a href="deleteadmincatering.php?id=<?php echo $res1['id']; ?>" data-toogle = "tooltip" data-placement="bottom"
                            title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>


<?php
}
?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <div class="main-div" id="rnt">
        
        <div class="center-div">
        <h1>List of rent order</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>bride</th>
                            <th>groom</th>
                            <th>gender</th>
                            <th>car</th>
                            <th>dinnerware</th>
                            <th>furniture</th>
                            <th>address</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$selectquery2 = "select * from rent";
$query2 = mysqli_query($con,$selectquery2);
$nums2 = mysqli_num_rows($query2);

while($res2 = mysqli_fetch_array($query2)){  
    ?>  
    <tr>
                            <td><?php echo $res2['id']; ?></td>
                            <td><?php echo $res2['name']; ?></td>
                            <td><?php echo $res2['email']; ?></td>
                            <td><?php echo $res2['bride']; ?></td>
                            <td><?php echo $res2['groom']; ?></td>
                            <td><?php echo $res2['gender']; ?></td>
                            <td><?php echo $res2['car']; ?></td>
                            <td><?php echo $res2['dinnerware']; ?></td>
                            <td><?php echo $res2['furniture']; ?></td>
                            <td><?php echo $res2['address']; ?></td>
                            <td><a href="deleteadminrent.php?id=<?php echo $res2['id']; ?>" data-toogle = "tooltip" data-placement="bottom"
                            title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>


<?php
}
?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <div class="main-div" id="vne">
        
        <div class="center-div">
        <h1>List of venue order</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$selectquery3 = "select * from venue";
$query3 = mysqli_query($con,$selectquery3);
$nums3 = mysqli_num_rows($query3);

while($res3 = mysqli_fetch_array($query3)){  
    ?>  
    <tr>
                            <td><?php echo $res3['id']; ?></td>
                            <td><?php echo $res3['name']; ?></td>
                            <td><?php echo $res3['email']; ?></td>
                            <td><?php echo $res3['message']; ?></td>
                            <td><a href="deleteadminvenue.php?id=<?php echo $res3['id']; ?>" data-toogle = "tooltip" data-placement="bottom"
                            title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>


<?php
}
?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="main-div" id="dcrtn">
        
        <div class="center-div">
        <h1>List of decoration order</h1>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>message</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
$con = mysqli_connect('localhost','root','fcf16202');
mysqli_select_db($con,'userregi');
$selectquery4 = "select * from decoration";
$query4 = mysqli_query($con,$selectquery4);
$nums4 = mysqli_num_rows($query4);

while($res4 = mysqli_fetch_array($query4)){  
    ?>  
    <tr>
                            <td><?php echo $res4['id']; ?></td>
                            <td><?php echo $res4['name']; ?></td>
                            <td><?php echo $res4['email']; ?></td>
                            <td><?php echo $res4['address']; ?></td>
                            <td><?php echo $res4['message']; ?></td>
                            <td><a href="deleteadmindecoration.php?id=<?php echo $res4['id']; ?>" data-toogle = "tooltip" data-placement="bottom"
                            title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>


<?php
}
?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>