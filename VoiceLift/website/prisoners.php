<?php

session_start();

// if ( !isset( $_SESSION[ 'user' ] ) ) header( 'location: index.php' );

// $user = $_SESSION[ 'user' ];
include( 'connection.php' );

// $username = $_SESSION['user']['username'];
// $fullnameQuery = 'SELECT * FROM voicelift.signup WHERE username = ?';
// $fullnameStmt = $conn->prepare($fullnameQuery);
// $fullnameStmt->execute([$username]);
// $fullnameInfo = $fullnameStmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>VoiceLift: Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
    <link href="assets/css/dashboard.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <h1>VoiceLift<span>.</span></h1>
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="index.php#services">Our Services</a></li>
                    <li><a href="index.php#testimonials">Testimonials</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="https://forms.gle/prB3HAi71ZRzXNXL9" target="_blank">Help and Feedback</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/footer-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Dashboard</li>
                </ol>
            </div>
        </div>
<!-- ======= Prisoner Services Section ======= -->
<section id="prisoner-services" class="prisoner-services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="service-grid">
            <!-- Education Service -->
            <div id="education" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-book"></i>
                </div>
                <h3>Education</h3>
                <p>Access educational resources and programs to enhance your knowledge and skills.</p>
                <a href="https://docs.google.com/document/d/1qgc9Q4497RsoRo2KlH7SzG-BPfJXDX9r/edit?usp=sharing&ouid=106331804207026413883&rtpof=true&sd=true" target="_blank" class="read-more">Read More</a>
                <!-- Add specific details or links related to education services -->
            </div>

            <!-- Lawyer Support Service -->
            <div id="lawyer_support" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
                <h3>Lawyer Support</h3>
                <p>Get assistance from legal experts and lawyers through chatting.</p>
                <a href="/lawyermanagementsystem/lawyermanagementsystem/index.php" class="read-more">Click Here</a>
            </div>

            <!-- Vocational Support Service -->
            <div id="vocational_support" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-tools"></i>
                </div>
                <h3>Vocational Support</h3>
                <p>Get assistance with job training, resume building, and career development.</p>
                <a href="https://docs.google.com/document/d/19h827qHrbT46O0FWIIEEh0YJO6jLuOHo/edit?usp=sharing&ouid=106331804207026413883&rtpof=true&sd=true" target="_blank" class="read-more">Read More</a>
                <!-- Add specific details or links related to vocational support services -->
            </div>

            <!-- Mental Health Service -->
            <div id="mental_health" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-people"></i>
                </div>
                <h3>Mental Health</h3>
                <p>Access counseling, therapy, and mental health support services.</p>
                <a href="https://voicelift-flask.onrender.com/" class="read-more">Check Your Mental Helath Status</a>
                <!-- Add specific details or links related to mental health services -->
            </div>

            <!-- Rights Directory Service -->
            <div id="rights_directory" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-journal-text"></i>
                </div>
                <h3>Rights Directory</h3>
                <p>Explore a directory of legal rights and regulations.</p>
                <a href="https://docs.google.com/document/d/1QmvqUajIjtPOGNXdtSE93WmfZ0p8j4Xo/edit?usp=sharing&ouid=106331804207026413883&rtpof=true&sd=true" target="_blank" class="read-more">Read More</a>
            </div>

            <!-- Complaint Desk Service -->
            <div id="complaint_desk" class="service-item">
                <div class="service-icon">
                    <i class="bi bi-exclamation-square"></i>
                </div>
                <h3>Complaint Desk</h3>
                <p>Submit complaints and feedback for prompt resolution.</p>
                <a href="https://docs.google.com/forms/d/1uiOoL8GPSc_0iDSAQqunR5MNlHR4kaYw_5S54xHw3Bg/edit?ts=65d4b364 " class="read-more" target="_blank">Click Here</a>
            </div>

            <!-- Add more service sections as needed -->
        </div>
    </div>
</section>
<!-- End Prisoner Services Section -->




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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="index.php#services">Our Services</a></li>
                            <li><a href="index.php#testimonials">Testimonials</a></li>
                            <li><a href="https://forms.gle/prB3HAi71ZRzXNXL9" target="_blank">Help and Feedback</a></li>
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

<script>
const serviceItems = document.querySelectorAll('.service-item');

serviceItems.forEach(item => {
    item.addEventListener('mousemove', e => {
        const xAxis = (window.innerWidth / 2 - e.pageX) / 10;
        item.style.transform = `rotateY(${xAxis}deg)`;
    });

    item.addEventListener('mouseleave', () => {
        item.style.transform = 'rotateY(0deg)';
    });
});


</script>

</html>
