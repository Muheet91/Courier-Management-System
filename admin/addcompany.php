<?php
include("header.php");
?>

<?php

if(isset($_POST['cadd'])){

$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$caddress = $_POST['caddress'];
$cpass = $_POST['cpass'];

$q="INSERT INTO company (com_name,com_email,com_address,com_pass) 
VALUES('".$cname."','".$cemail."','".$caddress."','".$cpass."')";
$res=mysqli_query($conn,$q);
if($res)
{
       echo '<script>window.location.href="showcomp.php"</script>';
  echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
  <strong>Success ! </strong> Company is added
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
  echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
  <strong>Alert ! </strong> Company is not added
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
?>

<main id="main" class="main">
<section class="section mx-5 my-2">
  <div class="row mx-5">
    <div class="col-lg-10 mx-5">

      <div class="card">
        <div class="card-body">
          <b><h2 class="text-primary text-center my-3">Adding Company</h2></b>

          <!-- Vertical Form -->
          <form class="row g-3" method="post" name="fmc">
            <div class="col-12">
              <label for="cname" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="cname" name="cname" required>
              <label for="" id="lb1"></label>
            </div>
            <div class="col-12">
              <label for="cemail" class="form-label">Company Email</label>
              <input type="email" class="form-control" id="cemail" name="cemail" required>
              <label for="" id="lb2"></label>
            </div>
             <div class="col-12">
              <label for="caddress" class="form-label">Company Address</label>
              <input type="text" class="form-control" id="caddress" name="caddress" required>
              <label for="" id="lb3"></label>
            </div>
            <div class="col-12">
              <label for="cpass" class="form-label">Company Password</label>
              <input type="password" class="form-control" id="cpass" name="cpass" required>
              <label for="" id="lb4"></label>
            </div>
           
            <div class="text-center">
            <input type="submit" value="Add" name="cadd" class="btn btn-primary btn-block w-25" onclick="valid()">
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

<script>
function
valid(){

var cname = fmc.cname.value;
var caddress = fmc.caddress.value;
var cemail = fmc.cemail.value;
var cpass = fmc.cpass.value;


var ptr4 = /^[a-zA-Z ]{2,30}$/

                          // Company NAME

if(cname.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter Company Name";
    document.getElementById("lb1").style.color="red";
    document.getElementById("cname").style.borderColor="red";
}



else if (ptr4.test(cname)==false)
{
    document.getElementById("lb1").innerHTML="please enter in alphabets";
    document.getElementById("lb1").style.color="red";
    document.getElementById("cname").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("cname").style.borderColor="green";
}

                   //Company Address

                   if(caddress.length == 0)
{
    document.getElementById("lb2").innerHTML="please enter Company Address";
    document.getElementById("lb2").style.color="red";
    document.getElementById("caddress").style.borderColor="red";
}

else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("caddress").style.borderColor="green";
}

                     //Company EMAIL

var ptre = /\w+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/

if(cemail.length == 0)
{
    document.getElementById("lb3").innerHTML="please enter your Company Email";
    document.getElementById("lb3").style.color="red";
    document.getElementById("cemail").style.borderColor="red";
}
else if (ptre.test(cemail)==false)
{
    document.getElementById("lb3").innerHTML="please enter your valid Email";
    document.getElementById("lb3").style.color="red";
    document.getElementById("cemail").style.borderColor="red";
}
else{
    document.getElementById("lb3").innerHTML="";
    document.getElementById("cemail").style.borderColor="green";
}

             // company PASSWORD

var pa=/^(?=.*\d).{8,}$/

if(cpass.length == 0)
{
    document.getElementById("lb4").innerHTML="plaese enter your Company Password";
    document.getElementById("lb4").style.color="red";
    document.getElementById("cpass").style.borderColor="red";
}
else if (pa.test(cpass)==false)
{
    document.getElementById("lb4").innerHTML="Please enter 8 digits Password";
    document.getElementById("lb4").style.color="red";
    document.getElementById("cpass").style.borderColor="red";
}
else{
    document.getElementById("lb4").innerHTML="";
    document.getElementById("cpass").style.borderColor="green";
}
}
</script>

<?php
include("footer.php");
?>