<?php
include("header.php");
?>

<?php

if(isset($_GET['upd']))
{
$up = $_GET['upd'];

$q = "SELECT * FROM worker WHERE worker_id = '".$up."' ";

$res = mysqli_query($conn,$q);

$ro = mysqli_fetch_array($res);
}

if(isset($_POST['upbtn']))
{
    $uid = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];


    $que = " UPDATE worker SET worker_firstName = '".$fname."',worker_lastName = '".$lname."',worker_city = '".$city."',worker_address = '".$address."',worker_mail = '".$email."',worker_phone = '".$phone."',worker_pass = '".$pass."' WHERE worker_id = '".$uid."' ";

           $res = mysqli_query($conn,$que);

if($res)
{
echo '<script>window.location.href="showworker.php"</script>';
}
}
?>

<main id="main" class="main">
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <b><h2 class="text-center my-3 text-primary">Workers Form</h2></b>

          <form class="row g-3" method="post" name="fm">

              <input type="hidden" name="id" value="<?php echo $ro['worker_id']?>">
            <div class="col-6">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Enter your First Name" required
              value="<?php echo $ro['worker_firstName']?>">
              <label for="" id="lb1"></label>
            </div>
            <div class="col-6">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="Enter Your Last Name" required
              value="<?php echo $ro['worker_lastName']?>">
              <label for="" id="lb2"></label>
            </div>
            <div class="col-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required
              value="<?php echo $ro['worker_city']?>">
              <label for="" id="lb3"></label>

            </div>
             <div class="col-6">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required
              value="<?php echo $ro['worker_address']?>">
              <label for="" id="lb4"></label>

            </div>
            <div class="col-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Mail" required
              value="<?php echo $ro['worker_mail']?>">
              <label for="" id="lb5"></label>
            </div>
            <div class="col-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control"  name="phone" id="phone" maxlength="12" placeholder="Enter Your Phone Number" required
              value="<?php echo $ro['worker_phone']?>">
              <label for="" id="lb6"></label>
            </div>
            <div class="col-12">
              <label for="pass" class="form-label">Password</label>
              <input type="text" class="form-control" id="pass"  name="pass" placeholder="Enter Your Password" required
              value="<?php echo $ro['worker_pass']?>">
              <label for="" id="lb7"></label>
            </div>
            <div class="text-center mt-3">
            <input type="submit" value="Update" name="upbtn" class="btn btn-primary btn-block w-25" onclick="valida()">
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
valida(){

var firstname = fm.firstname.value;
var lastname = fm.lastname.value;
var city = fm.city.value;
var address = fm.address.value;
var email = fm.email.value;
var phone = fm.phone.value;
var pass = fm.pass.value;


// var ptr4 = /\w[a-zA-Z]$/
var ptr4 = /^[a-zA-Z ]{2,30}$/

                          // FIRST NAME

var ptr4 = /^[a-zA-Z ]{2,30}$/ 
if(firstname.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter your name";
    document.getElementById("lb1").style.color="red";
    document.getElementById("firstname").style.borderColor="red";
}



else if (ptr4.test(firstname)==false)
{
    document.getElementById("lb1").innerHTML="please enter in alphabets";
    document.getElementById("lb1").style.color="red";
    document.getElementById("firstname").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("firstname").style.borderColor="green";
}

                          // lAST NAME 

if(lastname.length == 0)
{
    document.getElementById("lb2").innerHTML="please enter your Last name";
    document.getElementById("lb2").style.color="red";
    document.getElementById("lastname").style.borderColor="red";
}



else if (ptr4.test(lastname)==false)
{
    document.getElementById("lb2").innerHTML="please enter in alphabets";
    document.getElementById("lb2").style.color="red";
    document.getElementById("lastname").style.borderColor="red";
}
else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("lastname").style.borderColor="green";
}
                                   // CITY

if(city.length == 0)
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
