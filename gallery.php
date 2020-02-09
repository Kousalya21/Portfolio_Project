<html>
<head>

  <link rel="stylesheet" type="text/css" href="image.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <style type="text/css">
    h1{
  font-family: Raleway;
  font-weight: 800;
  text-transform: uppercase;
  margin: 1.66%;
  border-bottom: 2px solid red;
}


ul.port { 
    margin: 1px auto -68px; 
  padding: 0; 
  list-style: none; 
  display: table;
  width: 600px;
  text-align: center;
}
.port li { 
  display: table-cell; 
  position: relative; 
  padding: 15px 0;
}
.port a {
  color: black;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 0.15em;
  
  display: inline-block;
  padding: 15px 20px;
  position: relative;
}
.port a:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #fff;
  
  width: 0;
}
.port a:hover:after { 
  width: 100%; 
  left: 0; 
}
@media screen and (max-height: 300px) {
  ul.port {
    margin-top: 40px;
  }
}
@media screen and (min-width: 60em){
.mb4-l {
    margin-bottom: 0.5rem;
}}
@media screen and (min-width: 60em){
.pl3-l {
    padding-left: 0.5rem;
}}

.imagebox{
padding-top: 49px;
width: 99%;
position: absolute;
}
 .abouttop {
  display:flex;
  justify-content: center;
  align-items: center;
      padding-top: 9px;
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


.i1, .i7, .i10{
  float: left;
  width: 34%;
    height: 419px;
    margin: 6.1px;
}

.i2{
  float: left;
  width: 33%;
    height: 306px;
    margin: 6.1px;
}

.i3{
      float: left;
    width: 30%;
    height: 419px;
    margin: 6.1px;
}



.i5{
  float: left;
  width: 50%;
    height: 200px;
    margin: 6.1px;
}

.i6{
  float: left;
  width: 48%;
    height: 200px;
    margin: 6.1px;
}


.i8{
  float: left;
  width: 33%;
    height: 456px;
    margin: 6.1px;
}

.i9{
  float: left;
  width: 30%;
    height: 271px;
    margin: 6.1px;
}
.i9a{
  float: left;
  width: 30%;
    height: 183px;
    margin: 6.1px;
}



.i11{
  float: left;
  width: 33%;
    height: 404px;
    margin: 6.1px;
}

.i12{
  float: left;
  width: 30%;
    height: 405px;
    margin: 6.1px;
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
<button class="tp"><strong style="font-size: 19px;">PORTFOLIO</strong></button>
<hr>
</div>

    <ul class="port">
  <li><a href="#">All</a></li>
  <li><a href="#">Websites</a></li>
  <li><a href="#">Apps</a></li>
  <li><a href="#">Design</a></li>
  <li><a href="#">Photograpgy</a></li>
</ul>

  <!-- first three images -->
  <div class="imagebox">
  <img class="i1" src="portfolio/1.png">
  <img class="i2" src="portfolio/2.jpg">
  <img class="i3" src="portfolio/3.jpg">

  <!-- second three images -->

  <img class="i5" src="portfolio/17.jpg">
  <img class="i6" src="portfolio/6.jpg">

  <!-- last three images -->

  <img class="i7" src="portfolio/7.png">
  <img class="i8" src="portfolio/8.png">
  <img class="i9" src="portfolio/9.jpg">
   <img class="i9a" src="portfolio/12.png">
  <img class="i10" src="portfolio/10.png">
  <img class="i11" src="portfolio/11.png">
  <img class="i12" src="portfolio/12.png">
</div>
<a class="gotopbtn" href="homepage.php"><i id="btn" class="fa fa-arrow-up"></i></a>


</body>
</html>