<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "courier");

?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup Form</title>
    <link rel="stylesheet" href="assets/css/mystyle.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
            <?php
if(isset($_POST['btnlog'])) {
    $em = $_POST['lemail'];
    $pass = $_POST['lpass'];
  
    $q = "SELECT * FROM signup WHERE Email = '$em'";
    $result = mysqli_query($conn,$q);
        $row = mysqli_fetch_array($result);
        $lpass=$row['Password'];
        if($pass == $lpass){
            $_SESSION['logname'] = $row['Name'];
            header("Location:indexlog.php");
        } 
        
        else {
            echo "<script>alert('Invalid Password');</script>";
            echo '<script>window.location.href="login.php"</script>';

        }}
            ?>
            <div class="form-inner">
                <!-- LOGIN FORM -->
                <form class="login" method="post" name="fm">
                    <div class="field">
                        <input type="text" placeholder="Email Address" name="lemail" id="lemail" required>
                        <label for="" id="lb1"></label>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="lpass" id="lpass" required>
                        <label for="" id="lb2"></label>
                    </div>
                    <div class="pass-link my-2" style="margin-top: 20px;"><p>Create an Account ? <a href="signup.php">SignUp</a></p></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="btnlog" value="login" onclick="valid()">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
function
valid(){

var lemail = fm.lemail.value;
var lpass = fm.lpass.value;

                     //Company EMAIL

var ptre = /\w+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/

if(lemail.length == 0)
{
    document.getElementById("lb1").innerHTML="please enter your Email";
    document.getElementById("lb1").style.color="red";
    document.getElementById("lemail").style.borderColor="red";
}
else if (ptre.test(lemail)==false)
{
    document.getElementById("lb1").innerHTML="please enter your valid Email";
    document.getElementById("lb1").style.color="red";
    document.getElementById("lemail").style.borderColor="red";
}
else{
    document.getElementById("lb1").innerHTML="";
    document.getElementById("lemail").style.borderColor="green";
}

             // company PASSWORD

var pa=/^(?=.*\d).{8,}$/

if(lpass.length == 0)
{
    document.getElementById("lb2").innerHTML="plaese enter your Password";
    document.getElementById("lb2").style.color="red";
    document.getElementById("lpass").style.borderColor="red";
}
else if (pa.test(lpass)==false)
{
    document.getElementById("lb2").innerHTML="Please enter 8 digits Password";
    document.getElementById("lb2").style.color="red";
    document.getElementById("lpass").style.borderColor="red";
}
else{
    document.getElementById("lb2").innerHTML="";
    document.getElementById("lpass").style.borderColor="green";
}


}
</script>

    <script src="assets/js/myjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

