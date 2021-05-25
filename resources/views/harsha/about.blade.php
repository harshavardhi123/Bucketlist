<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DESTINATION - About</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">DESTINATION</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/about" class="active">About Us</a></li>
							<li><a href="/tours">Our Tours</a></li>
							<li><a href="/contact">Contact Us</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					
				</div>				
			</div>
			<div class="row">
				<!-- Testimonial -->
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
						<div class="tm-about-box-2 margin-bottom-2">
							
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title">About Web Application</h3>
				                
								<p >Web application has been adapted from Holiday template by Templatemo</p>. 
								<p>Technical details as below,</p>
								<ul>
								<li>Laravel MVC V 8.36.2</li></ul>
								<ul><li>Bootstrap V3.3.5</li>
								</ul>	
								<ul>
								<li>Local Development Enviornment:</li>
								</ul>
									<ol>
									<li> XAMPP for Windows </li>
									<li>Apache 2.4.47</li>
									<li>MariaDB 10.4.19</li>
									<li>PHP 7.3.28</li>
									<li>phpMyAdmin 5.1.0</li>
									<li>OpenSSL 1.1.1</li>
									<li>XAMPP Control Panel 3.2.4</li>
									<li>Webalizer 2.23-04</li>
									<li>Mercury Mail Transport System 4.63</li>
									<li>FileZilla FTP Server 0.9.41</li>
									<li>Tomcat 8.5.65 (with mod_proxy_ajp as connector)</li>
									<li>Strawberry Perl 5.32.0.1 Portable</li>
									</ol>
								<ul>
										<li>Cloud Enviornment:</li>
								</ul>
									
									<ol>
									<li>Application has been Deployed in Heroku.</li>
										<li>Heroku is a PaaS owned by Salesforce</li>
									</ol>
								<ul>
										<li>Github:</li>
								</ul>
								 <a href="https://github.com/harshavardhi123/Bucketlist.git" class="active">https://github.com/harshavardhi123/Bucketlist.git</a>
									
									 
								 <ul>
									<li>Deployemnt Details:</li>
									</ul>	
								<p>
									Code base from local enviornment(PC) is pushed to Github. The code is further deployed to Heroku - utilizing tools available in Heroku. </p> 	
									</p>
				                
							</div>		                
						</div>
						
					</div>
					<div class="tm-testimonials-box">
						<h3 class="tm-testimonials-title">Personal Profile</h3>
						<div class="tm-testimonials-content">
							<div class="tm-testimonial">
							<img src="img/harshavardhi.jpg" alt="image" class="tm-about-box-2-img">
								<p>My Name is Harshavardhi and I am from a small town in South India.
								I have Four years of professional experience.</p>
		                		<strong class="text-uppercase"></strong>	
							</div>
							
	       					
						</div>
					</div>	
				</div>							
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2021 @DESTINATION-1</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
  	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
  	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});		  	
		});
		$(window).load(function(){
			// Flexsliders
		  	$('.flexslider.flexslider-banner').flexslider({
			    controlNav: false
		    });
		  	$('.flexslider').flexslider({
		    	animation: "slide",
		    	directionNav: false,
		    	slideshow: false
		  	});
		});
	</script>
 </body>
 </html>
