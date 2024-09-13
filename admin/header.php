<?php

include("config.php");

session_start();

if(!isset($_SESSION['username']))
{
    header('location:loginback.php');
}
?>
<!-- delete command -->
<?php
          if(isset($_GET['dlt']))
{

    $del=$_GET['dlt'];

    $q = "DELETE FROM contact WHERE c_id = '".$del."' ";

    $res = mysqli_query($conn,$q);

    if($res){ 
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Message Deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Message Not Deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
<!--End delete command -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- fontawesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- minecss -->
  <link rel="stylesheet" href="assets/css/mystyle.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="logo">
        <span class="d-none d-lg-block">CMS</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="/phpweb/index.php">
          <i class="fa-solid fa-house"></i>
            
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="fa-solid fa-message"></i>
            <span class="badge bg-danger badge-number">!</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have new messages
              <a href="showmessage.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <?php
                              
                              $que="SELECT * FROM contact ORDER BY c_id DESC LIMIT 2";
               
                              $res=mysqli_query($conn,$que);
               
                                while($row=mysqli_fetch_array($res))
                                {
                                             
                           ?>
            <li>
              <hr class="dropdown-divider">
            </li>
             <div class="text-end px-2">
              <td>
                <a class="text-dark" href="dashboard.php?dlt= <?php echo $row['c_id'] ?>"><i class="fa-solid fa-x fa-sm"></i></a>
                </td> 
                </div>
            <li class="message-item">
              <a href="showmessage.php">
                <div>
                  <dd class="text-primary"><?php echo $row['c_name']; ?> :</dd>
                  <dl class="text-dark"><?php echo $row['c_message']; ?> .</dl>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php
                                }
            ?>
            <li class="dropdown-footer">
              <a href="showmessage.php">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logoutback.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
            

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="dashboard.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

                             <!-- Start Workers Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-user fa-2xl"></i><span>Workers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="addworker.php">
          <i class="bi bi-circle"></i><span>Add Workers</span>
        </a>
      </li>
      <li>
        <a href="showworker.php">
          <i class="bi bi-circle"></i><span>Show Worker</span>
        </a>
      </li>
    </ul>
  </li>
                           <!-- End Workers Nav -->

                            <!-- Start messages Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-message fa-2xl"></i><span>Messages</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="showmessage.php">
          <i class="bi bi-circle"></i><span>Messages</span>
        </a>
      </li>
    </ul>
  </li>
                        <!-- End messages Nav -->

                         <!-- Start user Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-users fa-2xl"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="usershow.php">
          <i class="bi bi-circle"></i><span>User Accounts</span>
        </a>
      </li>
    </ul>
  </li>      
                                 <!-- End user Nav -->

                                 <!--Start company Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-building fa-2xl"></i><span>Adding Company</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="addcompany.php">
          <i class="bi bi-circle"></i><span>Add Company</span>
        </a>
      </li>
      <li>
        <a href="showcomp.php">
          <i class="bi bi-circle"></i><span>Show Company</span>
        </a>
      </li>
    </ul>
  </li>
   <!--end company Nav -->

                            <!--Start order Nav -->

                            <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="fa-solid fa-truck-fast fa-2xl"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <?php
$q="SELECT * FROM company";
$res=mysqli_query($conn,$q);
while($row = mysqli_fetch_array($res))
{
?>
          <li>
            <a href="topparcels.php?id=<?php echo $row['com_id']?>">
              <i class="bi bi-circle"></i><span><?php echo $row['com_name']?></span>
            </a>
          </li>
          <?php
}
          ?>
        </ul>
      </li>
                              <!--End order Nav -->

                               <!-- start all order  Nav -->

 <li class="nav-heading">all Orders Settings</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="allorder.php">
  <i class="fa-solid fa-ellipsis-vertical fa-2xl"></i>
    <span>All Order</span>
  </a>
</li>

                <!-- End all order  Nav -->

</ul>

</aside><!-- End Sidebar-->

