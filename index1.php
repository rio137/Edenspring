<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  

    <style>

    .box{
      width: 100vw;
      height: 100vh;
    }

    .box1{
      width: 80vw;
      height: auto;
      margin: auto;
      background: #dfe6e9;
      flex-wrap: wrap;
      text-align: center;
      margin-top: 40px;
    }

    @media (max-width: 768px){
      .box{height:auto;}
    }

    .bbxx{
      width: 100vw;
      height: 100vh;
    }

    .bbxx1{
      width: 80vw;
      height: auto;
      margin: auto;
      background: #dfe6e9;
      flex-wrap: wrap;
      text-align: center;
      margin-top: 40px;
    }

    @media (max-width: 768px){
      .bbxx{height:auto;}
    }

    .homebtn
    {
      position: relative;
      width: 60px;
      height: 40px;
      background: #222;
      text-decoration: none;
      color: white;
      justify-content: center;
      align-items: center;
    }

    .homebtn::before{
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: #00fe73;
      transition: 0.5s ease-in-out;
      text-decoration: none;
    }

    .homebtn::after{
      content: '';
      position: absolute;
      top: 0;
      right: 0;
      width: 4px;
      height: 100%;
      background: #00fe73;
      transition: 0.5s ease-in-out;
      text-decoration: none;
    }
    .homebtn:hover::before,
    .homebtn:hover::after
    {
      width: 50%;
      text-decoration: none;
      color: black;
    }
    .homebtn span{
      position: relative;
      z-index: 1;
      color: #fff;
      font-size: 18px;
      transition: 0.5s;
      text-decoration: none;
    }

    .homebtn span
    {
      transition-delay: 0.75s;
      text-decoration: none;
      font-size: 20px;
    }
    a:hover span
    {
      transform: scale(0);
      transition-delay: 0s;
      color: black;
      text-decoration: none;
    }
    .fa{
      align-items: center;
      font-size: 90px;
    }

    .card{
      position: relative;
      width: 50%;
      height: 250px;
      background: #fff;
      transform-style: preserve-3d;
      transform: perspective(1000px);
      box-shadow: 10 20 40 rgba(0, 0, 0, 0.25);
      transition: 1s;
    }

    .card .imgbox{
      position: relative;
      width: 100%;
      height: 100%;
      z-index: 1;
      transform-origin: left;
      transform-style: preserve-3d;
      background: #000;
      transition: 1s;
    }
    .card:hover{
      transform: translateX(100%);
    }
    .card:hover .imgbox{
      transform: rotateY(-180deg);
    }
    .card .imgbox img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform-style: preserve-3d;
    }
    .card .details{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card .details .content{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .card .details .content h2{
      text-align: center;
      font-weight: 700;
      line-height: 1em;

    }
    .card .details .content h2 span{
      color: #e21212;
      font-size: 0.5em;
    }
    .card .details .content .social-icons{
      position: relative;
      
      margin-top: 5px;
    }
    .card .details .content .social-icons a{
      
      
      width: 5px;
      height: 5px;
      
      justify-content: center;
      align-items: center;
      text-decoration: none;
      margin: 5px;
      font-size: 1px;
      transition: 0.2s;
    }
    .imggg{
      display: inline-block;
    }
    figure{
      overflow: hidden;
    }

    .imggg img{
      transform: scale(1);
      transition: 0.3s ease-in-out;
    }

    .imggg img:hover{
      transform: scale(1.5);
      border-radius: 360px;
    }

    .animate__animated
    {
      --animate-delay: 4s;
    }
    
      </style>

  
</head>
<body>

<!---homepage--->
<!---navbar--->

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Eden Springs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="userdash.php">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="daraz/index.php">Photography</a>
          <a class="dropdown-item" href="eatery/index.html">Catering</a>
          <a class="dropdown-item" href="decoration/index.html">Decoration</a>
          <a class="dropdown-item" href="card/index.html">Venue</a>
          <a class="dropdown-item" href="rent/index.html">Rent</a>
          
      </li>
      
    </ul>
  </div>
</nav>

<!---carousel--->

<section>

<div class="row">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="all_images/abc.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all_images/caro1.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="all_images/caro3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</section>

<!---gif--->

<section>
<div class="container" style="margin-top: 40px; margin-bottom: 25px;">

<div class="row">
  <div class="col-sm" id="left">
  <img src="all_images/abc.gif">
  </div>
  <div class="col-sm"></div>
  <div class="col-sm" id="right">

  <img src="all_images/bday.gif">
  </div>
</div>

</div>
</section>

<!---services--->

<section>

<div class="box">
  <div class="box1 rounded" id="weare" style="margin-top: 40px;">
  <p style="text-align: center;margin-top:20px; margin-bottom:20px;font-weight:bold;font-size:30px;">Who We Are</p>
  <p style="font-weight:bold;text-align: justify;text-align-last:center;margin-left:30px;margin-right:30px;">
  With a perfect blend of experience and passion, Dhaka Event Planner is an event management company in Bangladesh. We’ve emerged as a company with ideas to turn your corporate or personal event into something worth remembering. With the help of our creative team, we provide our services to most types of corporate events including, but not limited to, seminars, conferences, trade shows, cultural events, company or organization milestones, exhibitions, product launches, concerts, company annual meetings, corporate picnics, fashion shows and appreciation events. We will also strive to make your wedding events, birthday events and other personal events unforgettable. 
  </p>

  <p style="font-weight:bold;text-align: justify;text-align-last:center;margin-left:30px;margin-right:30px;">
  Bangladesh, with Dhaka at the heart of it, is a country that has become a wonder for quite a few people with its rapid economic growth in the last 10 years or so. Companies, organizations and various businesses have become the driving force for the economic development of this country. Both corporate and personal event management services in Dhaka, Chittagong, Cox's Bazar and in the whole Bangladesh is becoming more and more common. We at Dhaka Event Planner believe that it's our responsibility as an event management company to deliver our services to our clients with reliability, dependability and creativity. We want you to remember the events that we get to manage for you. We thrive to mix and match the best styles and themes for your events. With so many events happening in Dhaka and all over Bangladesh, we believe that it’s very important that you stand out with your events as our client. 
  </p>

  <p style="font-weight:bold;text-align: justify;text-align-last:center;margin-left:30px;margin-right:30px;">
  An event itself is an opportunity to display your creation positively and inspire people to take positive actions. Dhaka Event Planner helps you achieve your event’s desired objectives and a little bit extra to make it an immersive experience for all the attendees. We start by learning who you are and what your objectives are for the event. This enables us to tailor your event for the best experience of all parties involved. 
  </p><br><br>

  <div class="container">
  <div class="row">
    <div class="col-sm" id="ptgr">
     <div class="imggg"><figure><a href="daraz\index.php"><img src="all_images/demo.jpg" class="rounded-circle"></a></figure></div><br><br>
      <a href="daraz\index.php" class="homebtn">
       <span style="margin-left: 5px;margin-right:5px;">Photography</span>
     </a>
    </div>
    <div class="col-sm">
     
    </div>
    <div class="col-sm" id="ctrg">
    <div class="imggg"><figure><a href="eatery/index.html"><img src="all_images/catering.jpg" class="rounded-circle"></a></figure></div><br><br>
     <a href="eatery\index.html" class="homebtn">
       <span style="margin-left: 5px;margin-right:5px;">Cattering</span>
     </a>
    </div>
  </div>

  <div class="row">
    <div class="col-sm" id="dcrt">
    <br><div class="imggg"><figure><a href="decoration/index.html"><img src="all_images/decoration.jpg" class="rounded-circle"></a></figure></div><br><br>
     <a href="decoration\index.html" class="homebtn">
       <span style="margin-left: 5px;margin-right:5px;">Decoration</span>
     </a>
    </div>
    <div class="col-sm">
    
    </div>
    <div class="col-sm" id="vne">
    
<br><div class="imggg"><figure><a href="card/index.html"><img src="all_images/vanue.jpg" class="rounded-circle"></a></figure></div><br><br>
      <a href="card\index.html" class="homebtn">
       <span style="margin-left: 5px;margin-right:5px;">Vanue</span>
     </a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm" id="rnt">
    <br><div class="imggg"><figure><a href="rent/index.html"><img src="all_images/rent.jpg" class="rounded-circle"></a></figure></div><br><br>
     <a href="rent\index.html" class="homebtn">
       <span style="margin-left: 5px;margin-right:5px;">Rent</span>
     </a>
    </div><br>
    <div class="col-sm">
    </div>
  </div>
</div>
  </div>
<!---why choose us--->
  
  <div class="box1 rounded" id="choos" style="margin-top: 40px;">
  <p style="text-align: center;margin-top:20px; margin-bottom:5px;font-weight:bold;font-size:30px;">WHY CHOOSE US FOR YOUR EVENT</p>
  <p style="text-align: center; margin-bottom:20px;font-size:15px;">EVENT THAT YOU WILL REMEMBER</p>

  <div class="row">
  <div class="col-sm">
  <p style="text-align: center; font-weight:bold;">All kind of logistic and Resources support</p>
  <p style="text-align: justify; margin-left:30px;margin-right:30px;">
  As an experienced Event Management company, we have all kind of Event equipment, 
  logistics and resources available
  </p>
  
  </div>
  <div class="col-sm">
  <i class="fa fa-modx" aria-hidden="true"></i>
  </div>
  <div class="col-sm">
  <p style="text-align: center; font-weight:bold;">EXPERIENCED EVENT PLANNER AND MANAGER</p>
  <p style="text-align: justify;margin-right:30px;margin-left:30px;">
  When it's about making your Event successful, it's all about making a good plan, 
  managing and executing successfully. 
  And, we have experienced who will make your event unique and memorable!</p>
  </div>
</div>
  </div>

  <!---aboutus--->
  <div class="box1 rounded" id="abts" style="margin-top: 40px; background: #242423;">
  <p style="color:white;text-align: center;margin-top:20px; margin-bottom:30px;font-weight:bold;font-size:30px;">CONTRIBUTORS</p>
 
  <div class="container" style="margin-bottom: 20px;">

  <div class="row">
  <div class="col-sm">
  <div class="card">
  <div class="imgbox">
    <img src="all_images/fuad.jpg">
  </div>
  <div class="details">
  <div class = "content">
  <h2>Fuad<br><span>Web Developer</span></h2>
  <div class="social-icons">
    <a href="https://github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
    
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm">
  <div class="card">
  <div class="imgbox">
    <img src="all_images/niloy.png">
  </div>
  <div class="details">
  <div class = "content">
  <h2>Niloy<br><span>Web Developer</span></h2>
  <div class="social-icons">
    <a href="https://github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
    
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm">
  <div class="card">
  <div class="imgbox">
    <img src="all_images/siham.jpeg">
  </div>
  <div class="details">
  <div class = "content">
  <h2>Siham<br><span>Web Developer</span></h2>
  <div class="social-icons">
    <a href="https://github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
    
  </div>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
  
  </div>

</div>
</section>

<script>
    $(document).ready(function(){
      $(window).scroll(function(){
        var postp = $(document).scrollTop();
        console.log(postp);

        if((postp>80) && (postp<160))
        {
          $('#left').addClass('animate__animated animate__fadeInLeft');
        }
        if((postp>80) && (postp<160))
        {
          $('#right').addClass('animate__animated animate__fadeInRight');
        }
        if(postp>160 && postp<480)
        {
          $('#weare').addClass('animate__animated animate__fadeInUp');
        }

        if(postp>680 && postp<1000)
        {
          $('#ptgr').addClass('animate__animated animate__fadeInLeft');
        }

        if(postp>680 && postp<1000)
        {
          $('#ctrg').addClass('animate__animated animate__fadeInRight');
        }

        if(postp>1001 && postp<1360)
        {
          $('#dcrt').addClass('animate__animated animate__fadeInUp');
        }

        if(postp>1001 && postp<1360)
        {
          $('#vne').addClass('animate__animated animate__fadeInUp');
        }
        if(postp>1278 && postp<1478)
        {
          $('#rnt').addClass('animate__animated animate__fadeInUp');
        }

        if(postp>1676 && postp<1996)
        {
          $('#choos').addClass('animate__animated animate__slideInUp');
        }

        if(postp>2100 && postp<2444)
        {
          $('#abts').addClass('animate__animated animate__jackInTheBox');
        }

      });
    });

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>