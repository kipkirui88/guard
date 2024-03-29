<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php';
include 'includes/conn.php';
if(isset($_POST['submit'])){ 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $date =  date('d-m-Y H:i:s') ;
    $write =mysqli_query($conn,"INSERT INTO mails ( `name`,`email`, `message`,`subject`,`date`) 
    VALUES (' $name','$email','$message','$subject','$date')") or die(mysqli_error($conn));
     echo "<script>alert('Message sent Successfully.');document.location ='index.php';</script>"; }        
?>


<body>

<?php include 'includes/navbar.php' ?>

  <main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background:#1b2f45;">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contact Us</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
           </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Quick Mall, Thika Road. Nairobi - Kenya</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@g&g.com /<br>guarantorsguardltd@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+254 723 139 338</p>
                </div>
              </div>
            </div>
          </div>
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6">
                  <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127642.59193203965!2d36.834508799999995!3d-1.2746751999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1671460286212!5m2!1sen!2ske" 
                  width="500" height="430" style="border: 1px solid #1b2f45;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
          <div class="col-lg-10">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php include 'includes/footer.php' ?>


<?php include 'includes/scripts.php' ?>


</body>

</html>
