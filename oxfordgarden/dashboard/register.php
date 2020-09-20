<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap styles -->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custom-css.css" rel="stylesheet" />


        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet"> 
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="../css/navbar.css"> <!-- navbar style -->
        <link rel="stylesheet" href="../css/style.css"> <!-- index style -->
        <script src="../js/modernizr.js"></script> <!-- Modernizr -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c2d016f699.js" crossorigin="anonymous"></script>

        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

        <title>Oxford Garden Real Estate</title>
    </head>
    <body>
        <header>
            <div class="cd-logo"><a href="#0"><img src="../img/logo.jpg" alt="Logo"></a>
            
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
                <li><a href="/oxfordgarden/" class="active">HOME</a></li>
                <li><a href="properties-1.html">PROPERTIES</a></li>
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="/oxfordgarden/dashboard">MY ACCOUNT</a></li>
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
        <div id="layoutAuthentication" style="margin-top:10%;">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <?php
                                    if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                ?>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold txt-lg my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="includes/process.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" name="first_name" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" name="last_name" id="inputLastName" type="text" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Contact -->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Phone</label>
                                                        <input class="form-control py-4" name="phone_number" id="inputFirstName" type="text" placeholder="Enter Phone Number" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                        <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" name="cpassword" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="small mb-3">Account Type</label>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline mb-3 mr-2">
                                                        <input class="form-check-input" type="radio" name="account_type" id="accountTypeRadio" value="005" checked>
                                                        <label class="small form-check-label" for="accountTypeRadio">
                                                            Individual [searching for property]
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-3 mr-2">
                                                        <input class="form-check-input" type="radio" name="account_type" id="accountTypeRadio" value="002">
                                                        <label class="small form-check-label" for="accountTypeRadio">
                                                            Property Owner
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check form-check-inline mb-3 mr-2">
                                                        <input class="form-check-input" type="radio" name="account_type" id="accountTypeRadio" value="003">
                                                        <label class="small form-check-label" for="accountTypeRadio">
                                                            Property Developer
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-3 mr-2">
                                                        <input class="form-check-input" type="radio" name="account_type" id="accountTypeRadio" value="004">
                                                        <label class="small form-check-label" for="accountTypeRadio">
                                                            Agent
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button type="submit" name="register" class="btn btn-primary btn-block">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="?action=login" class="text-primary">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
