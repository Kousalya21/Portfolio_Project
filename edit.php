<?php


$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
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
 
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
            
}

?>
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
    .gotopbtn{
    position: fixed;
    width: 50px;
    height: 50px;
    background:#2c3e50;
    bottom: 40px;
    right:50px;
    
    text-align: center;
    line-height: 50px;
    color: blue;
    font-size: 22px;
    border: none;
    }
  </style>
  </head>
 <body>

  <?php

  session_start();

  require 'controller/config.php';

  if (isset($_GET)) {

    // get all products
    $query = "SELECT * FROM about, lang, work, company";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  
?>

  <br />
  <div class="container">
    
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
     <h3 align="center">Modify Details</h3>
     <br />
     <?php echo $error; ?>


     <form name="edit_form" action="controller/edit_about.php" method="post" class="needs-validation" novalidate>
      <h2><strong><u>ABOUT ME</u></strong></h2>
      <div class="form-group">
       <label>Name:</label>
       <input type="text" name="name"  class="form-control" value="<?php echo $rows[0]['name']; ?>" required />
      </div>
      
      <div class="form-group">
       <label>Email:</label>
       <input type="text" name="email" class="form-control"  value="<?php echo $rows[0]['email']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Phone:</label>
       <input type="text" name="phone" class="form-control"  value="<?php echo $rows[0]['phone']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Date of Birth:</label>
       <input type="text" name="dob" class="form-control"  value="<?php echo $rows[0]['dob']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Address:</label>
       <input type="text" name="address" class="form-control" value="<?php echo $rows[0]['address']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Nationality:</label>
       <input type="text" name="nationality" class="form-control" value="<?php echo $rows[0]['nationality']; ?>" />
      </div>
       <button type="submit" class="btn btn-primary" name="edit_submit1">Submit</button>
    </form>
<hr>
<form name="edit_form" action="controller/edit_skills.php" method="post" class="needs-validation" validate>
      <h2><strong><u>SKILLS</u></strong></h2>

      <div class="form-group">
       <label>Language 1:</label>
       <input type="text" name="name1" class="form-control" value="<?php echo $rows[0]['name1']; ?>" required />
      </div>

      <div class="form-group">
       <label>language 2:</label>
       <input type="text" name="name2" class="form-control" value="<?php echo $rows[0]['name2']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Language 3:</label>
       <input type="text" name="name3" class="form-control" value="<?php echo $rows[0]['name3']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Language 4:</label>
       <input type="text" name="name4" class="form-control" value="<?php echo $rows[0]['name4']; ?>" required/>
      </div>

         <button type="submit" class="btn btn-primary" name="edit_submit2">Submit</button>

    </form>

<hr>
<form name="edit_form" action="controller/edit_work.php" method="post" class="needs-validation" novalidate>
      <h2><strong><u>RESUME</u></strong></h2>
      
      <div class="form-group">
       <label>Work 1:</label>
       <input type="text" name="company1" class="form-control" value="<?php echo $rows[0]['company1']; ?>" required/>
       <input type="text" name="name" class="form-control" value="<?php echo $rows[0]['designation']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Work 2:</label>
       <input type="text" name="company2" class="form-control" value="<?php echo $rows[1]['company2']; ?>" required/>
       <input type="text" name="name" class="form-control" value="<?php echo $rows[1]['designation']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Work 3:</label>
       <input type="text" name="company3" class="form-control" value="<?php echo $rows[2]['company3']; ?>" required/>
       <input type="text" name="name" class="form-control" value="<?php echo $rows[2]['designation']; ?>" required/>
      </div>

      <div class="form-group">
       <label>Work 4:</label>
       <input type="text" name="company4" class="form-control" value="<?php echo $rows[3]['company4']; ?>" required/>
       <input type="text" name="name" class="form-control" value="<?php echo $rows[3]['designation']; ?>" required/>
      </div>

         <button type="submit" class="btn btn-primary" name="edit_submit3">Submit</button>

    </form>
    
    </div>
   </div>
 
  </div>
  <a class="gotopbtn" href="homepage.php"><i class="fa fa-arrow-up"></i></a>
 </body>
</html>


