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
                            <div class="col-lg-5">
                                <?php
                                    if(isset($_SESSION['msg'])){
                                        echo $_SESSION['msg'];
                                        unset($_SESSION['msg']);
                                    }
                                ?>
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-bold txt-lg my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="includes/process.php" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="small custom-control-label" for="rememberPasswordCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small text-primary" href="password.html">Forgot Password?</a>
                                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="?action=register" class="text-primary">Need an account? Sign up!</a></div>
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
        <script src="../js/scripts.js"></script>
    </body>
</html>
