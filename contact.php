<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
#btn1{
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
body.con{
        padding-top: 105px;
    padding-left: 22%;
}
input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 12px 12px;
  margin: 6px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 0.5em;
}

div.info{
    height: 47px;
}


div.content{
    float: left;
    width: 28%;
    padding-left: 45%;
}

section{
    padding-top: 110px;
    padding-left: 20%;
}
}


div.test{
    
}
.contact .content .info {
  
}
.getin{
  background-color: blue;
  border: none;
  color: white;
  padding: 8px 23px;
  text-align: center;
  font-size: 14px;
  margin: 3px 2px;
  opacity: 1;


}
#btn{
   
    position: fixed;
  width: 40px;
  height: 43px;
  background:blue;
    
    
    text-align: center;
    line-height: 50px;
    color: white;
    font-size: 22px;
    border: none;
    
}
.contact .content .info h4 {
    font-size: 13px;
    line-height: 1.4;
}

.contact .content .info h4 span {
    font-size: 13px;
    font-weight: 300;
    color: #999999;
}

.lef {
    width: 26%;
}
.column {
    float: left;
    padding: 32px;
    height: 30vh;
}
.rig {
    width: 50%
}

.right {
  width: 85%;
  color: black;
  font-family: Roboto;
  background-color: #FFFFFF;
  margin-top: -9px;
  padding-left: 117px;
}

* {
    box-sizing: border-box;
}
a i {
    border: double;
    border-color: black;
    border-width: medium;
    background-color: white;
    width: 29px;
    height: 24px;
    text-align: center;
    font-size: 14px;
        color: black;
}
.abouttop {
  display:flex;
  justify-content: center;
  align-items: center;
}
hr {
  flex: 1;
  border: none;
  height: 1px;
  background: silver;
  
}
button.tp {
    border: 1px solid #0000ff;
    background-color: white;
}

span{
padding-left: 50px;

}

</style> 
</head>
<body> 

<?php
//PHP Validation

$error = '';
$name = '';
$email = '';
$phone = '';
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
<div class="abouttop">
<hr>
<button class="tp"><strong style="font-size: 19px;">CONTACT ME</strong></button>
<hr>
</div>


            <section>
                    <div class="column lef">
                    
                        <div class="info">
                            <i id="btn" class="fas fa-map-marker-alt"></i>
                           <span><strong>Address:</strong> Arlington, TX.</span>
                        </div>
                      
                          <div class="info">
                            <i id="btn" class="fas fa-phone"></i>
                           <span><strong>Phone:</strong> 682-283-6140</span>
                        </div>

                         <div class="info">
                            <i id="btn"  class="fab fa-whatsapp"></i>
                           <span><strong>Whatsapp:</strong> 682-283-6140</span>
                        </div>

                         <div class="info">
                           <i id="btn"  class="far fa-envelope"></i>
                           <span><strong>Email:</strong>Kousalya@mavs.uta.edu</span>
                        </div>
                      
                         <!-- Info-2 -->
                        <div class="info">
                            <i id="btn"  class="fas fa-home"></i>
                            <span><strong>Website:</strong><a href="https://www.google.co.in">www.website.com</a></span>
                        </div>
                    
                        <br>
                        <br>
                        
                      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.linkedin.com/in/kousalya-lakshmanan-aa7a31120/"><i class="fab fa-linkedin-in"></i></a>
                      <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                      <a href="https://www.linkedin.com/in/kousalya-lakshmanan-aa7a31120/"><i class="fab fa-google"></i></a>
                      <a href="https://www.opera.com/"><i class="fab fa-opera"></i></a>

                       
                    </div>
            
            <form action="sendemail.php" method="POST">
                      <div class="column rig">
     
                        <div class="right">
                            
                            <div class="">
                                <input type="text" placeholder="Your name" name="name" id="name" required>
                            </div>
                            <div class="">
                                <input type="text" placeholder="Your Email" name="email" id="email" required>
                            </div>
                            <div class="">
                                <input type="text" placeholder="Phone number" name="number" id="number" required>
                            </div>
              
                        <div class="">
                            <textarea rows="5" placeholder="Enter your message" name="message" id="message"></textarea> 
                        </div>
                         
                         <div class="form-group">
                            <input style="background-color: blue;" type="submit" name="send" class="btn btn-info" value="Send" />
                            </div>
                        </div>

                    </div>
            </form>
              </section>

<a class="gotopbtn" href="homepage.php"><i id="btn1" class="fa fa-arrow-up"></i></a>
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

</body>
</html>

<!--action="controller/contact_controller.php">
!-- <button type="submit" id="submit" class="getin" name="contact_submit">Send Now</button>