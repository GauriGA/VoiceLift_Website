<?php
session_start();

if ( $_POST ) {
    include( 'connection.php' );

    header( 'Location: login.php' );
}


?>

<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>VoiceLift: Sign Up</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="assets/img/logo.jpg" rel="icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/signup.css" rel="stylesheet">
        
        <title>SignUp Form</title>
    </head>

<body>

    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <h1>VoiceLift<span>.</span></h1>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="feedback.html">Help and Feedback</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/footer-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Sign Up</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Sign Up</li>
                </ol>
            </div>
        </div>
        <section id="signup" class="signup section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <div class="signup-container">
                        <div class="signup-heading">
                            <h2>Sign Up</h2>
                        </div>

                        <form class="SignUpForm" id="SignUpForm" action="sign.php" method="POST">
                            <div class="mb-3 input-icon">
                            <label for="userType" class="form-label visually-hidden">Are you a/an:</label>
                            <select class="form-select" id="userType" name="userType" required>
                                <option value="">Select</option>
                                <option value="admin">Admin</option>
                                <option value="prisoner">Prisoner</option>
                                <option value="lawyer">Lawyer</option>
                            </select>
                            <i class="bi bi-person"></i>
                            </div>

                            <div class="mb-3 input-icon">
                                <label for="fullname" class="form-label visually-hidden">Full Name:</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" required>
                                <i class="bi bi-person-fill"></i>
                            </div> 

                            <div class="mb-3 input-icon">
                                <label for="username" class="form-label visually-hidden">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                <i class="bi bi-lock-fill"></i>
                            </div>                            

                            <div class="mb-3 input-icon">
                                <label for="password" class="form-label visually-hidden">Password:</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            
                            <div class="mb-3 input-icon">
                                <label for="confirm_password" class="form-label visually-hidden">Confirm Password:</label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <div class="form-footer">
                                <p>Already have an account? <a href="login.php">Login</a></p>
                            </div><br>
                            

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>VoiceLift</h3>
                            <p><strong>Phone:</strong> +1 5589 55488 55<br><strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="index.html#sevices">Our Services</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="feedback.html">Help and Feedback</a></li>
                          </ul>
                    </div>
                    <!-- <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>VoiceLift</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
