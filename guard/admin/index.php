<!DOCTYPE html>
<html lang="en">
<?php include '../includes/conn.php';
if(isset($_GET['id'])) {
  $sql="DELETE FROM subscribers WHERE  id=".$_GET['id']."";
  $write =mysqli_query($conn,$sql) or die(mysqli_error($db_connect));
  header("location:index.php");}
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

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
<?php include 'includes/navbar.php' ?>
<?php include 'includes/sidebar.php' ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card l-bg-purple">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Members</h5>
                          <h2 class="mb-3 font-18"><?php
                            $req=mysqli_query($conn,"select * from  users");
                                            $row = mysqli_num_rows($req);
                                            if($row){
                                            printf($row);
                                            }
                                            ?></h2>
                          <p class="mb-0"><span class="col-green"></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img"><i data-feather="users"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card l-bg-green">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Payments</h5>
                          <h2 class="mb-3 font-18">Ksh 28,700</h2>
                          <p class="mb-0"><span class="col-orange"></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img"><i data-feather="dollar-sign"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card l-bg-cyan">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Subscribers</h5>
                          <h2 class="mb-3 font-18"><?php
                            $req=mysqli_query($conn,"select * from  subscribers");
                                            $row = mysqli_num_rows($req);
                                            if($row){
                                            printf($row);
                                            }
                                            else{
                                              printf(0);
                                            }
                                            ?></h2>
                          <p class="mb-0"><span class="col-green"></span>
                            </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img"><i data-feather="mail"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card l-bg-orange">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Messages</h5>
                          <h2 class="mb-3 font-18"><?php
                            $req=mysqli_query($conn,"select * from  mails");
                                            $row = mysqli_num_rows($req);
                                            if($row){
                                            printf($row);
                                            }
                                            else{
                                              printf(0);
                                            }
                                            ?></h2>
                          <p class="mb-0"><span class="col-green"></span> </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img"><i data-feather="message-square"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- additional tales -->
          <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-8">
              <div class="card">
                <div class="card-header bg-cyan">
                  <h4>Subscribers</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Subscriber Email</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody><?php
                            $student=mysqli_query($conn,"select * from  subscribers");
                            $cnt=1;
                            if(!$student){
                            die("Error:".mysqli_error($conn));
                            }
                            if(mysqli_num_rows($student) == 0){
                            ?>
                            <tr>
                            <td>No data available</td>
                            </tr>
                            <?php
                            }else{
                            foreach ($student as $studReq) { ?>
                                <tr>
                                <td><?php echo $cnt++; ?></td>
                                <td><?php  echo $studReq['email'];?></td>
                                <td><?php  echo $studReq['date'];?></td>
                                <td>
                                <a href="?id=<?php echo $studReq['id']; ?>"><span class="btn btn-danger">Delete</span></a>
                                    
                            </td>
                                </tr>
                                <?php }} ?>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
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