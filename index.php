<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Star Security Bouncer Pune, Maharashtra, India</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keyword" content="bouncer,security service,bodyguard,mobile security,company security,IT security companies,VIP security,club bouncer,female bouncer,Women Security,Bouncer in Pune,Celebrity Security"/>
	<meta name="description" content="Star Security Bouncer  is a Leading Security Services company providing Premium and Professional Top Class Security Personnel in India. Corporate Office in Pune Maharashtra, India" />

	<!-- css -->
	<link href="favicon.ico" rel="icon" type="image/png">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<!-- <link href="css/jcarousel.css" rel="stylesheet" /> -->
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link href="skins/default.css" rel="stylesheet"/>
	<link href="css/mycss.css" rel="stylesheet"/>

</head>
<body>
<div id="wrapper">
	<!-- start header -->
  <?php include 'header.inc' ?>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/starsecurityslide1.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers Pune" />
              </li>

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/starsecurityslide2.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers, Pune" />
              </li>

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/starsecurityslide3.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers, Pune" />
              </li>

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/starsecurityslide4.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers, Pune" />
              </li>

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/starsecurityslide5.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers, Pune" />
              </li>

              <li style="box-shadow: rgb(0, 137, 123) 0px 2px 15px;">
                <img src="img/slides/campussecurity.jpg" alt="Star Security Bouncers Pune" title="Star Security Bouncers, Pune" />
              </li>
              
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	<a href="#" class="scrolldown"><i class="fa fa-angle-down active"></i></a>
	</section>


	<section class="callaction">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="big-cta">
						<div class="cta-text">	
							<h1 class="callaction_head">Welcome To Star Security Bouncers</h1>
							<p class="p">We at Star Security and Bouncer are a team who provide Premium Security with Bouncer Class First point security personnel. We provide security for multiple category of services which are provided in our website. Our customers reputation and your security is our first priority. With STAR feel secure....
							</p>
							<center>
								<div class="box-bottom" style="padding: 5px 0;width: 100px;background-color: #F44336;border-radius: 5px;">
								<a href="about-us.php">Read more</a>
							</div>
							</center>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="content">

	<div class="container">
    <?php include 'our-services-locations.inc' ?>
		
	</div>

	</section>
<?php include 'footer.inc' ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get in touch with us with your requirements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="contactform" class="validateform">
                    <div class="row">
                        <div class="col-lg-4 field">
                            <input type="text" name="name" autocomplete="off" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-4 field">
                            <input type="text" name="email" autocomplete="off" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-4 field">
                            <input type="text" name="number" autocomplete="off" placeholder="Enter your Contact Number" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation">
                            </div>
                        </div>
                        <div class="col-lg-12 margintop10 field">
                            <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something" style="resize:verticle;"></textarea>
                            <div class="validation">
                            </div>
                            <p>
                                <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                                <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                            </p>
                        </div>
                    </div>
                </form>
                <script type="text/javascript">
    jQuery(function(){
        $('#contactform').submit(function(event){
          event.preventDefault(); 
        var fdata = $(this).serializeArray();
        $.ajax({
          type: 'POST',
          url: 'email.php',
          data: fdata,
          success: function(response){
                alert("Thank you for contacting us , our customer care will contact you shortly");
                location.reload();
          }
          });
        });
      });
</script>
    </div>
  </div>
</div>
</body>
</html>