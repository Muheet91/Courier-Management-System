<?php
include("header.php");
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center text-primary pt-3">Users Accounts</h2>

                        <!-- Delete Command -->

          <?php
          if(isset($_GET['del']))
{

    $delete=$_GET['del'];

    $qur = "DELETE FROM signup WHERE Id = '".$delete."' ";

    $res1 = mysqli_query($conn,$qur);

    if($res1){ 
        echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        <strong>Success ! </strong> Account Deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
       
    }else{
        echo '<div class="alert text-center alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Account Not Deleted
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
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                                  <!--Show Command -->
            <?php
                              
                              $qu="SELECT * FROM signup";

                              $res=mysqli_query($conn,$qu);

                              while($row=mysqli_fetch_array($res))
                              {
                              
                              ?>
              <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Password']; ?></td>
                <td>
                 <a class="btn btn-primary" href="upuser.php?up=<?php echo $row['Id'] ?>"><i class="fa-solid fa-pen-nib fa-sm"></i></a> 
                </td>  
                <td>
                <a class="btn btn-danger" href="usershow.php?del=<?php echo $row['Id'] ?>"><i class="fa-solid fa-x fa-sm"></i></a>
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
