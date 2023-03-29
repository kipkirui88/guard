<?php 
include 'includes/conn.php';
session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
}
?>
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
        <li class="dropdown dropdown-list-toggle"><a href="messages.php"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1"><?php
                            $req=mysqli_query($conn,"select * from  mails where is_read='';");
                                            $row = mysqli_num_rows($req);
                                            if($row){
                                            printf($row);
                                            }
                                            ?></span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
              <div class="dropdown-footer text-center">
                <a href="messages.php">View All <i class="bi bi-chevron-right"></i></a>
              </div>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/gg.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php   
                                    $req=mysqli_query($conn,"select * from  admins where email='".$_SESSION['email']."'");
                                        $cnt=0;
                                        while ($row=mysqli_fetch_array($req)) {
                                            ?>  <?php  echo $row['email'];?> 
                                            <?php 
                                            $cnt=$cnt+1;
                                        }?></div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> 
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>