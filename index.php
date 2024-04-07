<?php 
include 'connection.php';


session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Care Connect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/variables.css" rel="stylesheet">
 

  <!--  Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
       
        <h1>CareConnect<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="#"><span>Home</span> </a>
          
          </li>
          <li><a class="nav-link scrollto" href="adminlogin.php">Admin</a></li>
      <li><a class="nav-link scrollto" href="dsp.html">DPS</a></li>


          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
         
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
          <?php if(isset($_SESSION['name'])) { ?>
      <li><a class="nav-link scrollto" href="patientidform.php">Track patient</a></li>
      <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
    <?php } else { ?>


      <li><a class="btn-getstarted scrollto" href="signup.php">Get Started</a></li>
   
    <?php } ?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/anim.gif" class="img-fluid animated" style="width: 1500px; height: 500px; max-width: 100%;" alt="Animated Image">
      <h2>Welcome to <span>CareConnect</span></h2>
      <p>Your Personalized Healthcare Companion!.</p>
      <div class="d-flex">
      <?php if(isset($_SESSION['name'])) { ?>
        <a href="patientidform.php" class="btn-get-started scrollto">Track Patient</a><?php } ?>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>

  <main id="main">

   

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>The passion of The Sequals, students from Walchand Institute Of Technology, in developing 'Care Connect' has been defined by  dedication, tireless effort, and a deep-rooted passion for leveraging technology to address critical healthcare challenges. As aspiring IT students, we embarked on this project with a clear vision of revolutionizing patient care through innovation and professionalism.</p>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/group.png" class="img-fluid" alt="the sequals group photo">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Discover Our Vision and Mission</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Vision</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Mision</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Project Journey</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                
                <p>Our vision at Care Connect is to be a catalyst for positive change in the healthcare industry. We envision a future where healthcare services are seamlessly connected, easily accessible, and highly personalized. By harnessing the power of data analytics, artificial intelligence, and user-centered design, we aspire to create a comprehensive ecosystem that fosters collaboration between patients, caregivers, and healthcare providers. Through continuous innovation and a deep commitment to excellence, we strive to redefine the standards of patient care and contribute to a healthier, more connected world.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>At Care Connect, powered by The Sequals, our mission is to revolutionize healthcare through innovative technology solutions. We are dedicated IT students committed to creating a patient-centric platform that seamlessly integrates patient monitoring and tracking with an intelligent chatbot. Our goal is to provide healthcare professionals with actionable insights and empower patients to take control of their health journey. By leveraging cutting-edge IT capabilities, we aim to enhance the efficiency and effectiveness of healthcare delivery, ultimately improving the quality of life for individuals and communities.</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>In the halls of Walchand Institute Of Technology, a vision was born – a vision that transcended mere ideas and evolved into 'Care Connect'. Our journey was not just about creating a healthcare platform; it was about weaving a tapestry of innovation, dedication, and relentless pursuit of excellence. The inception of 'Care Connect' stemmed from our collective curiosity and passion for merging technology with humanity's most critical needs. Countless hours were spent immersed in the intricate world of healthcare systems, absorbing insights, and shaping our project's foundation with precision and purpose.

                  As we delved deeper into the realms of patient monitoring and modern technologies, our spirits remained unwavering, fueled by the belief that every line of code and every pixel on the screen carried the potential to transform lives. The days turned into nights as we navigated through challenges, embraced failures as stepping stones, and emerged stronger, more determined than ever.
                  
                  Our team's synergy was not merely a collaboration; it was a symphony of diverse perspectives, unified by a shared goal – to redefine healthcare experiences. From the first spark of an idea to the moment 'Care Connect' took flight, every milestone was a testament to our resilience, creativity, and unwavering commitment.
                  
                  Today, 'Care Connect' stands tall as a beacon of our journey – a journey that wasn't just about building software; it was about crafting a narrative of impact, empowerment, and hope. Our story is not just about where we started and where we are now; it's about the endless possibilities that lie ahead, fueled by the passion, dedication, and dreams of The Sequals.</p>

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    

   

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Don't be hesitate - whether you have questions, comments, or just want to say hello, we're all ears!</p>
        </div>

      </div>

     

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Feel free to reach out to us anytime for assistance or inquiries. We're here to help!</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Walchand Institute of Technology, Solapur</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>thesequalssih@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+91 8928287680</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
    <form method="POST" action="userlogin.php">
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
        </div><br>
        <button class="feed" type="submit" name="submit" >Send Message</button>
    </form>
</div>
<style>
.feed {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 24px;;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


    $asd = "INSERT INTO `contact`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')" ;
    $add = mysqli_query($conn,$asd) or die(mysqli_error($conn));
if($add)
{
echo "<script>;";
echo "window.alert('Feedback sent successfully....!');";
echo 'window.location.href = "Contact.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}
}
?> 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CareConnect</h3>
              <p>
                Walchand Institute of Technology, Solapur<br><br>
                <strong>Phone:</strong> +91 8928287680<br>
                <strong>Email:</strong> thesequalssih@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="signup.php">Register</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="userlogin.php">User Login</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="adminlogin.php">Admin Login</a></li>
            </ul>
          </div>

     

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>We welcome your questions and feedback. Don't hesitate to get in touch with us.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>CareConnect</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
           
            Designed by <a href="#">The Sequals</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script> -->

  <!-- <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/d2cfd506-0c4f-4254-99ae-d4bc41d608a8/webchat/config.js" defer></script> -->
</body>

</html>