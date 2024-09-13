<?php
$conn = mysqli_connect("localhost", "root", "", "courier");
?>

<?php
include("headlog.php");
?>



  <!-- ======= Hero Section ======= -->

  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" class="text-center">Your Lightning Fast Delivery Partner.</h2>
        </div>

   

      </div>
    </div>
  </section>
  <!-- End Hero Section -->

<section class="section"> 
    <b><h2 class="text-center mb-5 text-primary">Request for PickUp</h2></b>
  <div class="row" style="justify-content: center;">
 
    <div class="col-lg-6">

    <?php

if(isset($_POST['btnadd'])){

$senname = $_POST['senname'];
$senadd = $_POST['senadd'];
$senno = $_POST['senno'];
$recname = $_POST['recname'];
$recadd = $_POST['recadd'];
$recno = $_POST['recno'];
$weight = $_POST['weight'];
$comname = $_POST['comname'];
$date = $_POST['date'];
$msg = $_POST['msg'];

$q="INSERT INTO parcels (sen_name,sen_add,sen_no,rec_name,rec_add,rec_no,weight,company_name,del_date,message) 
VALUES('".$senname."','".$senadd."','".$senno."','".$recname."','".$recadd."','".$recno."','".$weight."','".$comname."','".$date."','".$msg."')";
$res=mysqli_query($conn,$q);
if($res)
{

  echo '<script>window.location.href="tylog.php"</script>';
  
}
else{
  echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
  <strong>Alert ! </strong> </strong> Order Not Added
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
?>
          
          <form class="row g-4" method="post" name="fom">
            <div class="col-6">
              <input type="text" class="form-control" id="senname"  name="senname" placeholder="Sender Name" required>
              <label for="" id="lb1"></label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="senadd"  name="senadd" placeholder="Sender Address" required>
              <label for="" id="lb2"></label>
            </div>
            <div class="col-6">
              <input type="number" class="form-control" id="senno" name="senno" placeholder="Sender Phone No" maxlength="11" required>
              <label for="" id="lb3"></label>
            </div>
             <div class="col-6">
              <input type="text" class="form-control" id="recname" placeholder="Recipient Name" name="recname" required>
              <label for="" id="lb4"></label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="recadd" name="recadd" placeholder="Recipient Address" required>
              <label for="" id="lb5"></label>
            </div>
            <div class="col-6">
              <input type="number" class="form-control" id="recno"  name="recno" maxlength="12" placeholder="Recipient Phone No" required>
              <label for="" id="lb6"></label>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="weight" name="weight" placeholder="Courier Weight" required>
              <label for="" id="lb7"></label>
            </div>
            <div class="col-6">
              <select name="comname" id="comname" class="form-select">
              <option disabled selected hidden>Select Company</option>
                 <?php
                    $q="SELECT * FROM company";
                     $res=mysqli_query($conn,$q);
                    while($row = mysqli_fetch_array($res))
                    {
                    ?>
                        <option value="<?php echo $row['com_id'] ?>"><?php echo $row['com_name'] ?></option>
                        <?php
                     }
                 ?>                                      
                         </select>
                         <label for="" id="lb10"></label>
            </div>
            <div class="col-6">
              <input type="date" id="date" class="form-control"  name="date" placeholder="Delivery Date" required>
              <label for="" id="lb8"></label>
            </div>
            <script>
    // Get today's date
    var today = new Date().toISOString().split('T')[0];

    // Set the min attribute of the input to today's date
    document.getElementById("date").setAttribute("min", today);
</script>

            <div class="col-6">
              <input type="textarea" id="msg" class="form-control"  name="msg" placeholder="Message" required>
              <label for="" id="lb9"></label>
            </div>
            <div class="text-center my-5">
            <input type="submit" value="Add" name="btnadd" class="btn btn-primary btn-block w-25" onclick="validate()">
            </div>
          </form>
    </div>
  </div>
  </section>
                            <!-- validation -->

                            <script>
function
validate(){

var senname = fom.senname.value;
var recname = fom.recname.value;
var senaddress = fom.senadd.value;
var recaddress = fom.recadd.value;
var senphone = fom.senno.value;
var recphone = fom.recno.value;
var weight = fom.weight.value;
var date = fom.date.value;
var msg = fom.msg.value;

                          // Sen NAME

  var ptr4 = /^[a-zA-Z ]{2,30}$/

if(senname.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter sender name";
    document.getElementById("lb1").style.color="red";
    document.getElementById("senname").style.borderColor="red";
}
else if (ptr4.test(senname)==false)
{
    document.getElementById("lb1").innerHTML="please enter in alphabets";
    document.getElementById("lb1").style.color="red";
    document.getElementById("senname").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("senname").style.borderColor="green";
}

                          // Rec NAME 

if(recname.length == 0)
{
    document.getElementById("lb4").innerHTML="please enter recipient name";
    document.getElementById("lb4").style.color="red";
    document.getElementById("recname").style.borderColor="red";
}
else if (ptr4.test(recname)==false)
{
    document.getElementById("lb4").innerHTML="please enter in alphabets";
    document.getElementById("lb4").style.color="red";
    document.getElementById("recname").style.borderColor="red";
}
else{
    document.getElementById("lb4").innerHTML="";
    document.getElementById("recname").style.borderColor="green";
}
     
                    // Sen Address

 if(senaddress.length == 0)
{
    document.getElementById("lb2").innerHTML="please enter sender Address";
    document.getElementById("lb2").style.color="red";
    document.getElementById("senadd").style.borderColor="red";
}

else{
    document.getElementById("lb2").innerHTML="";
   document.getElementById("senadd").style.borderColor="green";
}

                    // Rec Address

if(recaddress.length == 0)
{
    document.getElementById("lb5").innerHTML="please enter recipient Address";
    document.getElementById("lb5").style.color="red";
    document.getElementById("recadd").style.borderColor="red";
}

else{
    document.getElementById("lb5").innerHTML="";
   document.getElementById("recadd").style.borderColor="green";
}

             // sen PHONE

var ptrp=/^.{11}$/

if(senphone.length == 0)
{
    document.getElementById("lb3").innerHTML="plaese enter sender number";
    document.getElementById("lb3").style.color="red";
    document.getElementById("senno").style.borderColor="red";
}
else if (ptrp.test(senphone)==false)
{
    document.getElementById("lb3").innerHTML="enter right number";
    document.getElementById("lb3").style.color="red";
    document.getElementById("senno").style.borderColor="red";
}
else{
    document.getElementById("lb3").innerHTML="";
    document.getElementById("senno").style.borderColor="green";
}

                 // rec PHONE

if(recphone.length == 0)
{
    document.getElementById("lb6").innerHTML="plaese enter recepient number";
    document.getElementById("lb6").style.color="red";
    document.getElementById("recno").style.borderColor="red";
}
else if (ptrp.test(recphone)==false)
{
    document.getElementById("lb6").innerHTML="enter right number";
    document.getElementById("lb6").style.color="red";
    document.getElementById("recno").style.borderColor="red";
}
else{
    document.getElementById("lb6").innerHTML="";
    document.getElementById("recno").style.borderColor="green";
}

                   // Weight
  
     var ptw=/\d+(\.\+)?\s*(kg|g)/

if(weight.length == 0)
{
    document.getElementById("lb7").innerHTML="please enter Your parcel weight";
    document.getElementById("lb7").style.color="red";
    document.getElementById("weight").style.borderColor="red";
}
else if (ptw.test(weight)==false)
{
    document.getElementById("lb7").innerHTML="enter right kg";
    document.getElementById("lb7").style.color="red";
    document.getElementById("recno").style.borderColor="red";
}
else{
    document.getElementById("lb7").innerHTML="";
   document.getElementById("weight").style.borderColor="green";
}

              //  Date 

if(date.length == 0)
{
    document.getElementById("lb8").innerHTML="please enter delivery date";
    document.getElementById("lb8").style.color="red";
    document.getElementById("date").style.borderColor="red";
}

else{
    document.getElementById("lb8").innerHTML="";
   document.getElementById("date").style.borderColor="green";
}

              //  Message

              if(msg.length == 0)
{
    document.getElementById("lb9").innerHTML="please enter Message";
    document.getElementById("lb9").style.color="red";
    document.getElementById("msg").style.borderColor="red";
}

else{
    document.getElementById("lb9").innerHTML="";
   document.getElementById("msg").style.borderColor="green";
}
}
</script>

                       <!-- END Validation -->


<?php
include("footerlog.php");
?>