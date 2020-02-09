<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    html, body {
  margin: 0;
  padding: 0;
  font-family: Helvetica, sans-serif;
}

section#timeline {
    width: 70%;
        margin: 111px 213px 14px;
    position: relative;
}
section#timeline:before {
  content: '';
  display: block;
  position: absolute;
  left: 50%;
  top: 0;
  margin: 0 0 0 -1px;
  width: 2px;
  height: 100%;
  background: black;
}
section#timeline article {
  width: 100%;
      margin: -6px 0px 17px 0px;
  position: relative;
}
section#timeline article:after {
  content: '';
  display: block;
  clear: both;
}
section#timeline article div.inner {
  width: 40%;
  float: left;
  margin: 5px 0 0 0;
  border-radius: 6px;
}
section#timeline article div.inner span.date {
  display: block;
  width: 54px;
  height: 38px;
  padding: 5px 0;
  position: absolute;
  top: 0;
  left: 50%;
  margin: 0 0 0 -32px;
  border-radius: 100%;
  font-size: 12px;
  font-weight: 900;
  text-transform: uppercase;
    background: #f3f7fb;
    color: rgb(0, 0, 0);
    border: 2px solid rgba(241, 241, 241, 0.2);
    box-shadow: 0 0 0 7px #25303B;
}
section#timeline article div.inner span.date span {
  display: block;
  text-align: center;
}
section#timeline article div.inner span.date span.day {
  font-size: 10px;
}
section#timeline article div.inner span.date span.month {
  font-size: 18px;
}
section#timeline article div.inner span.date span.year {
  font-size: 10px;
}
section#timeline article div.inner h2 {
  padding: 15px;
  margin: 0;
  color: #fff;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: -1px;
  border-radius: 6px 6px 0 0;
  position: relative;
}
section#timeline article div.inner h2:after {
  content: '';
  position: absolute;
  top: 20px;
  right: -5px;
    width: 10px; 
    height: 10px;
  -webkit-transform: rotate(-45deg);
}
section#timeline article div.inner p {
  padding: 15px;
  margin: 0;
  font-size: 14px;
  background: #edefe3cc;
  color: #656565;
  border-radius: 0 0 6px 6px;
}
section#timeline article:nth-child(2n+2) div.inner {
  float: right;
}
section#timeline article:nth-child(2n+2) div.inner h2:after {
  left: -5px;
}
section#timeline article:nth-child(1) div.inner h2 {
  background: blue;
}
section#timeline article:nth-child(1) div.inner h2:after {
  background: blue;
}
section#timeline article:nth-child(2) div.inner h2 {
  background: blue;
}
section#timeline article:nth-child(2) div.inner h2:after {
  background: blue;
}
section#timeline article:nth-child(3) div.inner h2 {
  background: blue;
}
section#timeline article:nth-child(3) div.inner h2:after {
 background: blue;
}
section#timeline article:nth-child(4) div.inner h2 {
  background: blue;
}
section#timeline article:nth-child(4) div.inner h2:after {
 background: blue;
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
 <?php 
  session_start();

  require 'controller/config.php';

  if (isset($_GET)) {

    // get all products
    $query = "SELECT * FROM work";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  
?>

      <div class="abouttop">
<hr>
<button class="tp"><strong style="font-size: 19px;">RESUMES</strong></button>
<hr>
</div>
<section id="timeline">
  <article>
    <div class="inner">
      <span class="date">
        
        <span class="month">2014</span>
        
      </span>
      <h2><?php echo $rows[0]['company']?></h2>
      <p><?php echo $rows[0]['designation']?></p>
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
       <span class="month">2016</span>
      </span>
      <h2><?php echo $rows[1]['company']?></h2>
      <p><?php echo $rows[1]['designation']?></p>
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
        
        <span class="month">2017</span>
        
      </span>
      <h2><?php echo $rows[2]['company']?></h2>
      <p><?php echo $rows[2]['designation']?></p>
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
       <span class="month">2019</span>
      </span>
      <h2><?php echo $rows[3]['company']?></h2>
      <p><?php echo $rows[3]['designation']?></p>
    </div>
  </article>
  
   
  
</section>
<a class="gotopbtn" href="homepage.php"><i id="btn" class="fa fa-arrow-up"></i></a>
</body>
</html>