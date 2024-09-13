<!-- Header Start -->
<?php
include("headeragent.php");
?>
<!-- Header End -->

<!-- Main Content Start -->

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Contact</h2>
          <p>Certainly! Here's a generic template for providing contact information for a courier service:</p>
        </div>
      </div>
    </div>
  </div>

</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

  <!-- Start Google Maps -->
    <div>
        <iframe width="100%" height="340px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=340px&amp;hl=en&amp;q=aptech%20north%20nazimabad+(courier%20website)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
    </div>
    <!-- End Google Maps -->

    <div class="row gy-4 mt-4">

    <div class="col-lg-4">

<div class="info-item d-flex">
  <i class="bi bi-geo-alt flex-shrink-0"></i>
  <div>
    <h4>Location:</h4>
    <p>b678 dilpasand Street
    Karachi,Pakistan.</p>
  </div>
</div><!-- End Info Item -->

<div class="info-item d-flex">
  <i class="bi bi-envelope flex-shrink-0"></i>
  <div>
    <h4>Email:</h4>
    <p>aptechnn@gmail.com</p>
  </div>
</div><!-- End Info Item -->

<div class="info-item d-flex">
  <i class="bi bi-phone flex-shrink-0"></i>
  <div>
    <h4>Call:</h4>
    <p>+92 313 6820402</p>
  </div>
</div><!-- End Info Item -->

</div>

      <div class="col-lg-8">

      <?php

$conn = mysqli_connect("localhost", "root", "", "courier");

if(isset($_POST['msgbtn'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$que="INSERT INTO contact (c_name,c_email,c_message) 
VALUES('".$name."','".$email."','".$message."')";
$res=mysqli_query($conn,$que);
if($res)
{
  echo '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
  <strong>Success ! </strong> Message Inserted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
  echo '<div class="alert text-center alert-danger alert-dismissible fade show" role="alert">
  <strong>Alert ! </strong> Message Not Inserted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
?>

      
        <form action="#" method="post" name="confm">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
              <label for="" id="lb1"></label>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              <label for="" id="lb2"></label>
            </div>
          </div> 
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
            <label for="" id="lb3"></label>
          </div>
          <div class="text-center mt-2">
            <input type="submit" value="Send Message" class="btn btn-primary" name="msgbtn" onclick="vali()">
        </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section><!-- End Contact Section -->

</main>

<!-- Main Content End -->

<!-- Start Validation -->

<script>
function
vali(){

var name = confm.name.value;
var email = confm.email.value;
var message = confm.message.value;

                          // Contact NAME

  var ptr4 = /^[a-zA-Z ]{2,30}$/

if(name.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter your name";
    document.getElementById("lb1").style.color="red";
    document.getElementById("name").style.borderColor="red";
}
else if (ptr4.test(name)==false)
{
    document.getElementById("lb1").innerHTML="please enter in alphabets";
    document.getElementById("lb1").style.color="red";
    document.getElementById("name").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("name").style.borderColor="green";
}
                     //Company EMAIL

 var ptre = /\w+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/

if(email.length == 0)
{
    document.getElementById("lb2").innerHTML="please enter your Email";
    document.getElementById("lb2").style.color="red";
    document.getElementById("email").style.borderColor="red";
}
else if (ptre.test(email)==false)
{
    document.getElementById("lb2").innerHTML="please enter your valid Email";
    document.getElementById("lb2").style.color="red";
    document.getElementById("email").style.borderColor="red";
}
else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("email").style.borderColor="green";
}


              // Contact Message

  if(message.length == 0)
{
    document.getElementById("lb3").innerHTML="please enter Message";
    document.getElementById("lb3").style.color="red";
    document.getElementById("message").style.borderColor="red";
}

else{
    document.getElementById("lb3").innerHTML="";
   document.getElementById("message").style.borderColor="green";
}
}
</script>

                       <!-- END Validation -->

<!-- Footer Start -->
<?php
include("footeragent.php");
?>
<!-- Footer End -->