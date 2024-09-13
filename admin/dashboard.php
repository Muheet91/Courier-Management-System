<?php
include("header.php");
?>
 
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Delivery <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-truck"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-rupee-sign"></i>
                    </div>
                    <div class="ps-3">
                      <h6>85000Rs</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

           

            <!-- Top Orders -->
            <div class="col-12">
            <div class="card">
        <div class="card-body">    
          <b><h2 class="text-center text-primary pt-3">Top Orders</h2></b>

          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>sen_name</th>
                <th>sen_add</th>
                <th>sen_no</th>
                <th>rec_name</th>
                <th>rec_add</th>
                <th>rec_no</th>
                <th>weight</th>
                <th>cp_name</th>
                <th>del_date</th>
                <th>msg</th>
              </tr>
            </thead>

            <?php
                    
                  
                    $que="SELECT * FROM orderdata ORDER BY Id DESC LIMIT 10";

                    $res=mysqli_query($conn,$que);

                    while($row=mysqli_fetch_array($res))
                    {
                        
                        ?>

            <tbody>          
              <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['sen_name']; ?></td>
                <td><?php echo $row['sen_add']; ?></td>
                <td><?php echo $row['sen_no']; ?></td>
                <td><?php echo $row['rec_name']; ?></td>
                <td><?php echo $row['rec_add']; ?></td>
                <td><?php echo $row['rec_no']; ?></td>
                <td><?php echo $row['weight']; ?></td>
                <td><?php echo $row['com_name']; ?></td>
                <td><?php echo $row['del_date']; ?></td>
                <td><?php echo $row['message']; ?></td>                            
              </tr>
            </tbody>
            <?php
        }
                        
                            ?>
          </table>
        </div>
      </div>
        </div><!-- End Left side columns -->

  
    </section>

  </main><!-- End #main -->
<?php
include("footer.php");
?>