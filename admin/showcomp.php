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

    $q = "DELETE FROM company WHERE com_id = '".$del."' ";

    $res = mysqli_query($conn,$q);

    if($res){ 
        echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Company is deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Company is not deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
                            <!--End Delete Command -->

          <table class="table">
            <thead>
              <tr>
                <th>comp_id</th>
                <th>comp_name</th>
                <th>comp_email</th>
                <th>comp_Address</th>
                <th>comp_pass</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                                  <!--Show Command -->
            <?php
                              
                              $que="SELECT * FROM company";

                              $res=mysqli_query($conn,$que);

                              while($row=mysqli_fetch_array($res))
                              {
                              
                              ?>
              <tr>
                <td><?php echo $row['com_id']; ?></td>
                <td><?php echo $row['com_name']; ?></td>
                <td><?php echo $row['com_email']; ?></td>
                <td><?php echo $row['com_address']; ?></td>
                <td><?php echo $row['com_pass']; ?></td>
                <td>
                 <a class="btn btn-primary" href="upcomp.php?upd=<?php echo $row['com_id'] ?>"><i class="fa-solid fa-pen-nib fa-sm"></i></a> 
                </td>  
                <td>
                <a class="btn btn-danger" href="showcomp.php?dlt=<?php echo $row['com_id']?>"><i class="fa-solid fa-x fa-sm"></i></a>
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
include("footer.php");
?>