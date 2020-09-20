<?php
    require 'includes/session.php';
    include 'includes/header.php';
    include 'includes/function.php';
?>
<main class="cd-main-content">
    <div id="slides">  
        <div class="slide showing test parallax"><a class="" href="iconic1.html">
            <div class="slide-itm1">
            <b>#FIND YOUR HOUSE IN YOUR CITY</b><br>
            <span class="slide-itm">#Safest means of acquiring a property</span>
            </div></a>    
        </div>
        
        <div class="slide test parallax"><a class="" href="iconic2.html">
            <div class="slide-itm1">
            <b>#FIND YOUR HOUSE IN YOUR CITY</b><br>
            <span class="slide-itm">#Safest means of acquiring a property</span>
            </div></a>    
        </div>

        <div class="slide test parallax"><a class="" href="iconic3.html">
            <div class="slide-itm1">
            <b>#FIND YOUR HOUSE IN YOUR CITY</b><br>
            <span class="slide-itm">#Safest means of acquiring a property</span>
            </div></a>        
        </div>

        <div class="slide test parallax"><a class="" href="iconic4.html">
            <div class="slide-itm1">
            <b>#FIND YOUR HOUSE IN YOUR CITY</b><br>
            <span class="slide-itm">#Safest means of acquiring property</span>
            </div></a>     
        </div>

        <div class="slide test parallax"><a class="" href="iconic5.html">
            <div class="slide-itm1">
            Galma Multipurpose Dam Project, Galma River in Kaduna State.
            </div></a>  
        </div>
    </div>

  <div class="buttons">
    <button class="controls" id="previous"><i class="fas hid fa-angle-double-left"></i> </button>

    <button class="controls" id="pause" style="visibility: hidden;"></button>

    <button class="controls" id="next"> <i class="fas hid fa-angle-double-right"></i></button>
  </div>

<span class="animated bounce"></span>

<!--container1 Starts Here-->
<div class="container1">
	<div class="cont1-row1">
		<div class="cont0-row-1"><h2 class="ser-h1">Search Property Availability</h2>
    		<h4 class="ser-h0">Enjoy Paradise Here on Earth.</h4>
		</div>
		<form action="properties.php" method="GET">
            <div class="cat-2">
                <div class="cat-3">
                    <div cont1-col-1>
                        <div class="control-group">
                            <label for="select-beast">Location:</label>
                            <select id="select" placeholder="Pick a state..." name="state">
                                <option value="">Any</option>
                                <option value="Abia">Abia</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                            </select>
                        </div>
                    </div>
                    <div cont1-col-1>
                        <div class="control-group">
                            <label for="select-beast">Category:</label>
                            <select id="select" placeholder="Pick a state..." name="category">
                                <option value="">All Category</option>
                                <option value="Sale">For Sale</option>
                                <option value="Rent">For Rent</option>
                                <option value="Lease">Lease</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="cat-3">
                    <div cont1-col-1>
                        <div class="control-group">
                            <label for="select-beast">Type:</label>
                            <select id="select" placeholder="Pick a state..." name="type">
                                <option value="">Any</option>
                                <option value="House">House</option>
                                <option value="Flat">Flat</option>
                                <option value="Self-con">Self contained Flat</option>
                                <option value="Mini-Flat">Mini-Flat</option>
                                <option value="Office">Office</option>
                                <option value="BQ">Room/Boys quarter</option>
                                <option value="Warehouse">Warehouse</option>
                                <option value="Shop">Shop</option>
                                <option value="Land">Land</option>
                            </select>
                        </div>
                    </div>

                    <div cont1-col-1>
                        <div class="control-group">
                            <label for="select-beast">Max Price:</label>
                            <select id="select" placeholder="Pick a state..." name="max_price">
                                <option value="">All</option>
                                <option value="500000000">From &#8358;500,000,000</option>
                                <option value="100000000">From &#8358;100,000,000</option>
                                <option value="50000000">From &#8358;50,000,000</option>
                                <option value="10000000">From &#8358;10,000,000</option>
                                <option value="5000000">From &#8358;5,000,000</option>
                                <option value="500000">From &#8358;500,000</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <input type="text" name="action" value="filter" hidden>
            <div class="cont1-col-1" style="display: flex; justify-content: center;">
                <button type="submit" class="submit"><i class="fas fa-search"></i> Search...</button>	
            </div>
        </form>
	</div>
</div>



<!--container3 Starts Here-->
<div class="container3">
	<div class="center block">
			<div class="row1-itm1"><h2 class="ser-h1">Recent Properties</h2><h4 class="ser-h2">Acquire Paradise Here on Earth.</h4>
			</div>


<div class="cat-3">
	<div class="cat-2b">
	
            <?php
                $properties = get_all_properties();
                $count = 0;
                if($properties){
                while ($db=mysqli_fetch_row($properties)){
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
                    if($count < 4){
                        $count++;
            ?>
			    <!--Recent Properties1 starts-->
				<div class="cont3-row-2">
					<a href="view.php?pid=<?php echo $property_id;?>">
						<div class="cont3-row-3-col-1 <?php echo strtolower($transaction_type)?>">
								<span class="prop-tag"><?php echo $transaction_type;?></span>
						</div>

						<div class="cont3-row-3-col-2">
								<img src="img/slider3.jpg" class="cont3-img">
						</div>
						<div class="cont3-row-3-col-3">
								<div class="cont3-row-3-col-3-1">
								<h4 class="ser-h3"><?php echo $property_title?></h3>
								</div>

								<div class="cont3-row-3-col-3-1">
								<i class="fas fa-map-marker-alt"></i> <?php echo $address?> 
								</div>

								<div class="cont3-row-3-col-3-1">
								<i class="fas fa-clock"></i> Posted: 2020
								</div>

								<div class="divider">
									<div class="cont3-row-3-col-3-2">
										<span class="prop-icon"><i class="fas fa-bath"></i> <?php echo $property_category?></span><br><br>
										<span class="prop-icon"><i class="fas fa-person-booth"></i> <?php echo $no_of_beds;?> Bedrooms</span> 
									</div>

									<div class="cont3-row-3-col-3-2"> 
										<span class="prop-icon"><i class="fas fa-bath"></i> <?php echo $no_of_bathrooms?> Bathrooms</span><br><br>
										<span class="prop-icon"><i class="fas fa-person-booth"></i><?php echo $no_of_parking_spaces?> Parking Space</span>
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
            }
            ?>

	</div>
	</div>
	</div>
</div>
</div>
<!--container3 Ends Here-->

<!--container4 Starts Here-->
<div class="container4">
	<div class="center block">
		<div class="cont4-row-1">
			<div class="row1-itm1"><h2 class="ser-h1">Featured Properties</h2><h4 class="ser-h2">Find Your Dream Home.</h4>
			</div>
		</div>

		<div class="container4">
			<div class="divider2">
				<div class="cat-3"><div class="cat-2b">
				<div class="cont4-row-4-itm1">
				<a href="">
					<div class="cont4-img-1"><img src="img/slider1.jpg"  class="cont4-img-2"></div>
                    <?php
                        if(get_all_apartments()){
                            $apartments_count = get_all_apartments()->num_rows;
                        }else{
                            $apartments_count = 0;
                        }
                    ?>
					<div class="cont4-row-4-itm2">Apartments <br><span class="av">  <?php echo $apartments_count;?> Available</span></div>
				</a>
				</div>

				<div class="cont4-row-4-itm1">
				<a href="">
					<div class="cont4-img-1"><img src="img/slider2.jpg"  class="cont4-img-2"></div>
                    <?php
                        if(get_all_restaurants()){
                            $restaurants_count = get_all_restaurants()->num_rows;
                        }else{
                            $restaurants_count = 0;
                        }
                    ?>
					<div class="cont4-row-4-itm2">Restaurants <br><span class="av"> <?php echo $restaurants_count?> Available</span></div>
				</a>
				</div>
				</div>
				
				<div class="cat-2b">
				<div class="cont4-row-4-itm1">
				<a href="">
					<div class="cont4-img-1"><img src="img/slider3.jpg"  class="cont4-img-2"></div>
                    <?php
                        if(get_all_flats()){
                            $flats_count = get_all_flats()->num_rows;
                        }else{
                            $flats_count = 0;
                        }
                    ?>
					<div class="cont4-row-4-itm2">Flats <br><span class="av"> <?php echo $flats_count?> Available</span></div>
				</a>
				</div>

				<div class="cont4-row-4-itm1">
				<a href="">
					<div class="cont4-img-1"><img src="img/slider3.jpg"  class="cont4-img-2"></div>
                    <?php
                        if(get_all_farm()){
                            $farm_count = get_all_farm()->num_rows;
                        }else{
                            $farm_count = 0;
                        }
                    ?>
					<div class="cont4-row-4-itm2">Farm <br><span class="av"> <?php echo $farm_count?> Available </span></div>
				</a>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container5">
	<div class="cover">
		<div class="divider3">
			<div class="panel">
			<h4 class="ser-h4">ABOUT<br>OXFORD GARDEN REAL ESTATE LTD</h4> <p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation. </p>Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.</p>
			</div>
			<button class="accordion"><a href="">Read More</a></button>
		</div>
	</div>
</div>


<!--container2 Starts Here-->
<div class="container2">
	<div class="center block">
		<div class="cont2-row-1">
			<div class="row1-itm1"><h2 class="ser-h1">Our Service</h2><h4 class="ser-h2">What we do for you</h4>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>
		<div class="cat-3">
		<div class="cont2-row-2 cont2-row-2a">
			<div class="row-1-col-1"><img src="img/cont2-icon1.png" class="cont2-icon"></div>

			<div class="row-1-col-2"><h2 class="ser-h3">Renting and Selling Services</h2>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>

		<div class="cont2-row-2 cont2-row-2b">
			<div class="row-1-col-1"><img src="img/cont2-icon2.jpg" class="cont2-icon"></div>

			<div class="row-1-col-2"><h2 class="ser-h3">Property Management</h2>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>

		<div class="cont2-row-2 cont2-row-2c">
			<div class="row-1-col-1"><img src="img/cont2-icon3.png" class="cont2-icon"></div>

			<div class="row-1-col-2"><h2 class="ser-h3">Property Listing</h2>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>
		</div>

		<div class="cat-4">
		<div class="cont2-row-2 cont2-row-2d">
			<div class="row-1-col-1"><img src="img/cont2-icon1.png" class="cont2-icon"></div>

			<div class="row-1-col-2"><h2 class="ser-h3">Building</h2>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>

		<div class="cont2-row-2 cont2-row-2e">
			<div class="row-1-col-1"><img src="img/cont2-icon2.jpg" class="cont2-icon"></div>

			<div class="row-1-col-2"><h2 class="ser-h3">Construction</h2>
			Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres preservation.
			</div>
		</div>
		</div>
	</div>
</div>
<!-- ======= Tetstimonials Section ======= -->

<div class="cont6-row-1">
		<div class="row1-itm1"><h2 class="ser-h1">Testimonials</h2><h4 class="ser-h2">What People Say About Us</h4>
		</div>
</div>
	    <section class="testimonials" data-aos="fade-up">     
	        <div class="owl-carousel testimonials-carousel">
	          <div class="testimonial-item">
	            <img src="img/testimonials-1.jpg" class="testimonial-img" alt="">
	            <h3>Saul Goodman</h3>
	            <h4>Ceo &amp; Founder</h4>
	            <p>
	              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
	              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="img/testimonials-2.jpg" class="testimonial-img" alt="">
	            <h3>Sara Wilsson</h3>
	            <h4>Designer</h4>
	            <p>
	              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
	              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="img/testimonials-3.jpg" class="testimonial-img" alt="">
	            <h3>Jena Karlis</h3>
	            <h4>Store Owner</h4>
	            <p>
	              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
	              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="img/testimonials-4.jpg" class="testimonial-img" alt="">
	            <h3>Matt Brandon</h3>
	            <h4>Freelancer</h4>
	            <p>
	              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
	              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="img/testimonials-5.jpg" class="testimonial-img" alt="">
	            <h3>John Larson</h3>
	            <h4>Entrepreneur</h4>
	            <p>
	              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
	              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
	              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
	            </p>
	          </div>
	        </div>
	    </section><!-- End Ttstimonials Section -->



<!--Our Partners-->
<div class="cont6-row1-itm1">
<div style="width: 90%;">
<h2 class="ser-h1">Our Partners/Clients</h2>
<h4 class="ser-h2">What People Say About Us</h4>
</div>
</div>
<iframe src="partner/partner.html" class="partner"></iframe>

<!--FAQS-->
<div class="cont6-row1-itm1">
	<div style="width: 90%;">
		<h2 class="ser-h1">
		Frequently Asked Questions </h2>
		<h4 class="ser-h2">What People Say About Us</h4>
	</div>
</div>

<iframe src="partner/faqs.html" class="faqs"></iframe>

<?php
    include 'includes/footer.php';
?>