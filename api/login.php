<!DOCTYPE html>
<html lang="en">

<?php include 'includes/header.php';
include "includes/conn.php";
session_start();
if (isset($_POST['login'])){

    $adm = $_POST['adm'];
    $password = $_POST['password'];
  
    if(empty($adm) || empty($password)) {
      if($adm == "") {
        $errors[] = "Username is required";
      } 
  
      if($password == "") {
        $errors[] = "Password is required";
      }
    } else {
      $sql = "SELECT * FROM users WHERE adm = '$adm'";
      $result = $conn->query($sql);
  
      if($result->num_rows == 1) {
        // $password = md5($password);
        // exists
        $mainSql = "SELECT * FROM users WHERE adm = '$adm' AND password = '$password'";
        $mainResult = $conn->query($mainSql);
  
        if($mainResult->num_rows == 1) {
          $value = $mainResult->fetch_assoc();
          $adm = $value['adm'];
  
          // set session
          $_SESSION['adm'] = $adm;
  
          header('location: dashboard.php');	
        } else{
          
          $errors[] = "Incorrect adm/password combination";
        } // /else
      } else {		
        $errors[] = "Username doesnot exists";		
      } // /else
    } // /else not empty username // password
    
  } // /if $_POST
  ?>

<body>

<?php include 'includes/navbar.php' ?>


  <main id="main">

    <section class="section section-bg" style="color:black">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>Login To Continue</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="#" class="needs-validation" novalidate="">
                    <div class="form-group">
                      <label for="email">Reg No.</label>
                      <input id="email" type="text" class="form-control" name="adm" tabindex="1" required autofocus>
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
                      <button type="submit" name="login" class="btn btn-info btn-block" tabindex="4">
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
      </section>
  </main><!-- End #main -->
  <?php include 'includes/footer.php' ?>

<?php include 'includes/scripts.php' ?>


</body>

</html>
