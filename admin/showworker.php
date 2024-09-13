<?php
include("header.php");
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center text-primary pt-3">Workers Data</h2>

                        <!-- Delete Command -->

          <?php
          if(isset($_GET['dlt']))
{

    $del=$_GET['dlt'];

    $q = "DELETE FROM worker WHERE worker_id = '".$del."' ";

    $res5 = mysqli_query($conn,$q);

    if($res5){ 
        echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Your Data is deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Your Data is not deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
                            <!--End Delete Command -->

          <table class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>F_Name</th>
                <th>L_Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                                  <!--Show Command -->
            <?php
                              
                              $que="SELECT * FROM worker";

                              $res=mysqli_query($conn,$que);

                              while($row=mysqli_fetch_array($res))
                              {
                              
                              ?>
              <tr>
                <td><?php echo $row['worker_id']; ?></td>
                <td><?php echo $row['worker_firstName']; ?></td>
                <td><?php echo $row['worker_lastName']; ?></td>
                <td><?php echo $row['worker_city']; ?></td>
                <td><?php echo $row['worker_address']; ?></td>
                <td><?php echo $row['worker_mail']; ?></td>
                <td><?php echo $row['worker_phone']; ?></td>
                <td><?php echo $row['worker_pass']; ?></td>
                <td>
                 <a class="btn btn-primary" href="updloginworker.php?upd=<?php echo $row['worker_id'] ?>"><i class="fa-solid fa-pen-nib fa-sm"></i></a> 
                </td>  
                <td>
                <a class="btn btn-danger" href="showworker.php?dlt=<?php echo $row['worker_id'] ?>"><i class="fa-solid fa-x fa-sm"></i></a>
                </td>                            
                    
                                
                
              </tr>
              <?php
              }
              ?>
                                            <!--End Show Command -->
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</section>
</main>

<?php
include("footer.php")
?>
