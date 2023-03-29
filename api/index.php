
<?php
phpinfo();
 include 'includes/header.php' ?>
<style>/* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content/Box */
  .modal-content {
    position: absolute;
    margin-top: 70px;
    right: 10px;
    left: 20px;
    background-color: #fefefe;
    /* margin: 15% auto; 15%  */
    /* padding: 20px; */
    border: 1px solid #888;
    height: 70vh;
    width: 90%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button */
  .close {
    color: #000;
    float: right;
    font-size: 38px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }</style>
<body>
<?php include 'includes/navbar.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h2><b>Sacco</b> exit and deposit refund should be easy, fast and convinient for every sacco users.</h2>
          <h2><b>Guarantor's</b> paying for defaulted loan by principal borrower is a pain sacco member should not go through.</h2>
          <button  class="btn-get-started" id="myBtn">Get Started</button>

        </div>
      </div>
    </div>
    
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="card card-primary">
          <div class="card-header">
            <h4>Login To Continue</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="#" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>
              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div><br>
              <div class="form-group">
                <button type="submit" class="btn btn-info" tabindex="4">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Don't have an account? <a href="register.php">Create One</a>
        </div>
      </div>
    </div>
  </div>

</div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-6 d-flex align-items-stretch">
            <div class="content">
              <h3>Guarantor's Guard</h3>
              <p>Sacco Membership has never been better:</p>
                <p>1. Get your Refund 24/hrs on Exit.</p>
                <p>2. Buy shares to Boost your deposit anytime.</p>
                <p>3. Don't be liable for Defaulted loans you Guaranteed a member.</p>
              <a href="about.php" class="about-btn"><span>About Us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <img src="assets/img/Loan-Officer-640x462.jpg" alt="Logo" style="border-radius: 20px;height: 50vh;">
                </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter">9000+</span>
              <!-- <h1>9000+</h1> -->
              <p>Million Members</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-projector"></i>
              <span data-purecounter-start="0" data-purecounter-end="186" data-purecounter-duration="1" class="purecounter"></span>
              <p>Non-DT Sacco</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="175" data-purecounter-duration="1" class="purecounter"></span>
              <p>DT Sacco</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-clock"></i>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hrs Of G&G Support</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">More about G&G? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                You want to increase your deposit to boost your loan amount? Or how about total exit from your Sacco and looking to get your funds plus share within24hrs?.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Question sample 2? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Brief decription for Question 2</p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Question 3? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Brief description of question 3</p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients section-bg">
  <div class="container">

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client.jpg" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client2.jpg" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right" data-aos-delay="100">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client3.jpg" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right" data-aos-delay="200">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client4.jpg" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right" data-aos-delay="300">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client1.png" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right" data-aos-delay="400">
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-6">
        <div class="client-logo">
          <img src="assets/img/client7.jpg" class="img-fluid" style="height:70px; width:120px;border-radius:3px" alt="" data-aos="flip-right" data-aos-delay="500">
        </div>
      </div>

    </div>

  </div>
</section><!-- End Clients Section -->
  </main><!-- End #main -->

  <?php include 'includes/footer.php' ?>

<script>
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<<<<<<< HEAD:index.php
=======
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-circle"></i></a>
<a href="https://api.whatsapp.com/send/?phone=+254723139338&text=Hello%20G & G%20I%20am%20reaching%20out%20to%20enquire%20on%20..." class="whatsapp d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
<div id="preloader"><img src="assets/img/logo.png" alt=""></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
>>>>>>> 7da589f909aaadec76eb145fa714ca87bef3900e:index.html

  <?php include 'includes/scripts.php' ?>

</body>

</html>