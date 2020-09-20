<?php
    require 'includes/session.php';
    include 'includes/function.php';
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet"> 
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 


	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/navbar.css"> <!-- navbar style -->
	<link rel="stylesheet" href="css/view.css"> <!-- index style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c2d016f699.js" crossorigin="anonymous"></script>

 	<script src="js/spotlight.bundle.js"></script>

	<title>Oxford Garden Real Estate</title>
</head>
<body>
	<header>
		<div class="cd-logo"><a href="#0"><img src="img/logo.jpg" alt="Logo"></a>
		
		<h1 class="cd-headline clip is-full-width">
			<span class="cd-words-wrapper">
				<b class="is-visible">Welcome to <br clear="welcome"><span class="name"> Oxford Garden Real Estate.</span></b>
				<b>We are delighted <br clear="welcome"><span class="name">to have you on our site.</span></b>
				<b>Welcome to <br clear="welcome"><span class="name"> Oxford Garden Real Estate.</span></b>
				<b>Buy and sell today with<br clear="welcome"><span class="name"> Oxford Garden Real Estate.</span></b>
			</span>
		</h1>
	</div>

		<nav class="cd-main-nav-wrapper">
			<ul class="cd-main-nav" >
				<li><a href="index.php">HOME</a></li>
				<li><a href="properties-1.html" class="active">PROPERTIES</a></li>
				<li><a href="#0">ABOUT US</a></li>
				<li><a href="#0">CONTACT</a></li>
				<li><a href="#0">MY ACCOUNT</a></li>
				<li>
					<a href="#0" class="cd-subnav-trigger"><span class="categories">CATEGORIES</span></a>

					<ul style="color: #fff;">
						<li class="go-back" style="text-align: center;"><a href="#0">CATEGORIES</a></li>
						<li><a href="sale.html">FOR SALE</a></li>
						<li><a href="#0">FOR RENT</a></li>
						<li><a href="#0">LEASE</a></li>
						<li><a href="#0" class="placeholder">Placeholder</a></li>
					</ul>
				</li>
			</ul> <!-- .cd-main-nav -->
		</nav> <!-- .cd-main-nav-wrapper -->
		
		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
	</header>


<main class="cd-main-content">
<?php
    $response = get_property_by_id($_GET['pid']);
    if($response){
        while($db=mysqli_fetch_row($response)){
            $property_id = $db[1];
            $property_title =  $db[2];
            $description = $db[3];
            $address = $db[4];
            $city = $db[5];
            $state = $db[6];
            $country = $db[7];
            $property_price = $db[8];
            $property_category = $db[9];
            $no_of_beds = $db[10];
            $no_of_bathrooms = $db[11];
            $no_of_parking_spaces = $db[12];
            $transaction_type = $db[13];
            $market_status = $db[14];
            $posted_date = $db[15];

            $property_image = get_property_images($_GET['pid']);
            while ($image=mysqli_fetch_row($property_image)){
                $image_url = $image[2];
            }
        }
    }
?>
    <div class="sec-header"><b><a href="" class="sec-link">Property List</a> &nbsp;| &nbsp;<a href="" class="active2 sec-link">Current</a></b></b></div>
        <div class="cover">
            <div class="center">
                <div class="show-0"><img class="show" src="dashboard/uploads/<?php echo $image_url;?>"></div>

                <div class="spotlight-group">
                    <div class="gallery-cont">
                        <?php
                            $property_image = get_property_images($_GET['pid']);
                            $count = 0;
                            while ($image=mysqli_fetch_row($property_image)){
                                $count++;
                                $image_url = $image[2];
                                if($count <= 2 ){
                        ?>
                                <div class="spotlight image show" data-src="dashboard/uploads/<?php echo $image_url;?>" style="background-image:url(dashboard/uploads/<?php echo $image_url;?>)"></div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

<div class="details">
		<div class="center1">
				<div class="heading1"><?php echo $property_title?></div>
				<div class="price">For <?php echo $transaction_type?> @ &#8358;<?php echo $property_price?></div>
				<div class="heading2"><div class="cont3-row-3-col-3-1">
                    <i class="fas fa-map-marker-alt"> </i><?php echo $address;?>
                    </div><b>|</b>
                    <div class="cont3-row-3-col-3-1">
                        <i class="fas fa-clock"></i> Posted: 2020
                    </div>
				</div>

				<div class="heading3"><span class="prop-icon"><i class="fas fa-bath"></i> <?php echo $property_category?></span><br><br><span class="prop-icon"><i class="fas fa-person-booth"></i> <?php echo $no_of_beds?> Bedrooms</span><span class="prop-icon"><i class="fas fa-bath"></i> Duplex</span><br><br><span class="prop-icon"><i class="fas fa-person-booth"></i> <?php echo $no_of_bathrooms?> Bathroom</span>  </div>


				<div class="heading4"><div class="itm0">Features</div>
                    <div class="itm1"><span class="itm2">Address:</span>Oral estate lekki</div>
                    <div class="itm1"><span class="itm2">Condition:</span>Newly Built</div>
                    <div class="itm1"><span class="itm2">Housing Quality:</span>Standard</div>
                    <div class="itm1"><span class="itm2">Furnishing:</span>Unfurnished</div>
                    <div class="itm1"><span class="itm2">Total Rooms:</span>5</div>
                    <div class="itm1"><span class="itm2">Facilities:</span><div class="itm1b">Air Conditioning, Dishwasher, Hot Water, Microwave, Refrigerator, Gas</div></div>
				</div>

				<div class="heading5"><div class="itm0">Details</div>
				<div class="itm2">
				<p><?php echo $description?></p>
				</div>
				</div>

				<div class="heading3b">SHARE PICTURES  &nbsp;&nbsp;
					<a href="http://www.facebook.com/sharer.php?u=http://yourwebsite.com" target="_blank" class="link2"><i class="fa fa-facebook social-link1"></i></a>     
					<a href="https://www.instagram.com/sharer.php?u={{url()->current()}}" target="_blank" class="link2"><i class="fa fa-instagram social-link1"></i></a>
					<a href="http://twitter.com/home?status=Your Website Title- http://yourwebsite.com@TwitterUserName" target="_blank" class="link2"><i class="fa fa-twitter social-link1"></i></a>
				</div>

				<div class="heading3d">
					<a href="" style="color: #FF0000; font-size: 13pt;"><i class="far fa-heart"></i>&nbsp;&nbsp;<span style="color: #0B3363;">Save Property</span></a>
				</div>

			<div class="safety-guide">
				<div>
                <button type="button" class="is-primary" data-hc-control="content02">
                    Read Safety Guide &nbsp;<i class="fas fa-exclamation"></i>
                </button>

                <div data-hc-content="content02">
                    <div class="box">
                        <p>
                             	&#8226; Do not submit any upfront fees for a real estate inspection.<br>
    							&#8226; Do not go to unfamiliar places alone.<br>
    							&#8226; Double check real estate agency background. 
                        </p>
                    </div>
                </div>
                </div>

	                <a href=""><button type="button" class="is-primary">
	                    Report Abuse &nbsp;<i class="fab fa-font-awesome-flag"></i>
	                </button></a>
			</div>


		</div>

		<div class="center2">
				<div class="heading3c">Meet Agent</div>
				<div class="heading1b"><img src="img/slider2.jpg" class="profile-pixel"><span class="agent"> Mr. John Okah</span></div>
				<div class="heading5b" class="photo1 img1" onclick="document.getElementById('img1').style.display='block'"> <button class="agent-button">Show Contact</button>
				</div>

				
				<div class="heading5b"> <button class="agent-button">Book a Visit</button>
				</div>

				<div class="heading5b"> <button class="agent-button">Make more Inquiry</button>
				</div>
		</div>
</div>


		

<!--Footer-->
<div class="container7">
	<div class="center-ft"> 
			<div class="footer1"><div class="footer1b"><a href="" class="footer1b">Sell with us</a></div> 
									<div class="footer1b"><a href="" class="footer1b">Place Banner Advert</a></div>
									<div class="footer1b"><a href="" class="footer1b">Feature your property</a></div> 
			</div>

			<div class="cat-3">
					<div class="contact">
				 		<div class="contact-2">
					 		<p style=" margin-bottom: 15px;"><i class="fa fa-map-marker footer"></i> <span style="line-height: 0px;"><span style="color: #60BFE3;">Head Office:</span> No. 3 Millitary Street Onikan, Lagos.</span></p>
					 		<p style=" margin-bottom: 15px;"><i class="fa fa-map-marker footer"></i> <span style="line-height: 1.4em;"><span style="color: #60BFE3;">Branch Office:</span> Suit 206, Ist Floor,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pearl Km 23 Lekki-Epe Expressway,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Opp. Royal Garden Estate, Ajah Lagos.</span></p>
					 		<p style=" margin-bottom: 15px;"><i class="fa fa-phone footer"></i><span style="color: #60BFE3;">Phone</span> (+234) 8137647109, (+234) 8165808009</p>
					 		<p style=" margin-bottom: 15px;"><i class="fa fa-envelope footer"></i><span style="color: #60BFE3;">Email:</span>  info.oxfordgarden.com</p>
				 		</div>
			 		</div>

					<div class="block2">
					<div class="news-letter">Subscribe to Our NewsLetter</div>		
					<div class="container8">
						<form method="GET" action="http:window8.xyz" class="newsletter-form" target="_blank">
				        <div><input type="email" name="EMAIL" id="email" placeholder="Enter your email"></div>
				        <div><button type="submit" class="button">Subscribe</button></div>
				 		</form>
			 		</div>
			 		</div>			 
			</div>
	 		<div class="social-media">
				       <div><span style="color: #fff; ">Our Social Links:</span>
				           <a href=""><i class="fa fa-facebook social-link"></i></a>      
				           <a href=""><i class="fa fa-instagram social-link"></i></a>
				           <a href=""><i class="fa fa-twitter social-link"></i></a>  
				       </div>
			</div>

	 		<div class="links">
					<a href="" class="agre-link">Terms of Use </a>|
					<a href="" class="agre-link"> Privacy Policy</a>
			</div>	
	</div>
</div>


<div class="footer3">
	<p>&copy; 2020 Oxford Garden Real Estate Powered by <a href="microsystemtechs.com" target="_blank" style="color: #D92672; font-weight: 300;"> microsystem tech.</a>
</div>
	 
	<a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
</div>




</main>



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script src="script/jquery.min.js"></script>

	
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="js/spotlight.bundle.js"></script>


 <script src="js/handy-collapse.js"></script>
        <script>
            document.addEventListener(
                "DOMContentLoaded",
                () => {
                    //Basic Accordion
                    const basic = new HandyCollapse();
                    //Nested
                    const nested = new HandyCollapse({
                        nameSpace: "nested",
                        closeOthers: false
                    });
                    //Callback
                    const callback = new HandyCollapse({
                        nameSpace: "callback",
                        closeOthers: false,
                        onSlideStart: (isOpen, contentID) => {
                            console.log(isOpen);
                            const buttonEl = document.querySelector(`[data-callback-control='${contentID}']`);
                            if (!buttonEl) return;
                            if (isOpen) {
                                buttonEl.textContent = "Opened " + contentID;
                            } else {
                                buttonEl.textContent = "Closed " + contentID;
                            }
                        }
                    });
                    //Callback
                    const tab = new HandyCollapse({
                        nameSpace: "tab",
                        closeOthers: true,
                        isAnimation: false
                    });
                },
                false
            );
        </script>
        <!--Zoom in img col1-->
		    	<div class="modal" id="img1">
		           <div class="heading6">
		            <i class="fas fa-times" onclick="document.getElementById('img1').style.display='none'" class="close" title="Close Modal"></i>

		            <div>Phone: (+234) 000-0000-0000</div>
		            <div><a href=""><i class="fa fa-facebook social-link"></i></a>      
		           		<a href=""><i class="fa fa-instagram social-link"></i></a>
		           		<a href=""><i class="fa fa-twitter social-link"></i></a></div>
		           		<div><p style=" margin-bottom: 15px;"><i class="fa fa-envelope footer"></i>@gmail.com</p></div></div>
		     	</div> 

</body>
</html>