<?php
include("header.php");
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center text-primary pt-3">User Messages</h2>

                        <!-- Delete Command -->

          <?php
          if(isset($_GET['dlt']))
{

    $delt=$_GET['dlt'];

    $q = "DELETE FROM contact WHERE c_id = '".$delt."' ";

    $res = mysqli_query($conn,$q);

    if($res){ 
        echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Message is deleted 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Message is not deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>
                            <!--End Delete Command -->

          <table class="table">
            <thead>
              <tr>
                <th>c_id</th>
                <th>c_name</th>
                <th>c_email</th>
                <th>c_message</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                                  <!--Show Command -->
            <?php
                              
               $que="SELECT * FROM contact";

               $res=mysqli_query($conn,$que);

                 while($row=mysqli_fetch_array($res))
                 {
                              
            ?>
              <tr>
                <td><?php echo $row['c_id']; ?></td>
                <td><?php echo $row['c_name']; ?></td>
                <td><?php echo $row['c_email']; ?></td>
                <td><?php echo $row['c_message']; ?></td>
                <td>
                <a class="btn btn-danger" href="showmessage.php?dlt=<?php echo $row['c_id'] ?>"><i class="fa-solid fa-x fa-sm"></i></a>
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
