<?php
include("header.php");
?>

                        <!-- Delete Command -->

                        <?php
          if(isset($_GET['delt']))
{

    $delete=$_GET['delt'];

    $q = "DELETE FROM parcels WHERE Id = '".$delete."' ";

    $result2 = mysqli_query($conn,$q);

    if($result2){ 
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


<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

                      <!-- Delete Command -->

                      <?php
          if(isset($_GET['delt']))
{

    $delete=$_GET['delt'];

    $q = "DELETE FROM parcels WHERE Id = '".$delete."' ";

    $result2 = mysqli_query($conn,$q);

    if($result2){ 
        echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Order deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Order not deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
                            <!--End Delete Command -->


          <h2 class="text-center text-primary pt-3">All Orders Data</h2>
                
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
                <th>Action</th>
              </tr>
            </thead>

            <?php

                        $q= "SELECT * FROM orderdata";
                        $res = mysqli_query($conn,$q);                  
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
                <td>
                <a class="btn btn-danger" href="allorder.php?delt=<?php echo $row['Id'] ?>"><i class="fa-solid fa-x fa-sm"></i></a>
                </td>                            
              </tr>
            </tbody>
            <?php
                     }
                            ?>
          </table>
        </div>
      </div>

    </div>
  </div>
</section>

</main>

<?php
include("footer.php");
?>