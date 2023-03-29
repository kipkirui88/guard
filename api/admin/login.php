<!DOCTYPE html>
<html lang="en">
<?php 
include "includes/conn.php";
session_start();
if (isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (empty($email) ||empty($password)){
      echo "<div class='alert alert-warning' role='alert'>
        Please fill all the fields
        </div>";
    }
    
    
    $query = "SELECT * FROM `admins` WHERE `email` = '$email'";
    $results = mysqlI_query($conn,$query);
    if(!$results){
      die ("Error: ".mysqli_error($conn));
    }
      $userCount = mysqli_num_rows($results);
      if($userCount == 0){
        echo'<div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
              <i class="mdi mdi-block-helper label-icon"></i><strong> Error</strong> -  The user you have entered does not exist.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        ?>
  <?php
     }else{
       foreach($results as $user){
         if ($password == $user['password']) {
           $dbEmail = $user['email'];
           $_SESSION['email'] = $dbEmail;
                        echo ' 
                            
                               <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                        <i class="mdi mdi-check-all label-icon"></i><strong>Success!</strong> - Login success!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';

                                    ?>
<script type="text/javascript">
        setTimeout(function(){ 
  window.location.href='index.php'
  }, 500);   
</script>
<?php

         } else {
         echo         ' 
                            
                             <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                        <i class="mdi mdi-block-helper label-icon"></i><strong> Error!</strong> - Invalid Password or Email .
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    
                                    ';
         }

       }

      }
    }   
       
?>
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G & G - Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/gg.png' />
</head>
<style>body{background-color:#0000b8}</style>
<body>


  <main id="main">

    <section class="section section-bg">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>G&G ADMIN LOGIN</h4><br>
                  <img src="assets/img/gg.png" alt="" style="height: 70px;border-radius:50%">
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
                      <button type="submit" name="login" class="btn btn-primary" tabindex="4">
                        Login
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main><!-- End #main -->
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
