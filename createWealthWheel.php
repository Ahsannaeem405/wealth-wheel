<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>create wealth wheel - Wealth Wheel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img//favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</head>
<style type="">

button {
  background: cornflowerblue;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 8px;
  font-family: 'Lato';
  margin: 5px;
  text-transform: uppercase;
  cursor: pointer;
  outline: none;
}

button:hover {
  background: orange;
}
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="howItWork.php">How it Works</a></li>
          <li><a class="nav-link scrollto" href="availableWealthWheel.php">Available Wealth Wheels</a></li>
          <li><a class="nav-link scrollto" href="contac.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Create Wealth Wheel</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
          <div class="d-flex ww-banner-btn">
            <a href="signup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
            <a href="login.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
            <a href="createWealthWheel.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
          </div>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= F.A.Q Section ======= -->
    <section id="Signup" class="faq signup ww-form-main">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Create Wealth Wheel</h2>
          <p>Please enter the details</p>
        </div>
        <div class="ww-form-wrp" data-aos="fade-right">
            <form action="" method="">
            <div class="form-group">
              <label for="wheel-number">Wheel Number</label>
              <input type="Number" disabled="" class="form-control" id="wheel-number" aria-describedby="wheel-number" placeholder="1 2 3 ...">
            </div>
            <div class="form-group">
              <label for="wheel-name">Wheel Name</label>
              <input type="text" class="form-control" id="wheel-name" placeholder="wheel name">
            </div>
            <div class="form-group">
              <label for="cog-price">Cog Price</label>
              <input type="number" class="form-control" id="cog-price" placeholder="cog price">
            </div>
            <div class="form-group">
              <label for="">Image</label>
              <input type="file" class="form-control" accept="image/*" />
            </div>
            <button type="button" class="btn btn-primary confirmation-message first">Save</button>
          </form>
        </div>

      </div>
      <div class="toast">
        <div class="toast-header">
          Toast Header
        </div>
        <div class="toast-body">
          Some text inside the toast body
        </div>
      </div>
    </section>




    <!-- <button class="first1">Title Only</button>
    <button class="second">Title and Text</button>
    <button class="third">Title, Text and Icon</button> -->

  </main>
  <!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <img src="assets/img/logo.png" class="footer-img" alt="">
        </div>
        <div class="col-lg-3 col-md-3"> 
          <h3>FEATURES</h3>
          <div class="footer-links">
            <!-- <a href="about.php">About us</a> -->
            <a href="howItWork.php">how it works</a>
            <a href="availableWealthWheel.php">available wealth wheels</a>
            <a href="contac.php">Contact us</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <h3>DETAILS</h3>
          <div class="footer-links">
            <a href="teramsAndConditions.php">terms & conditions</a>
            <a href="privacyPolicy.php">privacy policy</a>
            <a href="faq.php">FAQs</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <h3>FOLLOW US</h3>
          <div class="social-links my-4">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
        </div>
      </div>
      <div class="copyright mt-5">
        &copy; Copyright <strong><span>Wealth Wheel</span></strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="">
    $(document).ready(function () {
        document.querySelector(".first").addEventListener('click', function(){
          // Swal.fire("Our First Alert");
          Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Yes',
            // denyButtonText: `Don't save`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
              Swal.fire('Changes are not saved', '', 'info')
            }
          });
        });

        // document.querySelector(".second").addEventListener('click', function(){
        //   Swal.fire("Our First Alert", "With some body text!");
        // });

        // document.querySelector(".third").addEventListener('click', function(){
        //   Swal.fire("Our First Alert", "With some body text and success icon!", "success");
        // });


        // $(".first").click(function(){
        //   $('.toast').toast('show');
        // });


    });
    
  </script>

</body>

</html>