<?php


$name = $_POST['name'];
$number= $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];


$formcontent="From: $name \nContact me: $number \nEmail: $email \nMessage: $message";
$recipient = "kousalya2627@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n ";


$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(!preg_match($email_exp,$email)) 
        {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
        }
         
         
        if(!preg_match($string_exp,$name)) 
        {
            $error_message .= 'The First Name you entered does not appear to be valid.<br />';
        }
         
        if(strlen($number) < 10) 
        {
            $error_message .= 'The Number you entered does not appear to be valid.<br />';
        }
         
        if(strlen($message) < 2) 
        {
            $error_message .= 'The Comments you entered do not appear to be valid.<br />';
        }
         
        if(strlen($error_message) > 0) 
        {
            die($error_message);
        }


mail($recipient, $subject, $formcontent, $mailheader);
echo "Mail sent!";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style type="text/css">
        #btn1{
                position: fixed;
                width: 100px;
                height: 100px;    
                
                line-height: 50px;
                color: green;
                font-size: 22px;
            
    }

   .box {
            width: 20%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
          }
          .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid orange;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
          }
          .button:hover {
            background: orange;
          }
          .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: visible;
            opacity: 1;
          }
          .overlay:target {
            visibility: hidden;
            opacity: 0;
            display:none
          }
          .popup { position: relative;
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            
            transition: all 5s ease-in-out; }

.popup .close       { position: absolute; top: 20px; right: 30px; transition: all 200ms;
                      font-size: 30px; font-weight: bold; text-decoration: none; color: #333; }
.popup .close:hover { color: orange; }
.popup .content     { height: 170px; overflow: auto; }
.fa-check-circle:before {
    font-size: 120px;
    padding-left: 138px;
    content: "\f058";
}


    </style>
</head>
<body style="font-style: 'Rajdhani';">
       <div class="box">
    </div> 

    <div id="popup1" class="overlay">
        <div class="popup" >
           
            
            <div class="content">
                <h3><center> MESSAGE SENT!! </center></h3>
                <br>
                <a><i id="btn1" class="far fa-check-circle"></i></a>
                <br>
                <br>
                <br>
                
            </div>
            <button><a href="homepage.php">Go back</a></button>
        </div>

    </div>

</body>
</html>