<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="phtgrphy.css">
</head>
<body>
<header>
    <a href="#" class="logo">Food<span>.</span></a>
    <ul class="navigation">
        <li><a href="#banner">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#experts">Experts</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contacts">Contacts</a></li>
    </ul>
</header>
<section class="banner" id="banner">
<div class="content">
<h2>Always Choose Good</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi voluptas quaerat velit numquam magni 
voluptatem inventore ea reprehenderit quos nulla ipsum omnis, ratione error voluptatibus vitae impedit 
consectetur ab labore.</p>
<a href="#" class="btn">Our menu</a>
</div>


</section>


<section class="about" id="about">
    <div class="row">
        <div class="col50">
            <h2><span>A</span>bout Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi explicabo consequatur, molestias ipsum cum 
                facilis amet adipisci, dignissimos error beatae quibusdam,laudantium expedita enim odit voluptatum?<br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dolore? Atque velit temporibus delectus minima, illum cumque quasi voluptates repellat voluptatum odit eum eius obcaecati quo ipsa, molestiae incidunt rerum!
            </p>
            
        </div>
        <div class="col50">
            <div class="imgbx">
                <img src="img1.jpg">
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
window.addEventListener('scroll',function(){
const header = document.querySelector('header');
header.classList.toggle("sticky",window.scrollY>0);
});
</script>

 

</body>
</html>