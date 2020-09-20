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
    <link rel="stylesheet" href="css/properties-1.css"> <!-- index style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c2d016f699.js" crossorigin="anonymous"></script>

    <title>Oxford Garden Real Estate</title>
</head>

<body>
    <header>
        <div class="cd-logo"><a href="#0"><img src="img/logo.jpg" alt="Logo"></a>
            <h1 class="cd-headline clip is-full-width">
                <span class="cd-words-wrapper">
                    <b class="is-visible">Welcome to <br clear="welcome"><span class="name"> Oxford Garden Real
                            Estate.</span></b>
                    <b>We are delighted <br clear="welcome"><span class="name">to have you on our site.</span></b>
                    <b>Welcome to <br clear="welcome"><span class="name"> Oxford Garden Real Estate.</span></b>
                    <b>Buy and sell today with<br clear="welcome"><span class="name"> Oxford Garden Real
                            Estate.</span></b>
                </span>
            </h1>
        </div>

        <nav class="cd-main-nav-wrapper">
            <ul class="cd-main-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#0" class="active">PROPERTIES</a></li>
                <li><a href="#0">ABOUT US</a></li>
                <li><a href="#0">CONTACT</a></li>
                <li><a href="#0">MY ACCOUNT</a></li>
                <li>
                    <a href="#0" class="cd-subnav-trigger"><span class="categories">CATEGORIES</span></a>

                    <ul style="color: #fff;">
                        <li class="go-back" style="text-align: center;"><a href="#0">CATEGORIES</a></li>
                        <li><a href="sale.html">FOR SALE</a></li>
                        <li><a href="rent.html">FOR RENT</a></li>
                        <li><a href="lease.html">LEASE</a></li>
                        <li><a href="#0" class="placeholder">Placeholder</a></li>
                    </ul>
                </li>
            </ul> <!-- .cd-main-nav -->
        </nav> <!-- .cd-main-nav-wrapper -->

        <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
    </header>

    <main class="cd-main-content">
        <div id="slides">
            <div class="slide showing test parallax">
                <div class="slide-itm1">
                </div>
            </div>
            <div class="slide test parallax">
                <div class="slide-itm1">
                </div>
            </div>
            <div class="slide test parallax">
                <div class="slide-itm1">
                </div>
            </div>
            <div class="slide test parallax">
                <div class="slide-itm1">
                </div>
            </div>
            <div class="slide test parallax">
                <div class="slide-itm1">
                </div>
            </div>
        </div>

        <div class="cover">
            <!--container3 Starts Here-->
            <div class="container3">
                <div class="center block">
                    <div class="row1-itm1">
                        <h2 class="ser-h1">Available Properties</h2>
                        <h4 class="ser-h2">Acquire Paradise Here on Earth.</h4>
                    </div>
                    <div class="cat-3">
                        <div class="cat-2b">
                            <?php
                                // Get filtered result
                                if(isset($_GET['action'])){
                                    $state = $_GET['state'];
                                    $category = $_GET['category'];
                                    $type = $_GET['type'];
                                    $max_price = $_GET['max_price'];

                                    // query db based on filter
                                    $properties = $connection->query("SELECT * FROM `property_listing` WHERE (state = '{$state}' OR transaction_type = '{$category}' OR property_category = '{$type}' OR price <= $max_price)");
                                    if($properties){
                                        $count = 0;
                                        while ($db=mysqli_fetch_row($properties)){
                                            $count++;
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
                        
                                            $property_image = get_property_images($property_id);
                                            while ($image=mysqli_fetch_row($property_image)){
                                                $image_url = $image[2];
                                            }               
                            ?> 
                                                <!--Recent Properties1 starts-->
                                                <div class="cont3-row-2 sale-cat" data-aos="fade-up" data-aos-delay="200">
                                                    <a href="view.html">
                                                        <div class="cont3-row-3-col-1 <?php echo strtolower($transaction_type)?>">
                                                            <span class="prop-tag"><?php echo $transaction_type;?></span>
                                                        </div>

                                                        <div class="cont3-row-3-col-2">
                                                            <img src="img/slider3.jpg" class="cont3-img">
                                                        </div>
                                                        <div class="cont3-row-3-col-3">
                                                            <div class="cont3-row-3-col-3-1">
                                                                <h4 class="ser-h3"><?php echo $property_title?>
                                                                    </h3>
                                                            </div>

                                                            <div class="cont3-row-3-col-3-1">
                                                                <i class="fas fa-map-marker-alt"></i> </i> <?php echo $address?> 
                                                            </div>

                                                            <div class="cont3-row-3-col-3-1">
                                                                <i class="fas fa-clock"></i> Posted: 2020
                                                            </div>

                                                            <div class="divider">
                                                                <div class="cont3-row-3-col-3-2">
                                                                    <span class="prop-icon"><i class="fas fa-bath"></i>
                                                                    <?php echo $property_category?></span><br><br>
                                                                    <span class="prop-icon"><i class="fas fa-person-booth"></i> </i> <?php echo $no_of_beds;?> 
                                                                        Bedrooms</span>
                                                                </div>

                                                                <div class="cont3-row-3-col-3-2">
                                                                    <span class="prop-icon"><i class="fas fa-bath"></i> <?php echo $no_of_bathrooms?>
                                                                        Bathrooms</span><br><br>
                                                                    <span class="prop-icon"><i class="fas fa-person-booth"></i><?php echo $no_of_parking_spaces?> Parking
                                                                        Space</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="cont3-row-3-col-4">
                                                            <span class="price">&#8358;<?php echo $property_price;?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                
                            <?php
                                        }
                                    }
                                }else{
                                   echo '<h4 class="ser-h2">No results Found</h4>' ;
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>

            <!--container3 Ends Here-->

            <!-- <div class="nav-button">
                <a href=""><button class="left" style="display: none;"><i class="fas fa-caret-left nav-b"></i><b
                            class="nav-b"> Previous</b></button></a>
                <div class="nav-a"><a href="" class="active-pager">1</a><a href="properties-2.html"
                        class="pager">2</a><a href="" class="pager">3</a><a href="" class="pager">4</a><a href=""
                        class="pager">5</a></div>
                <a href="properties-2.html"><button class="right"><b class="nav-b">Next</b> <i
                            class="fas fa-caret-right nav-b"></i></button></a>
            </div> -->
        </div>



        <!--Footer-->
        <div class="container7">
            <div class="center-ft">
                <div class="footer1">
                    <div class="footer1b"><a href="" class="footer1b">Sell with us</a></div>
                    <div class="footer1b"><a href="" class="footer1b">Place Banner Advert</a></div>
                    <div class="footer1b"><a href="" class="footer1b">Feature your property</a></div>
                </div>

                <div class="cat-3">
                    <div class="contact">
                        <div class="contact-2">
                            <p style=" margin-bottom: 15px;"><i class="fa fa-map-marker footer"></i> <span
                                    style="line-height: 0px;"><span style="color: #60BFE3;">Head Office:</span> No. 3
                                    Millitary Street Onikan, Lagos.</span></p>
                            <p style=" margin-bottom: 15px;"><i class="fa fa-map-marker footer"></i> <span
                                    style="line-height: 1.4em;"><span style="color: #60BFE3;">Branch Office:</span> Suit
                                    206, Ist Floor,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pearl Km 23 Lekki-Epe
                                    Expressway,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Opp. Royal Garden Estate, Ajah
                                    Lagos.</span></p>
                            <p style=" margin-bottom: 15px;"><i class="fa fa-phone footer"></i><span
                                    style="color: #60BFE3;">Phone</span> (+234) 8137647109, (+234) 8165808009</p>
                            <p style=" margin-bottom: 15px;"><i class="fa fa-envelope footer"></i><span
                                    style="color: #60BFE3;">Email:</span> info.oxfordgarden.com</p>
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
            <p>&copy; 2020 Oxford Garden Real Estate Powered by <a href="microsystemtechs.com" target="_blank"
                    style="color: #D92672; font-weight: 300;"> microsystem tech.</a>
        </div>

        <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>






    </main>



    <script type="text/javascript">
        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }

        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 3000);

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function previousSlide() {
            goToSlide(currentSlide - 1);
        }

        function goToSlide(n) {
            slides[currentSlide].className = 'slide';
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }


        var playing = true;
        var pauseButton = document.getElementById('pause');

        function pauseSlideshow() {
            pauseButton.innerHTML = '&#9658;'; // play character
            playing = false;
            clearInterval(slideInterval);
        }

        function playSlideshow() {
            pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
            playing = true;
            slideInterval = setInterval(nextSlide, 0);
        }

        pauseButton.onclick = function () {
            if (playing) { pauseSlideshow(); }
            else { playSlideshow(); }
        };

        var next = document.getElementById('next');
        var previous = document.getElementById('previous');

        next.onclick = function () {
            nextSlide();
        };
        previous.onclick = function () {
            previousSlide();
        };


    </script>




    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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