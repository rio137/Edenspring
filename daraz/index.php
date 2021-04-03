<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

		<link rel="stylesheet" href="css/style.css" />

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

	</head>
	<body>
	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>

    <!-- MAIN CONTENT -->

   <div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">Eden Spring</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>              
              <li><a href="#portfolio">Demo</a></li>
			  <li><a href="#team">Photographers</a></li>
			  <li><a href="#info">Info</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>We are always here to make your event memorable</p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>Prev Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>Next Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            {
                              bigImage :"images/img1.jpg",
                              title : "We provide expert Photographers",
							                author : "Templatestock"
                            },
                            {
                              bigImage :"images/img2.jpg",
                              title : "Creative Works are always done by Us",
                              author : "Templatestock"
                            },
                            {
                              bigImage :"images/img3.jpg",
                              title : "Be with us for memorable event",
                              author : "Templatestock"
                            }
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 500, speedOut : 500, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>About Our <span>Team</span></h2>
        <p>We provide amazing photographers for you to make your events even more memorableand beautiful. All the photographers are experts and we ensure that you will love our work.</p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image" style="background-image:url(images/1.jpg)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-camera"></i></div>
                <div class="about-detail">
                  <h4>Expert Photographers</h4>
                  <p>We provide expert photographers to make your events even more beautiful and we ensure that to capture your best memory.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-film"></i></div>
                <div class="about-detail">
                  <h4>Cinematography</h4>
                  <p>We also provide amazing cinematography that will make your event more interesting and lively. It will make your event exceptional and amazing.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-cube"></i></div>
                <div class="about-detail">
                  <h4>Two in One</h4>
                  <p>We can provide both photography and cinematography if you want. Our expert team will make your event amazing and interesting by making these two offers.</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	
	
	    <!-- DEMO-->

    <section id="portfolio" class="light">
      <header class="title">
        <h2>Demo works</h2>
        <p>Let's see some of our amazing works done by our specialised photographers.</p>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">All</li>
            <li data-filter=".branding" class="filter">Wedding</li> 
            <li data-filter=".graphic" class="filter">Birthday</li> 
            <li data-filter=".printing" class="filter">Anniversary</li> 
            <li data-filter=".video" class="filter">Others</li> 
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "branding",
                      image : "images/w1.jpg",
                      title : "Mira-<span>Roxy</span>",
                      link : "#none",
                      text : "An wedding event of Mira and Roxy.A photo from that event."
                    },
                    {
                      category : "graphic",
                      image : "images/b1.jpg",
                      title : "Jack's <span>Birthday</span>",
                      link : "#none",
                      text : "An awesome moment from Jack's birthday party."
                    },
                    {
                      category : "graphic",
                      image : "images/b2.jpg",
                      title : "Rose's <span>Party</span>",
                      link : "#none",
                      text : "Beautiful girl and her magical moment."
                    },
                    {
                      category : "video",
                      image : "images/p-4.png",
                      title : "Old <span>House</span>",
                      link : "#none",
                      text : "A capture from an old haunted house."
                    },
                    {
                      category : "branding",
                      image : "images/w2.jpg",
                      title : "Sarah's <span>Wedding</span>",
                      link : "#none",
                      text : "The gorgeous bride Sarah has some amazing clicks with us."
                    },
                    {
                      category : "printing",
                      image : "images/a1.jpg",
                      title : "Zico & <span>Selena</span>",
                      link : "#none",
                      text : "An extra-ordinary capture from Zico and Selena's anniversary."
                    },
                    {
                      category : "printing",
                      image : "images/a2.jpg",
                      title : "Couple <span>Goals</span>",
                      link : "#none",
                      text : "Have you ever seen such a beautiful couple?"
                    },
                    {
                      category : "printing",
                      image : "images/p-8.png",
                      title : "Party <span>On</span>",
                      link : "#none",
                      text : "Are you there in the party?whose this one!!!"
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>


    <!-- TEAM -->

    <section id="team" class="light">
      <header class="title">
        <h2>Creative <span>Team</span></h2>
        <p>We have a creative team of 4 members. They will provide you amazing photography or cinematography or both whatever you need.</p>
      </header>
      
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown">
              <div class="img-team">
                <img src="images/team-1.png" alt="" class="img-circle">
              </div>

              <h3>Nora Jackson</h3>
              <h5>Photographer</h5>

              <p>She studied on Photography and a skillful photographer.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-2.png" alt="" class="img-circle">
              </div>

              <h3>Ellie Morgan</h3>
              <h5>Cameraman</h5>

              <p>An amazing person with amazing skills.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-3.png" alt="" class="img-circle">
              </div>

              <h3>Elche</h3>
              <h5>Videographer</h5>

              <p>A skilled videographer who will provide you amazing videography.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-4.png" alt="" class="img-circle">
              </div>

              <h3>JF Thiago</h3>
              <h5>Editor</h5>

              <p>She will take all the responsibilities of editing the photos and videos.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>
	
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Experties</span></h2>
        <p>Find our experties rate here out of 100.</p>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="80%"></span><em>Photography</em></li>
                <li><span class="percentage" data-value="95%"></span><em>Cinematography</em></li>
                <li><span class="percentage" data-value="83%"></span><em>Editing</em></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="76%"></span><em>Cameraman</em></li>
                <li><span class="percentage" data-value="90%"></span><em>Other SKills</em></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>	
	

    <section class="separator blue">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="43"></span>
                <small>Clients</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="20"></span>
                <small>Awards</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-gears"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="34"></span>
                <small>Projects</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-inbox"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="1298"></span>
                <small>Mail</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- FOOTER CONTACT -->

     <section id="contact" class="dark">
      <header class="title">
        <h2>Contact <span>Us</span></h2>
        <p>You can find us anytime whenever you need. We are always there for you.</p>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form action="photography.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="msg" rows="3" placeholder="Tell Us Everything"></textarea>
                </div>
                <div class="col-md-12">
                  <button type="submit" name="submit1" class="btn btn-default submit">Hire Us</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 23,Uttara,Dhaka</span>
                <span><i class="fa fa-phone fa-lg"></i> 01710663664</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:fuadaust007@example.com">fuadaust007&#64;gmail.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="http://support.example.com">support.example.com</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main.js"></script>
	</body>
</html>