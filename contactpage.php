<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <link rel="stylesheet" href="contactpage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="navBar">
      <header>

        <nav> 
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>


          <div class="oneabqlogo">
            <a href="oneabqhome.php"><img src="abqhoriz.png" class="logo"></a>
          </div>
         <div class="menu">
           <ul>
              <li><a href="aboutabq.php" style=font-size:15px;>About</a></li>
              <li><a href="priorities.php" style=font-size:15px;>Priorities</a></li>
              <li class="activeNav"><a href="contactpage.php" style=font-size:15px><font color="red";>Contact</font></a></li>
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
           </ul>
          </div>
        </nav>
      </header>
    </div>
<div class="splashPage">
    <h1 class="heading">Contact Us</h1>
    <p class="text">We are turning government inside out and are eager<br>
    to hear your thoughts and be in touch with you. See<br>
    our team and contact us directly below.</p>
</div>
<div class="masthead">
  <div class="main">
  <?php perch_content("Contact form"); ?>
</div>

<div class="footer">
    <div class="row">
        <div class="col-md-4">
            <h4>CONTACT US</h4>
            <p>onealbuquerque@cabq.com</p>
            <p>+1.505.768.3000</p>
        </div>
        <div class="col-md-4">
            <img src="abqhoriz.png" class="footerLogo"> 
        </div>
        <div class="col-md-4 , links">
            <ul>
                <li><a href="oneabqhome.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="priorities.html">Priorities</a></li>
                <li><a href="contactpage.html">Contact</a></li>
                <li><a href="donate.html">Donate</a></li>
            </ul>
        </div>
    </div>
        <p class="rights">2019 City of Albuquerque | All Rights Reserved | The offical website for the One Albuquerque Fund</p>
</div>





<script src="oneabq.js"></script>

</body>
</html>