<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<style>
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
button {
	border: 1px solid #0000ff;
	background-color: white;
}
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.col {
  float: left;
  padding: 10px;
  height: 100% ; /* Should be removed. Only for demonstration */
}
.column {
  float: left;
  padding: 10px;
  height: 30vh ; /* Should be removed. Only for demonstration */
}
.lef {
	width: 26%
}
.rig {
	width: 50%
}

.left {
  width: 15%;
  
}


.right {
  width: 85%;
  color: black;
  font-family: Roboto;
  background-color: #FFFFFF;
  margin-top: 35px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.btn-group button {
  background-color: #0000FF;
  color: white;
  background-size: 200% auto; 
  padding: 0px 35px; 
  border: none;
  outline: none;
  font-size: 15px;
  height: 3.5vh;
  

}


.center {
  display: block;
  margin-left: auto;
  margin-top: 20px;
  margin-right: auto;
  width: 100%;
  text-align: center;
}
#para {
	text-align: center;
}
.displayimage
{
	margin-top: 43px;
    height: 201px;
    width: 149px;
}
 .img {
 	    border: 1px solid;
	height: 38px;
	width: 52px;
	margin-right:5px;
	vertical-align: bottom;
	display: block;
}
.sign {

	height: 50px;
	width: 150px;
	margin-right:5px;
	vertical-align: bottom;
	display: block;
}
p {
	display: inline;
}

.center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.bottom {
	position: absolute;
	bottom:8px;
	left:16px;
	font-size:18px;
}
.footer{ 
       position: fixed;     
       text-align: left;    
       bottom: 0px;
	   margin-left: 10px;	   
       width: 10%;
	   font-size: .70 em;
	   font-style: italic;
	   color: white;
	   
   } 
#heading { color: #FFFFFF; }
	


.vertical-center {
  margin: 0;
  position: absolute;
  top: 160%;
  margin-left: 50px;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.leftdiv {
	width:100%
	float: left;
	padding: 10px;
}
#rightdiv {
	width:50%
	float: right;
	padding: 10px;
}
.signature {
	margin-top: 30px;
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
#btn{
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
<div class="abouttop">
<hr>
<button><strong style="font-size: 19px;">ABOUT ME</strong></button>
<hr>
</div>


<?php 
	session_start();

	require 'controller/config.php';

	if (isset($_GET)) {

		// get all products
		$query = "SELECT * FROM about";
		$stmt = $db->prepare($query);
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	
?>
<div class="row" style="padding-left: 21%; padding-right: -12px; padding-top: -6px; width: 101%; height: 37%;">
  <div class="col left">
  <img src="img\profile.png" class="displayimage" alt="pic" align="top" border="2">
  <p class="center"> Developer/3D design<p>
    </div>
  <div class="col right" style="background-color:#FFFFFF;">
  <div class="row">
  <div class="column lef">
    <div align="left">
	<img src="img\user.png" class="img" align="left">
	<span>Name</span>
	<br/>
	<p><?php echo $rows[0]['name']; ?></p>
	</div>
	<br>
	<div align="left">
	<img src="img\phone.png" class="img" align="left">
	<span>Phone</span>
	<br/>
	<p><?php echo $rows[0]['phone']; ?></p>
	</div>
	<br>
	
	<div align="left">
	<img src="img\location.png" class="img" align="left">
	<span>Address</span>
	<br/>
	<p><?php echo $rows[0]['address']; ?></p>
	</div>
	
  </div>
  <div class="column rig">
    <div align="left">
	<img src="img\email.png" class="img" align="left">
	<span>Email</span>
	<br/>
	<p><?php echo $rows[0]['email']; ?></p>
	</div>
	<br>
	<div align="left">
	<img src="img\calendar.png" class="img" align="left">
	<span>Date Of Birthday</span>
	<br/>
	<p><?php echo $rows[0]['dob']; ?></p>
	</div>
	<br>
	<div align="left">
	<img src="img\flag.png" class="img" align="left">
	<span>Nationality</span>
	<br/>
	<p><?php echo $rows[0]['nationality']; ?></p>
	</div>
	
  </div>
</div>
	<div align="left" style="width: 92%; text-align: justify;">
	<p>Social Profiles </p> 

	 <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/kousalya-lakshmanan-aa7a31120/"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
    <a href="https://www.google.com/"><i class="fab fa-google"></i></a>
    <a href="https://www.opera.com/"><i class="fab fa-opera"></i></a>

	

	<div class="content">
	<p>I have more than <strong>3.5 years of experience</strong> in the field of <strong>Graphic Design,Web Design, Web development and Mobile Application</strong>
Specialized in Adobe web & graphic designing tools and also in other tools. Professional in Corporate branding,Graphic designing,Web
Designing, Visualization, 3D Design, graphics & animations for e-learning,illustrations, web icons, flash web banner, flash into animations, logos,
brochures, posters, etc.
<br>
<br>
Also in system programming in web enivronment managing languages such as Html, Css, JavaScript and Framework like Bootstrap, Codeigniter
and laravel.
<br>
<br>
<strong>My objectives</strong> are increasing my knowledge in computer science fields and new technologies especially, web development and web Design field.
Always looking forward to learn new technologies and be a part of a huge change in the world</p>
	</div>
	<div class="signature">
	<p>Yours Sincreley,</p><br>
	<img src="img\sign.png" class="sign" align="left">
	</div>
	</div>
	</div>
	</div>

	<a class="gotopbtn" href="homepage.php"><i id="btn" class="fa fa-arrow-up"></i></a>
</body>
</html>
