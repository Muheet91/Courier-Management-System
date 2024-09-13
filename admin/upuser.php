<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "courier");

if(isset($_GET['up']))
{
$upd = $_GET['up'];

$q = "SELECT * FROM signup WHERE Id = '".$upd."' ";

$res = mysqli_query($conn,$q);

$ro = mysqli_fetch_array($res);
}

if(isset($_POST['upsign'])) {

    $sid = $_POST['Id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if($pass != $cpass){
        echo '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        <strong>Alert ! </strong> Password is not same 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else
    {
    $que = " UPDATE signup SET Name = '".$name."',Email = '".$email."', Password = '".$pass."' WHERE Id = '".$sid."' ";

           $res = mysqli_query($conn,$que);

        echo '<script>window.location.href="usershow.php"</script>';
}


}

?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="assets/css/mystylesheet.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Update_Form</div>
            <div class="title signup">Form</div>
        </div>

            <div class="form-inner">
                <form class="signup" method="post" name="fms">
                <input type="hidden" name="Id" value="<?php echo $ro['Id']?>">
                    <div class="field">
                        <input type="text" placeholder="Name" name="name" id="name" required value="<?php echo $ro['Name']?>">
                        <label for="" id="lb1"></label>
                    </div>
                    <div class="field">
                        <input type="email" placeholder="Email Address" name="email" id="email" required value="<?php echo $ro['Email']?>">
                        <label for="" id="lb2"></label>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Password" name="pass" id="pass" required value="<?php echo $ro['Password']?>">
                        <label for="" id="lb3"></label>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Confirm Password" name="cpass" id="cpass" required value="<?php echo $ro['Password']?>">
                        <label for="" id="lb4"></label>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="upsign" onclick="validsign()">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
function
validsign(){

var name = fms.name.value;    
var email = fms.email.value;
var pass = fms.pass.value;
var cpass = fms.cpass.value;

                          // FIRST NAME

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
else if (ptre.test(lemail)==false)
{
    document.getElementById("lb2").innerHTML="please enter your valid Email";
    document.getElementById("lb2").style.color="red";
    document.getElementById("email").style.borderColor="red";
}
else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("email").style.borderColor="green";
}

            // signup PASSWORD

var pa=/^(?=.*\d).{8,}$/

if(pass.length == 0)
{
    document.getElementById("lb3").innerHTML="plaese enter your Password";
    document.getElementById("lb3").style.color="red";
    document.getElementById("pass").style.borderColor="red";
}
else if (pa.test(pass)==false)
{
    document.getElementById("lb3").innerHTML="Please enter 8 digits Password";
    document.getElementById("lb3").style.color="red";
    document.getElementById("pass").style.borderColor="red";
}
else{
    document.getElementById("lb3").innerHTML="";
    document.getElementById("pass").style.borderColor="green";
}
             // confirm signup PASSWORD


if(cpass.length == 0)
{
    document.getElementById("lb4").innerHTML="Please Confirm Password";
    document.getElementById("lb4").style.color="red";
    document.getElementById("cpass").style.borderColor="red";
}
else if (pa.test(lpass)==false)
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
   

    <script src="assets/js/myjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
