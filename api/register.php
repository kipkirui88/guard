<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<?php
include "includes/conn.php";
if(isset($_POST['submit'])){
  $adm = 'gg'.'/'.mt_rand(1, 99).'/'.date('Y'); 
  $name=$_POST['name'];
  $id_no=$_POST['id_no'];
  $sacco=$_POST['sacco'];
  $membership=$_POST['membership'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $kra=$_POST['kra'];
  $address=$_POST['address'];
  $kin_name=$_POST['kin_name'];
  $relationship=$_POST['relationship'];
  $contact=$_POST['contact'];
  if(isset($_FILES['passport']['name'])){
    $passport = $_FILES['passport']['name'];
    $file_tmp = $_FILES['passport']['tmp_name'];
    move_uploaded_file($file_tmp, "./docs/".$passport);
    
  } 
  if(isset($_FILES['document']['name'])){
    $document = $_FILES['document']['name'];
    $file_tmp = $_FILES['document']['tmp_name'];
    move_uploaded_file($file_tmp, "./docs/".$document);
    
  }
    $write =mysqli_query($conn,"INSERT INTO users ( `adm`,`name`,`id_no`,`sacco`,`password`,`membership`,`phone`,`kra`,`address`,`kin_name`,`relationship`,`contact`,`passport`,`docs`) 
    VALUES ('$adm','$name','$id_no','$sacco','$password','$membership','$phone','$kra','$address','$kin_name','$relationship','$contact','$passport','$document')") or die(mysqli_error($conn));
      echo "<script>alert('Your G&G Registration Number is $adm');document.location ='';</script>"; }        
?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Guarantor's Guard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<!-- <style>
@media (max-width: 767px) {
  body{
    position: absolute;
    width: 100%;
  }
  .container-form {
    max-width: 100%;
    margin-right: 70px;
  }
  
  .container-form .progress-bar-form{
    max-width: 100%;
  }
  .form-outer .page{
    width: 100%;
    margin-right: 120px;
  }
  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
  }

  .form-group input {
    width: 100%;
  }
}
</style> -->
<body>
  <main id="main">
<?php include 'includes/navbar.php' ?>
    <section class="section" style="color:black">
    <div class="container-form">
      <header>Registration Form</header>
      <div class="progress-bar-form">
        <div class="step">
          <p>Basic Info</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>More Info</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Next of Kin</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#" class="form" method="POST" enctype="multipart/form-data">
          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field form-group">
              <div class="label">Full Name</div>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="field form-group col-6">
              <div class="label">ID No.</div>
              <input type="number" class="form-control" name="id_no" required>
            </div>
            <div class="field  form-group">
              <div class="label">Sacco Name</div>
              <input type="text" name="sacco" required>
            </div>
            <div class="field  form-group">
              <div class="label">Membership No.</div>
              <input type="text" name="membership" required>
            </div>
            <div class="field  form-group">
              <div class="label">Phone No.</div>
              <input type="number" name="phone" required>
            </div>
            <div class="field  form-group">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="slide-page1 page">
            <div class="title">More Info:</div>
            <div class="field  form-group">
              <div class="label">KRA Pin</div>
              <input type="text" name="kra" required>
            </div>
            <div class="field  form-group">
              <div class="label">Address Location</div>
              <input type="text" name="address" accept=".pdf" required>
            </div>
            <div class="field  form-group">
              <div class="label">Upload Size Passport</div>
              <input type="file" name="passport" required>
            </div>
            <div class="field  form-group">
              <div class="label">Upload Payslip/Business Licence/Permit</div>
              <input type="file" name="document" required>
            </div>
            <div class="field  form-group btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page slide-page2">
            <div class="title">Next of Kin:</div>
            <div class="field  form-group">
              <div class="label">Next of Kin</div>
              <input type="text" name="kin_name" required>
            </div>
            <div class="field  form-group">
              <div class="label">Relationship</div>
              <input type="text" name="relationship" required>
            </div>
            <div class="field  form-group">
              <div class="label">Contact</div>
              <input type="text" name="contact" required>
            </div>
            <div class="field  form-group btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page slide-page3">
            <div class="title">Login Details:</div>
            <div class="field  form-group">
              <div class="label">Password</div>
              <input type="password" name="password" required>
            </div>
            <div class="field  form-group btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
      </section>
  </main><!-- End #main -->
  
<script src="script.js"></script>
<?php include 'includes/scripts.php' ?>

</body>

</html>
