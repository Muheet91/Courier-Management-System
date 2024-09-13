<?php
include("header.php");
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

        <?php
                    if(isset($_GET['id'])){
                        $Id = $_GET['id'];
                        $q= "SELECT * FROM orderdata WHERE com_id = '".$Id."'";
                        $res = mysqli_query($conn,$q);
                        $row1 = mysqli_fetch_array($res);
                        if($row1 > 0)
                        {
                    ?>
        
          <h2 class="text-center text-primary pt-3"><?php echo $row1['com_name']?> Parcels Data</h2>
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
                        $q= "SELECT * FROM orderdata WHERE com_id = '".$Id."'";
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

    </div>
  </div>
</section>

</main>

<?php
include("footer.php");
?>