<?php 
  session_start();
  require 'controller/validation.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="css\portfolio.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="wrapper">
<?php 
  
  
    if ((isset($_SESSION)) && isset($_SESSION['uid'])) 
      {
        if ($_SESSION['role'] == 'admin') {
        require 'nav_admin.php';
      } else {
        require 'nav_loggedin.php';
      }
      } 
       else {
        require 'nav.php';
      }
     
?>

<div class="main">

 <div class="">
   <h2 style="font-size: 50px;">HELLO I'M</h2>
   <br>

   <h1 style="font-size: 52px;"><strong>KOUSALYA LAKSHMANAN</strong></h1>
   <br>
   <h2 style="font-size: 50px;">MOBILE DEVELOPER</h2>
   <br>
    <a href="img\kousalya.pdf" download><button  style="background-color: blue;color: #fff; border: none;padding:5px 16px; font-size: 20px;" class="btn"> Download My CV  <i class="fa fa-download" ></i></button></a>
   </div>
</div>

<section id="login">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form name="login_form" action="controller/login_controller.php" method="post" name="vform">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>User:</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
        <div class="invalid-feedback">Enter the user name</div>
        <br>

        <label>Password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <div class="invalid-feedback">Enter the Password</div>
        <br>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="login_submit">Getin</button>
      </div>
    </div>
    </form>
  </div>
</div>
</section>


<section id="sign">
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">


    <form name="signup_form" action="controller/signup_controller.php" method="post" class="needs-validation" novalidate>

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Check In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <div class="modal-body">
    
      <label>Name:</label>
      <input type="text" class="form-control" name="fname"  id="fname" placeholder="First name"  required>
      <div class="invalid-feedback">Enter the first name</div>

      <label>Last name:</label>
      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required>
      <div class="invalid-feedback">Enter the Last name</div>

      <label>Email:</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
      <div class="invalid-feedback">Enter the email</div>

      <label>User:</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
      <div class="invalid-feedback">Enter the user id</div>

      <label>Password:</label>
      <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
      <div class="invalid-feedback">Enter the Password</div>

      <label>Repeat Password:</label>
      <input type="password" class="form-control" name="rpassword" id="rpass" placeholder="Confirm Password" required>
      <div class="invalid-feedback">Confirm password</div>
   </div>
    
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="signup_submit">Getin</button>
      </div>
    </div>

</form>

<script>
// Javascript Validation
(function() {
  'use strict';
  window.addEventListener('load', function() {

    var forms = document.getElementsByClassName('needs-validation');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



<?php
//PHP Validation

$error = '';
$fname = '';
$lname = '';
$email = '';
$username = '';
$password = '';
$rpassword = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["fname"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["fname"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$fname))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
  if(empty($_POST["lname"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["lname"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$lname))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["dob"]))
 {
  $error .= '<p><label class="text-danger">Date of birth is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["dob"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Date of birth is required</label></p>';
 }

 if(empty($_POST["address"]))
 {
  $error .= '<p><label class="text-danger">Address is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["address"]);
 }
            
}

?>
 
    
</body>
</html> 
