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
</main>





<script type="text/javascript">
var controls = document.querySelectorAll('.controls');
for(var i=0; i<controls.length; i++){
    controls[i].style.display = 'inline-block';
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,9000);

function nextSlide(){
    goToSlide(currentSlide+1);
}

function previousSlide(){
    goToSlide(currentSlide-1);
}

function goToSlide(n){
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}


var playing = true;
var pauseButton = document.getElementById('pause');

function pauseSlideshow(){
    pauseButton.innerHTML = '&#9658;'; // play character
    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow(){
    pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
    playing = true;
    slideInterval = setInterval(nextSlide,1000);
}

pauseButton.onclick = function(){
    if(playing){ pauseSlideshow(); }
    else{ playSlideshow(); }
};

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
        nextSlide();
};
previous.onclick = function(){
    previousSlide();
};


</script>

<script type="text/javascript">
 $(function(){
     parallaxInit('.parallax')
 });
</script>


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






</body>
</html>