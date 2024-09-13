<?php
include("headeragent.php");
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "courier");
?>



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-12 text-center order-2 order-lg-1 d-flex flex-column justify-content-center">
        <?php
                    if(isset($_GET['id'])){
                        $Id = $_GET['id'];
                        $q= "SELECT * FROM orderdata WHERE com_name = '".$Id."'";
                        $res = mysqli_query($conn,$q);
                        $row1 = mysqli_fetch_array($res);
                        if($row1 > 0)
                        {
                    ?>
          <h2 data-aos="fade-up"><?php echo $row1['com_name']?> Fast Delivery.</h2>
          <p data-aos="fade-up" data-aos-delay="100">Welcome to <?php echo $row1['com_name']?> courier service! We pride ourselves on swift and reliable delivery, ensuring your parcels sreach their destination safely and on time. Our dedicated team is ready to handle all your shipping needs with efficiency and care. Whether it's across town or across the globe, you can trust us to deliver with precision and professionalism. Let us take the hassle out of shipping so you can focus on what matters most</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  <?php
  }
}
?>

<div class="container">
<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
        <?php
                    if(isset($_GET['id'])){
                        $Id = $_GET['id'];
                        $q= "SELECT * FROM orderdata WHERE com_name = '".$Id."'";
                        $res = mysqli_query($conn,$q);
                        $row1 = mysqli_fetch_array($res);
                        if($row1 > 0)
                        {
                    ?>
        
          <h2 class="text-center pb-5"><?php echo $row1['com_name']?> All Orders.</h2>
          <?php
}
                }
?>


                
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
                    
                    if(isset($_GET['id'])){
                        $Id = $_GET['id'];
                        $q= "SELECT * FROM orderdata WHERE com_name = '".$Id."'";
                        $res = mysqli_query($conn,$q);
                        $row_count = mysqli_num_rows($res);
                        if($row_count > 0)
                        {
                           while($row = mysqli_fetch_array($res))
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
                        }
                        else{
                            echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            <strong>Alert ! </strong> No Orders
                          </div>';
                        }
                    } 
                            ?>
          </table>
        </div>
  </div>
</section>
</main>
</div>

<?php
include("footeragent.php");
?>
