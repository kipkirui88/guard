<!DOCTYPE html>
<html lang="en">
<?php include 'includes/conn.php';
    if (!isset($_SESSION)) {
      session_start();
  }

if(isset($_GET['id'])) {
  $sql="DELETE FROM subscribers WHERE  id=".$_GET['id']."";
  $write =mysqli_query($conn,$sql) or die(mysqli_error($db_connect));
  header("location:index.php");}
 ?>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G & G - Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="admin/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/logo.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky l-bg-purple">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        
          <?php   $req=mysqli_query($conn,"select * from  users where adm='".$_SESSION['adm']."'");
                      $cnt=0;
                      while ($row=mysqli_fetch_array($req)) {
                          ?> 
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="docs/<?php  echo $row['passport'];?>" class="user-img-radious-style"
                                data-toggle="tooltip"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php  echo $row['adm'];?> 
                                           
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li><?php 
                    $cnt=$cnt+1;
                }?>
        </ul>
      </nav>
      <!-- sidebar -->
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">G&G</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Guarantor's Guard</li>
            <li class="dropdown">
              <a href="dashboard.php" class="nav-link"><i data-feather="monitor"></i><span>My Account</span></a>
            </li>
            
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header bg-cyan">
                    <h4>Sacco Members</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <!-- tableExport -->
                      <table class="table table-striped table-hover" id="table-2" style="width:100%;">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Reg No.</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Sacco</th>
                            <th>Phone  No.</th>
                            <th>Next of Kin</th>
                            <th>Kin Name</th>
                            <th>Documents</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody><?php
                            $student=mysqli_query($conn,"SELECT * from  users where adm='".$_SESSION['adm']."'");
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
                                <td><?php  echo $studReq['adm'];?></td>
                                <td><?php  echo $studReq['name'];?></td>
                                <td><img alt="image" src="docs/<?php  echo $studReq['passport'];?>" class="rounded-circle" width="40"
                                data-toggle="tooltip"></td>
                                <td><?php  echo $studReq['sacco'];?> - <?php  echo $studReq['membership'];?></td>
                                <td><?php  echo $studReq['phone'];?></td>
                                <td><?php  echo $studReq['kin_name'];?> - <?php  echo $studReq['relationship'];?></td>
                                <td><?php  echo $studReq['contact'];?></td>
                                <td><a  class='btn btn-primary' href="docs/<?php  echo $studReq['docs'];?>" download><i data-feather="download"></i>Download</a></td>
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
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="admin/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="admin/assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="admin/assets/js/custom.js"></script>
</body>


</html>