<?php
include("header.php");
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <b><h2 class="text-center my-3 text-primary">Workers Form</h2></b>

                      <?php

if(isset($_POST['add'])){

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$city = $_POST['city'];
$address = $_POST['address'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];


$q="INSERT INTO worker (worker_firstName,worker_lastName,worker_city,worker_address,worker_mail,worker_phone,worker_pass) 
VALUES('".$fname."','".$lname."','".$city."','".$address."','".$mail."','".$phone."','".$pass."')";
$res=mysqli_query($conn,$q);
if($res)
{
       echo '<script>window.location.href="showworker.php"</script>';
  echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
  <strong>Success ! </strong> Your Data is inserted successfully
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
  echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
  <strong>Alert ! </strong> Your Data is not inserted
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
?>

          <form class="row g-3" method="post" name="fm">
            <div class="col-6">
              <label for="uname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="uname"  name="firstname" placeholder="Enter your First Name" required>
              <label for="" id="lb1"></label>
            </div>
            <div class="col-6">
              <label for="ulname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="ulname"  name="lastname" placeholder="Enter Your Last Name" required>
              <label for="" id="lb2"></label>
            </div>
            <div class="col-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required>
              <label for="" id="lb3"></label>
            </div>
             <div class="col-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
              <label for="" id="lb4"></label>
            </div>
            <div class="col-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Mail" 
              required>
              <label for="" id="lb5"></label>
            </div>
            <div class="col-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="number" class="form-control" id="phone"  name="phone" maxlength="11" placeholder="Enter Your Phone Number" required>
              <label for="" id="lb6"></label>
            </div>
            <div class="col-12">
              <label for="pass" class="form-label">Password</label>
              <input type="text" class="form-control" id="pass" name="pass" placeholder="Enter Your Password" required>
              <label for="" id="lb7"></label>
            </div>
            <div class="text-center mt-3">
            <input type="submit" value="Add" name="add" class="btn btn-primary btn-block w-25" onclick="validate()">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
</main>
               <!-- start validation -->
<script>
function
validate(){

var name = fm.firstname.value;
var name2 = fm.lastname.value;
var city = fm.city.value;
var address = fm.address.value;
var email = fm.email.value;
var phone = fm.phone.value;
var pass = fm.pass.value;


// var ptr4 = /\w[a-zA-Z]$/
var ptr4 = /^[a-zA-Z ]{2,30}$/

                          // FIRST NAME

if(name.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter your name";
    document.getElementById("lb1").style.color="red";
    document.getElementById("uname").style.borderColor="red";
}



else if (ptr4.test(name)==false)
{
    document.getElementById("lb1").innerHTML="please enter in alphabets";
    document.getElementById("lb1").style.color="red";
    document.getElementById("uname").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("uname").style.borderColor="green";
}

                          // lAST NAME 

if(name2.length == 0)
{
    document.getElementById("lb2").innerHTML="please enter your Last name";
    document.getElementById("lb2").style.color="red";
    document.getElementById("ulname").style.borderColor="red";
}



else if (ptr4.test(name2)==false)
{
    document.getElementById("lb2").innerHTML="please enter in alphabets";
    document.getElementById("lb2").style.color="red";
    document.getElementById("ulname").style.borderColor="red";
}
else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("ulname").style.borderColor="green";
}
                                   // CITY

if(name2.length == 0)
{
    document.getElementById("lb3").innerHTML="please enter your Last name";
    document.getElementById("lb3").style.color="red";
    document.getElementById("city").style.borderColor="red";
}



else if (ptr4.test(city)==false)
{
    document.getElementById("lb3").innerHTML="please enter in alphabets";
    document.getElementById("lb3").style.color="red";
    document.getElementById("city").style.borderColor="red";
}
else{
    document.getElementById("lb3").innerHTML="";
    document.getElementById("city").style.borderColor="green";
}
                   // Address

                   if(address.length == 0)
{
    document.getElementById("lb4").innerHTML="please enter your Address";
    document.getElementById("lb4").style.color="red";
    document.getElementById("address").style.borderColor="red";
}

else{
    document.getElementById("lb4").innerHTML="";
    document.getElementById("address").style.borderColor="green";
}

                     // EMAIL

var ptre = /\w+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/

if(email.length == 0)
{
    document.getElementById("lb5").innerHTML="please enter your Email";
    document.getElementById("lb5").style.color="red";
    document.getElementById("email").style.borderColor="red";
}
else if (ptre.test(email)==false)
{
    document.getElementById("lb5").innerHTML="please enter your valid Email";
    document.getElementById("lb5").style.color="red";
    document.getElementById("email").style.borderColor="red";
}
else{
    document.getElementById("lb5").innerHTML="";
    document.getElementById("email").style.borderColor="green";
}

             // PHONE

var ptrp=/^.{11}$/

if(phone.length == 0)
{
    document.getElementById("lb6").innerHTML="plaese enter your number";
    document.getElementById("lb6").style.color="red";
    document.getElementById("phone").style.borderColor="red";
}
else if (ptrp.test(phone)==false)
{
    document.getElementById("lb6").innerHTML="enter right number";
    document.getElementById("lb6").style.color="red";
    document.getElementById("phone").style.borderColor="red";
}
else{
    document.getElementById("lb6").innerHTML="";
    document.getElementById("phone").style.borderColor="green";
}
             // PASSWORD

var pa=/^(?=.*\d).{8,}$/

if(pass.length == 0)
{
    document.getElementById("lb7").innerHTML="plaese enter your Password";
    document.getElementById("lb7").style.color="red";
    document.getElementById("pass").style.borderColor="red";
}
else if (pa.test(pass)==false)
{
    document.getElementById("lb7").innerHTML="Please enter 8 digits Password";
    document.getElementById("lb7").style.color="red";
    document.getElementById("pass").style.borderColor="red";
}
else{
    document.getElementById("lb7").innerHTML="";
    document.getElementById("pass").style.borderColor="green";
}


}
</script>
                          <!-- end validation -->
<?php
include("footer.php");
?>