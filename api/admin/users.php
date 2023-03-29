
<?php include 'includes/conn.php';
if(isset($_GET['id'])) {
  $sql="DELETE FROM users WHERE  id=".$_GET['id']."";
  $write =mysqli_query($conn,$sql) or die(mysqli_error($conn));
  header("location:users.php");}
 ?>
<!DOCTYPE html>
<html lang="en">
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
                            <th>S/No.</th>
                            <th>Reg No.</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Sacco | Membership No.</th>
                            <th>Phone  No.</th>
                            <th>Next of Kin | Relationship</th>
                            <th>Kin Name</th>
                            <th>Documents</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody><?php
                            $student=mysqli_query($conn,"SELECT * from  users");
                            $counter = 1;
                            
                            if(!$student) {
                              die("Error:".mysqli_error($conn));
                            }
                            if(mysqli_num_rows($student) == 0) {
                              ?>
                              <tr>
                                <td>No data available</td>
                              </tr>
                              <?php
                            } else {
                              foreach ($student as $studReq) { 
                                ?>
                                <tr>
                                  <td><?php  echo $counter++;?></td>
                                <td><?php  echo $studReq['adm'];?></td>
                                <td><?php  echo $studReq['name'];?></td>
                                <td><img alt="image" src="../docs/<?php  echo $studReq['passport'];?>" class="rounded-circle" width="40"
                                data-toggle="tooltip"></td>
                                <td><?php  echo $studReq['sacco'];?> - <?php  echo $studReq['membership'];?></td>
                                <td><?php  echo $studReq['phone'];?></td>
                                <td><?php  echo $studReq['kin_name'];?> - <?php  echo $studReq['relationship'];?></td>
                                <td><?php  echo $studReq['contact'];?></td>
                                <td><a href="../docs/<?php  echo $studReq['docs'];?>" download>Download</a></td>
                               <td> <a href="?id=<?php echo $studReq['id']; ?>"><span class="btn btn-danger">Delete</span></a></td>
                                     
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