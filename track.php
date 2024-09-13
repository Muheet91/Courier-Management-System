
                            <?php
include("headlog.php");
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Your Lightning Fast Tracking System.</h2>
          <form action="#" method="post" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" name="utrack" placeholder="COUR">
            <input type="submit" class="btn btn-primary" name="btn_track" value="Track">
          </form>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="" width="60%">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

         <!-- Delete Command -->

 <?php
 $conn = mysqli_connect("localhost", "root", "", "courier");
          if(isset($_GET['dlt']))
{

    $delete=$_GET['dlt'];

    $q = "DELETE FROM parcels WHERE Id = '".$delete."' ";

    $rlt2 = mysqli_query($conn,$q);

    if($rlt2){ 
      echo '<script>window.location.href="track.php"</script>';
    }
}
?>
                            <!--End Delete Command -->

  <?php
  $conn = mysqli_connect("localhost", "root", "", "courier");
if(isset($_POST['btn_track']))
{
    $t_id=$_POST['utrack'];
    $q="select * from orderdata where Id='".$t_id."'";
    $result = mysqli_query($conn, $q);
   
    if(mysqli_num_rows($result) > 0) { 



?>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center my-5">Tracking Details</h1>
            
          <table class="table">
            <thead>
              <tr>
                <th>Track Id</th>
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
                <th>Cancel</th>
              </tr>
            </thead>
            <tbody>
                                  <!--Show Command -->
           
              <tr>
              <?php

while( $row = mysqli_fetch_array($result))
{


?>
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
                <td>
                <a class="btn btn-danger" href="track.php?dlt=<?php echo $row['Id']?>"><i class="fa-solid fa-x fa-sm"></i></a>
                </td>   
                
                

                <?php
        } }
        else {
            $message="No details Found";
          
          
        }
    }
   
?>
              </tr>
                                 <!--End Show Command -->
            </tbody>
          </table>
        </div>
        <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><?php echo @$message ?></h1>
        </div>
    </div>
</div>

    </div>
</div>



<?php
include("footerlog.php");
?>
