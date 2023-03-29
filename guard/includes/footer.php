  
  <?php 
include 'includes/header.php';
include 'includes/header.php';
include 'includes/conn.php';

if(isset($_POST['subscribe'])){ 
  $email = $_POST['email'];
  $date = date('d-m-Y H:i:s');
  
  // check if email is already subscribed
  $result = mysqli_query($conn, "SELECT * FROM subscribers WHERE email = '$email'");
  if(mysqli_num_rows($result) > 0) {
    echo "<script>alert('You have already subscribed to our Newsletter.');document.location ='index.php';</script>";
  } else {
    $write = mysqli_query($conn, "INSERT INTO subscribers ( `email`,`date`) VALUES ('$email','$date')") or die(mysqli_error($conn));
    echo "<script>alert('Thank you for subscribing to Our NewsLetter.');document.location ='index.php';</script>";
  }
}
     
?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Guarantor's <span>Guard .</span></h3>
            <p>
              Quicks Mall <br>
              Kiambu, Thika Road<br>
              Nairobi - Kenya <br><br>
              <strong>Phone:</strong> +254 723 139 338<br>
              <strong>Email:</strong> guarantorsguardltd@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quick Navigation</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="register.php">Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms of Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Guarantor Protection</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sell/Buy Shares</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Exit Plan & Payment</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" name="subscribe" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          Copyright &copy; <strong><span style="color: #56b8e6;">Guarantor's Guard</span></strong> | All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-circle"></i></a>
<a href="https://api.whatsapp.com/send/?phone=+254723139338&text=Hello+G+&+G,+I+am+reaching+out+to+enquire+on+..." class="whatsapp d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
<div id="preloader"><img src="assets/img/logo.png" alt=""></div>