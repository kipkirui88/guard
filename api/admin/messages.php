<!DOCTYPE html>
<html lang="en">
<?php include 'includes/conn.php';
if(isset($_GET['id'])) {
  $sql="DELETE FROM mails WHERE  id=".$_GET['id']."";
  $write =mysqli_query($conn,$sql) or die(mysqli_error($conn));
  header("location:messages.php");}

if(isset($_GET['mark_read'])) {
  $sql="UPDATE mails SET is_read=1 WHERE  id=".$_GET['mark_read']."";
  $write =mysqli_query($conn,$sql) or die(mysqli_error($conn));
  header("location:messages.php");
  }  
 ?>

<!-- export-table.html  21 Nov 2019 03:55:25 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>G & G - Members List</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-md-8 col-lg-12 col-xl-12">
              <div class="card">
                <div class="card-header bg-cyan">
                  <h4>Messages</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Client Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            $student = mysqli_query($conn,"SELECT * FROM mails");
                            $cnt = 1;
                            if (!$student) {
                              die("Error: " . mysqli_error($conn));
                            }
                            if (mysqli_num_rows($student) == 0) {
                          ?>
                              <tr>
                                <td>No data available</td>
                              </tr>
                          <?php
                            } else {
                              foreach ($student as $studReq) {
                                $read_status = $studReq['is_read'] == 0 ? 'Unread' : 'Read';
                          ?>
                                <tr>
                                  <td><?php echo $cnt++; ?></td>
                                  <td><?php echo $studReq['name']; ?></td>
                                  <td><?php echo $studReq['email']; ?></td>
                                  <td><?php echo $studReq['subject']; ?></td>
                                  <td><?php echo $studReq['message']; ?></td>
                                  <td><?php echo $studReq['date']; ?></td>
                                  <td>
                                  <?php if($read_status == 'Unread') { ?>
                                    <a href="?mark_read=<?php echo $studReq['id']; ?>"><span class="btn btn-primary"><?php echo $read_status; ?></span></a>
                                  <?php }else{echo 'read';} ?>
                                </td>
                                  <td>
                                    <a href="?id=<?php echo $studReq['id']; ?>"><span class="btn btn-danger">Delete</span></a>
                                  </td>
                                </tr>
                          <?php
                              }
                            }
                          ?>
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
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/jszip.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
  <script src="assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
  <script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</html>